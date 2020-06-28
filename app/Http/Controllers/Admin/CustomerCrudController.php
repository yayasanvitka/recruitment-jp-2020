<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CustomerRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CustomerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CustomerCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Customer::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/customer');
        CRUD::setEntityNameStrings('customer', 'customers');

        CRUD::denyAccess(['show', 'delete']);
        $this->crud->query->with('type.segment');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumns([
            [
                'label' => 'Segment',
                'name' => 'type.segment.name',
            ],
            [
                'label' => 'Type',
                'name' => 'type.name',
            ],
            [
                'label' => 'Code',
                'name' => 'code',
            ],
            [
                'label' => 'Name',
                'name' => 'name',
            ],
            [
                'label' => 'Phone',
                'name' => 'phone',
            ],
            [
                'label' => 'Email',
                'name' => 'email',
                'type' => 'email',
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
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CustomerRequest::class);

        $this->crud->addFields([
            [
                'label' => 'Code',
                'name' => 'code',
                'wrapper' => [
                    'class' => 'form-group col-md-6'
                ]
            ],
            [
                'label' => 'Name',
                'name' => 'name',
                'wrapper' => [
                    'class' => 'form-group col-md-6'
                ]
            ],
            [
                'label' => 'Segment',
                'name' => 'type.segment',
                'tab' => 'Basic Information'
            ],
            [
                'label' => 'Type',
                'name' => 'type_id',
                'allows_null' => true,
                'tab' => 'Basic Information'
            ],
            [
                'label' => 'Phone',
                'name' => 'phone',
                'tab' => 'Contact'
            ],
            [
                'label' => 'Email',
                'name' => 'email',
                'type' => 'email',
                'tab' => 'Contact'
            ],
        ]);

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
