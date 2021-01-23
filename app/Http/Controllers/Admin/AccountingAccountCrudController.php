<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AccountingAccountRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AccountingAccountCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AccountingAccountCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\InlineCreateOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\AccountingAccount::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/accountingaccount');
        CRUD::setEntityNameStrings('cuenta contable', 'cuentas contables');
        //$company = backpack_user()->current()->company;
        //$this->crud->addClause('where', 'company_id', $company->id);
        $this->crud->denyAccess('show');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        CRUD::addColumn([
            'name' => 'code',
            'label' => 'Código',
        ]);

        CRUD::addColumn([
            'name' => 'name',
            'label' => 'Nombre',
        ]);

        CRUD::addColumn([
            'name' => 'number',
            'label' => 'Número',
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
        CRUD::setValidation(AccountingAccountRequest::class);

        CRUD::addField([
            'name' => 'code',
            'label' => 'Código',
        ]);

        CRUD::addField([
            'name' => 'name',
            'label' => 'Nombre descriptivo',
        ]);

        CRUD::addField([
            'name' => 'number',
            'label' => 'Número',
        ]);

        CRUD::addField([
            'name' => 'description',
            'label' => 'Descripción',
        ]);

        CRUD::addField([
            'name' => 'accounting_account_type',
            'label' => 'Tipo',
            'placeholder' => 'Seleccione un tipo de cuenta contable',
            'minimum_input_length' => 0,
            'allows_null' => true,
            'type' => 'relationship',
            'include_all_form_fields'  => true, 
            'entity' => 'accounting_account_type',
            'attribute' => 'name',
            'model' => 'App\Models\AccountingAccountType',
            'inline_create' => [ 'entity' => 'accountingaccounttype' ],
            'ajax' => true,
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);
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

    public function fetchAccounting_account_type()
    {
        return $this->fetch(\App\Models\AccountingAccountType::class);
    }

}