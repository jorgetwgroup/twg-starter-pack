<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InvoiceRequest;
use Illuminate\Http\Request;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\{Tax, Invoice, InvoiceType, CustomerAddress, Seller};
use App\Services\DTEService;
/**
 * Class InvoiceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class InvoiceCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Invoice::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/invoice');
        CRUD::setEntityNameStrings('invoice', 'invoices');
        if (! backpack_user()->can('showAllInvoices')) {
            $seller = Seller::where('user_id', backpack_user()->id)->first();
            $this->crud->addClause('where', 'seller_id', $seller->id);
        }
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // columns
        
        // create temporary document
         
        $this->crud->addButtonFromView(
            'line', 'create_temporary_document', 
            'invoice.to_manage', 'beginning'
        );

        CRUD::addColumn([
            'name' => 'first_name',
        ]);

        CRUD::addColumn([
            'name' => 'uid'
        ]);

        CRUD::addColumn([
            'name' => 'invoice_type_id',
             
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
        CRUD::setValidation(InvoiceRequest::class);

        //CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
          
        //$this->crud = (new BaseCrudFields())->setBaseFields($this->crud);

        $this->crud->setOperationSetting('saveAllInputsExcept', ['_token', '_method', 'http_referrer', 'current_tab', 'save_action']);

        CRUD::addField([
            'label' => 'Cliente',
            'name' => 'customer_id',
            'type' => 'relationship',
            'entity' => 'customer',
            'placeholder' => 'Selecciona un cliente',
            'wrapper' => [
                'class' => 'form-group col-md-6',
            ],
            'tab' => 'General',
        ]);

        CRUD::addField([
            'label' => 'Título',
            'name' => 'title',
            'wrapper' => [
                'class' => 'form-group col-md-6',
            ],
            'tab' => 'General',
        ]);

        CRUD::addField([
            'label' => 'Dirección',
            'type' => 'select2_from_ajax',
            'name' => 'address_id',
            'entity' => 'address',
            'attribute' => 'addressDescription',
            'data_source' => url('admin/quotation/addresses'),
            'placeholder' => 'Selecciona una dirección',
            'minimum_input_length' => 0,
            'model' => CustomerAddress::class,
            'dependencies' => ['customer_id'],
            'method' => 'POST',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
            'include_all_form_fields' => true,
            'tab' => 'General',
        ]);
        
        CRUD::addField([
            'label' => 'Fecha cotización',
            'name' => 'invoice_date',
            'type' => 'date',
            'default' => date("Y-m-d"),
            'wrapper' => [
                'class' => 'form-group col-md-3',
            ],
            'tab' => 'General',
        ]);

        CRUD::addField([
            'label' => 'Fecha expiración',
            'name' => 'expiry_date',
            'type' => 'date',
            'wrapper' => [
                'class' => 'form-group col-md-3',
            ],
            'tab' => 'General',
        ]);
        
        CRUD::addField([
            'label' => 'Vendedor',
            'name' => 'seller_id',
            'type' => 'select2',
            'placeholder' => 'Selecciona un vendedor',
            'model' => 'App\Models\Seller',
            'attribute' => 'name',
            'wrapper' => [
                'class' => 'form-group col-md-6',
            ],
            'tab' => 'General',
        ]);


        CRUD::addField([
            'label' => 'Número referencia',
            'name' => 'dte_code',
            'type' => 'text',
            'prefix' => '#',
            'attributes' => [
                'disabled' => 'disabled',
                'readonly' => 'readonly',
            ],
            'wrapper' => [
                'class' => 'form-group col-md-3',
            ],
            'tab' => 'General',
        ]);

        CRUD::addField([
            'type' => 'select2_from_array',
            'options' => InvoiceType::all()->pluck('name','id'),
            'attribute' => 'name',
            'name' => 'invoice_type_id',
            'allows_null' => true,
            'label' => 'Tipo de documento',
            'tab' => 'General',
            'wrapper' => [
                'class' => 'form-group col-md-3',
            ]
        ]);

        CRUD::addField([
            'label' => 'Productos o servicios',
            'name' => 'items_data',
            'type' => 'quotation.repeatable',
            'new_item_label' => 'Agregar producto / servicio',
            'fields' => [
                [
                    'label' => 'Producto / Servicio',
                    'name' => 'product_id',
                    'type' => 'quotation.select2_custom',
                    'model' => 'App\Models\Product',
                    'placeholder' => 'Selecciona un producto',
                    'attribute' => 'name',
                    'data_source' => url('admin/api/products/getBySeller'),
                    'minimum_input_length' => 0,
                    'include_all_form_fields'  => true,
                    'dependencies'  => ['seller_id'],
                    'wrapper' => [
                        'class' => 'form-group col-md-3 product-select',
                    ],
                    'attributes' => [
                        'class' => 'form-control product-id-field'
                    ]
                ],
                [
                    'label' => 'Producto / Servicio',
                    'name' => 'name',
                    'type' => 'text',
                    'wrapper' => [
                        'class' => 'form-group col-md-3 custom-product-name',
                        'style' => 'display:none',
                    ],
                    'attributes' => [
                        'placeholder' => 'Nombre del producto o servicio',
                        'class' => 'form-control product-name-field'
                    ],
                ],
                [
                    'label' => 'Precio',
                    'name' => 'price',
                    'type' => 'text',
                    'attributes' => [
                        'class' => 'form-control price',
                    ],
                    'wrapper' => [
                        'class' => 'form-group col-md-2',
                    ],
                ],
                [
                    'label' => 'Cantidad',
                    'name' => 'qty',
                    'type' => 'number',
                    'attributes' => [
                        'class'=> 'form-control qty',
                    ],
                    'wrapper' => [
                        'class' => 'form-group col-md-1',
                    ],
                ],
                [
                    'label' => 'Descuento',
                    'name' => 'discount',
                    'type' => 'quotation.discount',
                    'default' => 0,
                    'suffix' => '<select class="form-control discount_type" name="discount_type"><option value="amount">$</option><option value="percentage">%</option></select>',
                    'wrapper' => [
                        'class' => 'form-group col-md-2',
                    ],
                ],
                [
                    'label' => 'Impuesto',
                    'name' => 'additional_tax_id',
                    'type' => 'select2_from_array',
                    'atributte' => 'name',
                    'options' => array_merge([0 => 'No aplica'] , Tax::all()->map( function($item) {
                        $item->name = $item->amount . '% - ' . $item->name;
                        return $item;
                    })->pluck('name', 'id')->toArray()),
                    'attributes' => [
                        'class' => 'form-control tax_id_field',
                    ],
                    'wrapper' => [
                        'class' => 'form-group col-md-2',
                    ],
                ],
                [
                    'label' => 'Total',
                    'name' => 'total',
                    'type' => 'text',
                    'default' => 0,
                    'attributes' => [
                        'class' => 'form-control subtotal',
                        'readonly' => true,
                    ],
                    'wrapper' => [
                        'class' => 'col-md-2',
                    ],
                ],
                [
                    'label' => 'Descripción',
                    'name' => 'description',
                    'type' => 'textarea',
                    'wrapper' => [
                        'class' => 'col-md-12 custom-description',
                        'style' => 'display:none',
                    ],
                ],
                [
                    'label' => 'Es un producto/servicio personalizado',
                    'name' => 'is_custom',
                    'type' => 'checkbox',
                    'attributes' => [
                        'class' => 'checkbox-is-custom',
                    ],
                    'wrapper' => [
                        'class' => 'form-group col-md-3',
                    ],
                ],
                [
                    'label' => 'Editar descripción',
                    'name' => 'edit_description',
                    'type' => 'checkbox',
                    'attributes' => [
                        'class' => 'checkbox-edit-description',
                    ],
                    'wrapper' => [
                        'class' => 'form-group col-md-2',
                    ],
                ],

                // Hidden inputs
                [
                    'label' => 'tax_amount',
                    'name' => 'additional_tax_amount',
                    'type' => 'hidden',
                    'attributes' => [
                        'class' => 'tax_amount_item'
                    ],
                ],
                [
                    'label' => 'tax_percent',
                    'name' => 'tax_percent',
                    'type' => 'hidden',
                    'attributes' => [
                        'class' => 'tax_percent_item'
                    ],
                ],
                [
                    'label' => 'tax_total',
                    'name' => 'additional_tax_total',
                    'type' => 'hidden',
                    'attributes' => [
                        'class' => 'tax_total_item'
                    ],
                ],
            ],
            'tab' => 'General',
        ]);

        CRUD::addField([
            'name' => 'check_group_start',
            'type' => 'group_start',
            'label' => '',
            'wrapperAttributes' => [
                'class' => 'col-md-6'
            ],
            'tab' => 'General',
        ]);

        CRUD::addField([
            'name' => 'tax_type',
            'label' => 'Impuesto',
            'type' => 'select2_from_array',
            'options' => ['A' => 'Afecta', 'E' => 'Exenta', 'H' => 'Honorarios'],
            'allows_null' => false,
            'default' => 'A',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12',
            ],
            'tab' => 'General',
        ]);

        CRUD::addField([
            'name' => 'include_payment_data',
            'label' => 'Incluir datos de pago',
            'type' => 'checkbox',
            'default' => true,
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
            ],
            'tab' => 'General',
        ]);

        CRUD::addField([
            'name' => 'notes',
            'label' => 'Notas',
            'type' => 'textarea',
            'wrapper' => [
                'class' => 'form-group col-md-12',
            ],
            'tab' => 'General',
        ]);


        CRUD::addField([
            'name' => 'check_group_end',
            'type' => 'group_end',
            'tab' => 'General',
        ]);

        CRUD::addField([
            'type' => 'quotation.totals_card',
            'name' => 'totals_card',
            'wrapper' => [
                'class' => 'form-group col-md-6',
            ],
            'tab' => 'General',
        ]);

        CRUD::addField([
            'name' => 'currency_id',
            'label' => 'currency',
            'type' => 'text',
            'default' => 63,
            'wrapper' => [
                'style' => 'display:none',
            ],
            'tab' => 'General',
        ]);

        CRUD::addField([
            'name' => 'preface',
            'type' => 'wysiwyg',
            'label' => 'Descripción',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12'
            ],
            'tab' => 'Adicional',
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

}
