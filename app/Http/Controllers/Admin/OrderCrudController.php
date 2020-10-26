<?php

namespace App\Http\Controllers\Admin;

use App\Models\Seller;
use App\Models\Commune;
use App\Cruds\BaseCrudFields;
use App\Http\Requests\OrderRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OrderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OrderCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    private $admin;
    private $userSeller;
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Order::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/order');
        CRUD::setEntityNameStrings('orden', 'ordenes');
        $this->crud->denyAccess('create');
        $this->crud->denyAccess('show');
        $this->crud->denyAccess('delete');


        if (backpack_user()->hasRole('Vendedor marketplace')) {
            $this->userSeller = Seller::where('user_id', backpack_user()->id)->firstOrFail();
        }
        if (backpack_user()->hasRole('Administrador negocio') || backpack_user()->hasRole('Super admin')) {
            $this->admin = true;
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

        // If not admin, show only user products
        if (!$this->admin) {

            $value = $this->userSeller->id;
            $this->crud->query = $this->crud->query->whereHas('order_items', function ($query) use ($value) {
                $query->where('seller_id', $value);
            });
        }

        CRUD::addColumn([
            'name' => 'id',
            'type' => 'text',
            'label' => 'Nro.',
        ]);

        CRUD::addColumn([
            'name' => 'status_description',
            'type' => 'text',
            'label' => 'Estado',
            'wrapper' => [
                'element' => 'span',
                'class' => function ($crud, $column, $entry, $related_key) {
                    if ($column['text'] == 'Completa') {
                        return 'badge badge-success';
                    }
                    return 'badge badge-default';
                },
            ],
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(OrderRequest::class);
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        //$this->setupCreateOperation();
        // CRUD::setValidation(OrderRequest::class);

        CRUD::addField([
            'name' => 'id',
            'type' => 'text',
            'label' => 'Nro',
            'tab' => 'General',
            'attributes' => [
                'readonly' => 'readonly',
            ],
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);
        CRUD::addField([
            'name' => 'created_at',
            'type' => 'date',
            'label' => 'Fecha',
            'tab' => 'General',
            'format' => 'L',
            'attributes' => [
                'readonly' => 'readonly',
            ],
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);
        CRUD::addField([
            'name' => 'first_name',
            'type' => 'text',
            'label' => 'Nombre',
            'tab' => 'General',
            'attributes' => [
                'readonly' => 'readonly',
            ],
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);

        CRUD::addField([
            'name' => 'last_name',
            'type' => 'text',
            'label' => 'Apellido',
            'tab' => 'General',
            'attributes' => [
                'readonly' => 'readonly',
            ],
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);

        CRUD::addField([
            'name' => 'email',
            'type' => 'email',
            'label' => 'Email',
            'tab' => 'General',
            'attributes' => [
                'readonly' => 'readonly',
            ],
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4',
            ],
        ]);

        CRUD::addField([
            'name' => 'cellphone',
            'type' => 'text',
            'label' => 'Teléfono móvil',
            'tab' => 'General',
            'attributes' => [
                'readonly' => 'readonly',
            ],
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4',
            ],
        ]);

        CRUD::addField([
            'name' => 'phone',
            'type' => 'text',
            'label' => 'Teléfono',
            'tab' => 'General',
            'attributes' => [
                'readonly' => 'readonly',
            ],
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4',
            ],
        ]);

        $addresses = $this->crud->getCurrentEntry()->json_value;


        foreach ($addresses as $key => $address) {

            if ($key === 'addressShipping') {
                // Address Shipping

                CRUD::addField([
                    'name' => 'f_address_shipping_title',
                    'type' => 'custom_html',
                    'value' => '<h5>Dirección de envío </h5>',
                    'tab' => 'General',

                ]);


                CRUD::addField([
                    'name' => 'f_address_street',
                    'type' => 'text',
                    'value' => $address->address_street,
                    'label' => 'Calle',
                    'tab' => 'General',
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-4',
                    ],
                    'attributes' => [
                        'readonly' => 'readonly',
                    ],

                ]);


                CRUD::addField([
                    'name' => 'f_address_number',
                    'type' => 'text',
                    'value' => $address->address_number,
                    'label' => 'Número',
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-2',
                    ],
                    'attributes' => [
                        'readonly' => 'readonly',
                    ],
                    'tab' => 'General',
                ]);


                CRUD::addField([
                    'name' => 'f_address_office',
                    'type' => 'text',
                    'value' => $address->address_office,
                    'label' => 'Casa/Dpto/Oficina',
                    'tab' => 'General',
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-2',
                    ],
                    'attributes' => [
                        'readonly' => 'readonly',
                    ],

                ]);


                CRUD::addField([
                    'name' => 'f_address_commune_id',
                    'value' => $address->address_commune_id,
                    'type' => 'select2_from_array',
                    'label' => 'Comuna',
                    'options' => Commune::orderBy('name', 'asc')->pluck('name', 'id')->toArray(),
                    'label' => 'Comuna',
                    'tab' => 'General',
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-4',
                    ],
                    'attributes' => [
                        'disabled' => 'disabled',
                    ],

                ]);
            }

            if ($key === 'addressInvoice') {
                // Address Invoice

                if ($address->uid) {
                    CRUD::addField([
                        'name' => 'f_address_invoice_title',
                        'type' => 'custom_html',
                        'value' => '<h5>Dirección de facturación </h5>',
                        'tab' => 'General',
                    ]);

                    CRUD::addField([
                        'name' => 'i_uid',
                        'type' => 'text',
                        'value' => $address->uid,
                        'label' => 'RUT',
                        'tab' => 'General',
                        'wrapperAttributes' => [
                            'class' => 'form-group col-md-4',
                        ],
                        'attributes' => [
                            'readonly' => 'readonly',
                        ],
                    ]);
                }

                if ($address->is_business) {

                    CRUD::addField([
                        'name' => 'i_business_name',
                        'type' => 'text',
                        'value' => $address->business_name,
                        'label' => 'Nombre empresa',
                        'tab' => 'General',
                        'wrapperAttributes' => [
                            'class' => 'form-group col-md-4',
                        ],
                        'attributes' => [
                            'readonly' => 'readonly',
                        ],
                    ]);
                } else {
                    CRUD::addField([
                        'name' => 'i_first_name',
                        'type' => 'text',
                        'value' => $address->first_name,
                        'label' => 'Nombre',
                        'tab' => 'General',
                        'wrapperAttributes' => [
                            'class' => 'form-group col-md-4',
                        ],
                        'attributes' => [
                            'readonly' => 'readonly',
                        ],
                    ]);

                    CRUD::addField([
                        'name' => 'i_last_name',
                        'type' => 'text',
                        'value' => $address->last_name,
                        'label' => 'Apellido',
                        'tab' => 'General',
                        'wrapperAttributes' => [
                            'class' => 'form-group col-md-4',
                        ],
                        'attributes' => [
                            'readonly' => 'readonly',
                        ],
                    ]);
                }


                if ($address->address_street) {
                    CRUD::addField([
                        'name' => 'i_address_street',
                        'type' => 'text',
                        'value' => $address->address_street,
                        'label' => 'Calle',
                        'tab' => 'General',
                        'wrapperAttributes' => [
                            'class' => 'form-group col-md-4',
                        ],
                        'attributes' => [
                            'readonly' => 'readonly',
                        ],
                    ]);
                }
                if ($address->address_number) {
                    CRUD::addField([
                        'name' => 'i_address_number',
                        'type' => 'text',
                        'value' => $address->address_number,
                        'label' => 'Número',
                        'tab' => 'General',
                        'wrapperAttributes' => [
                            'class' => 'form-group col-md-2',
                        ],
                        'attributes' => [
                            'readonly' => 'readonly',
                        ],
                    ]);
                }
               // if ($address->address_office) {
                    CRUD::addField([
                        'name' => 'i_address_office',
                        'type' => 'text',
                        'value' => $address->address_office,
                        'label' => 'Casa/Dpto/Oficina',
                        'tab' => 'General',
                        'wrapperAttributes' => [
                            'class' => 'form-group col-md-2',
                        ],
                        'attributes' => [
                            'readonly' => 'readonly',
                        ],
                    ]);
               // }
                if ($address->address_commune_id) {

                    CRUD::addField([
                        'name' => 'i_address_commune_id',
                        'value' => $address->address_commune_id,
                        'type' => 'select2_from_array',
                        'label' => 'Comuna',
                        'options' => Commune::orderBy('name', 'asc')->pluck('name', 'id')->toArray(),
                        'label' => 'Comuna',
                        'tab' => 'General',
                        'wrapperAttributes' => [
                            'class' => 'form-group col-md-4',
                        ],
                        'attributes' => [
                            'disabled' => 'disabled',
                        ],

                    ]);
                }

                if ($address->email) {
                    CRUD::addField([
                        'name' => 'i_email',
                        'type' => 'email',
                        'value' => $address->email,
                        'label' => 'Email',
                        'tab' => 'General',
                        'attributes' => [
                            'readonly' => 'readonly',
                        ],
                        'wrapperAttributes' => [
                            'class' => 'form-group col-md-4',
                        ],
                    ]);
                }
                if ($address->cellphone) {
                    CRUD::addField([
                        'name' => 'i_cellphone',
                        'type' => 'text',
                        'value' => $address->cellphone,
                        'label' => 'Teléfono móvil',
                        'tab' => 'General',
                        'attributes' => [
                            'readonly' => 'readonly',
                        ],
                        'wrapperAttributes' => [
                            'class' => 'form-group col-md-4',
                        ],
                    ]);
                }
                if ($address->phone) {
                    CRUD::addField([
                        'name' => 'i_phone',
                        'type' => 'text',
                        'label' => 'Teléfono',
                        'value' => $address->phone,
                        'tab' => 'General',
                        'attributes' => [
                            'readonly' => 'readonly',
                        ],
                        'wrapperAttributes' => [
                            'class' => 'form-group col-md-4',
                        ],
                    ]);
                }
            }
        }

        CRUD::addField([
            'name' => 'status_description',
            'type' => 'text',
            'label' => 'Estado',
            'tab' => 'General',
            'wrapper' => [
                'class' => 'form-group col-md-4 text-center ',
            ],
        ]);


        CRUD::addField([
            'name' => 'order_items',
            'type' => 'repeatable',
            'label' => ' ',
            'tab' => 'Items',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12',
            ],
            'fields' => [
                [
                    'name' => 'id',
                    'type' => 'hidden',
                    'label' => 'id'

                ],
                [
                    'name' => 'order_id',
                    'type' => 'hidden',
                    'label' => 'order_id'

                ],
                [
                    'name' => 'name',
                    'type' => 'text',
                    'label' => 'Nombre',
                    'attributes' => [
                        'readonly' => 'readonly',
                    ],
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-5',
                    ],

                ],
                [
                    'name' => 'qty',
                    'type' => 'text',
                    'label' => 'Cantidad',
                    'attributes' => [
                        'readonly' => 'readonly',
                    ],
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-2',
                    ],


                ],
                [
                    'name' => 'price',
                    'type' => 'product.number_format',
                    'label' => 'Precio',
                    'attributes' => [
                        'readonly' => 'readonly',
                    ],
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-2',
                    ],


                ],
                [
                    'name' => 'shipping_status',
                    'type' => 'select2_from_array',
                    'options' => [
                        1 => 'Pendiente',
                        2 => 'Enviado',
                    ],
                    'label' => 'Estado',
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-3 shipping_status_select',

                    ],


                ],

            ]
        ]);

        CRUD::addField([
            'name' => 'support_data_script',
            'type' => 'order.support_data_script',
            'tab' => 'Items'
        ]);


    }
}