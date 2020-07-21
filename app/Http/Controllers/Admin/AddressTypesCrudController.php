<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddressTypesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AddressTypesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AddressTypesCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\AddressTypes::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/settings/addresstypes');
        CRUD::setEntityNameStrings('addresstypes', 'address_types');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation() // Untuk view, atau index()
    {
        $this->crud->addColumns([
            [
                'label' => 'Street',
                'name' => 'street',
            ],
            [
                'label' => 'City',
                'name' => 'city',
            ],
            [
                'label' => 'State',
                'name' => 'state',
            ],
            [
                'label' => 'Zip',
                'name' => 'zip',
            ],
        ]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation() //Untuk view form insert
    {
        CRUD::setValidation(AddressTypesRequest::class);

        $this->crud->addFields([
            [
                'label' => 'City',
                'name' => 'city',
            ],
            [
                'label' => 'State',
                'name' => 'state',
            ],
            [
                'label' => 'Street',
                'name' => 'street',
            ],
            [
                'label' => 'Zip',
                'name' => 'zip',
            ],
        ]);
        CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
