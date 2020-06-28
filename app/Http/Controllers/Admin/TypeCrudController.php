<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TypeRequest;
use App\Models\Segment;
use App\Models\Type;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;

/**
 * Class TypeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TypeCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\FetchOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Type::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/settings/segment-type');
        CRUD::setEntityNameStrings('type', 'types');

        $this->crud->denyAccess(['show']);
        $this->crud->orderBy('segment_id', 'ASC')->orderBy('code', 'ASC');
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
                'name' => 'segment_id',
                'type' => 'select_from_array',
                'options' => Segment::pluck('name', 'id')->toArray(),
            ],
            [
                'label' => 'Code',
                'name' => 'code',
            ],
            [
                'label' => 'Name',
                'name' => 'name',
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
        CRUD::setValidation(TypeRequest::class);

        $this->crud->addFields([
            [
                'label' => 'Segment',
                'name' => 'segment_id',
                'type' => 'relationship',
                'inline_create' => [
                    'entity' => 'segment', // the entity in singular
                    // OPTIONALS
                    'force_select' => true, // should the inline-created entry be immediately selected?
                    'modal_class' => 'modal-dialog modal-xl', // use modal-sm, modal-lg to change width
                    'modal_route' => route('segment-inline-create'), // InlineCreate::getInlineCreateModal()
                    'create_route' =>  route('segment-inline-create-save'), // InlineCreate::storeInlineCreate()
                ],
            ],
            [
                'label' => 'Code',
                'name' => 'code',
            ],
            [
                'label' => 'Name',
                'name' => 'name',
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

    public function fetchSegment()
    {
        return $this->fetch(Segment::class);
    }

    public function ajaxFind(Request $request)
    {
        if ($request->has('segment_id')) {
            return Type::whereSegment_id($request->segment_id)->pluck('name', 'id');
        }

    }
}
