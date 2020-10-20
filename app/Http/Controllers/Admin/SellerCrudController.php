<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bank;
use App\Models\Commune;
use App\Models\ContactType;
use App\Cruds\BaseCrudFields;
use App\Models\SellerCategory;
use App\Models\BankAccountType;
use App\Models\BusinessActivity;
use App\Http\Requests\SellerRequest;
use App\Http\Traits\HasCustomAttributes;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SellerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SellerCrudController extends CrudController
{
    use HasCustomAttributes;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Seller::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/seller');
        CRUD::setEntityNameStrings('vendedor', 'vendedores');

        $this->crud->denyAccess('show');

        $this->getExtras();
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

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */

        CRUD::addColumn([
            'name' => 'uid',
            'type' => 'text',
            'label' => 'RUT',
        ]);

        CRUD::addColumn([
            'name' => 'name',
            'type' => 'text',
            'label' => 'Razón social',
        ]);

        CRUD::addColumn([
            'name' => 'seller_category',
            'type' => 'relationship',
            'label' => 'Categoría',
            'attribute' => 'name',
        ]);

        CRUD::addColumn([
            'name' => 'status_description',
            'type' => 'text',
            'label' => 'Estado',
            'wrapper' => [
                'element' => 'span',
                'class' => function ($crud, $column, $entry, $related_key) {
                    if ($column['text'] == 'Activa') {
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
        CRUD::setValidation(SellerRequest::class);

        //CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */

        $this->crud = (new BaseCrudFields())->setBaseFields($this->crud);

        CRUD::addField([
            'name' => 'uid',
            'type' => 'text',
            'label' => 'RUT',
            'tab' => 'General',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4',
            ],
        ]);

        CRUD::addField([
            'name' => 'name',
            'type' => 'text',
            'label' => 'Razón social',
            'tab' => 'General',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4',
            ],
        ]);

        CRUD::addField([
            'name' => 'visible_name',
            'type' => 'text',
            'label' => 'Nombre visible',
            'tab' => 'General',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4',
            ],
        ]);

        CRUD::addField([
            'name' => 'email',
            'type' => 'email',
            'label' => 'Email',
            'tab' => 'General',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);

        CRUD::addField([
            'name' => 'phone',
            'type' => 'text',
            'label' => 'Teléfono',
            'tab' => 'General',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);

        CRUD::addField([
            'name' => 'cellphone',
            'type' => 'text',
            'label' => 'Teléfono móvil',
            'tab' => 'General',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);

        CRUD::addField([
            'name' => 'web',
            'type' => 'text',
            'label' => 'Sitio web',
            'tab' => 'General',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);

        CRUD::addField([
            'name' => 'seller_category_id',
            'type' => 'select2_from_array',
            'label' => 'Categoría',
            'options' => SellerCategory::pluck('name', 'id')->toArray(),
            'tab' => 'General',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12',
            ],
        ]);

        // CRUD::addField([
        //     'name' => 'password',
        //     'type' => 'password',
        //     'label' => 'Contraseña',
        //     'tab' => 'General',
        //     'wrapper' => [
        //         'class' => 'form-group col-6',
        //     ],
        // ]);

        // CRUD::addField([
        //     'name' => 'password_confirmation',
        //     'type' => 'password',
        //     'label' => 'Repetir contraseña',
        //     'tab' => 'General',
        //     'wrapper' => [
        //         'class' => 'form-group col-6',
        //     ],
        // ]);

        CRUD::addField([
            'name' => 'notes',
            'type' => 'textarea',
            'label' => 'Notas',
            'tab' => 'General',
            'wrapper' => [
                'class' => 'form-group col-12',
            ],
        ]);

        CRUD::addField([
            'name' => 'status',
            'type' => 'checkbox',
            'label' => 'Activo',
            'tab' => 'General',
            'default' => 1,
            'wrapperAttributes' => [
                'class' => 'form-group col-md-12',
            ],
        ]);

        CRUD::addField([
            'name' => 'addresses_data',
            'type' => 'repeatable',
            'label' => 'Direcciones',
            'default' => '{}',
            'fields' => [
                [
                    'name' => 'street',
                    'type' => 'text',
                    'label' => 'Calle',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'name' => 'number',
                    'type' => 'text',
                    'label' => 'Número',
                    'wrapper' => ['class' => 'form-group col-md-2'],
                ],
                [
                    'name' => 'subnumber',
                    'type' => 'text',
                    'label' => 'Casa/Dpto/Oficina',
                    'wrapper' => ['class' => 'form-group col-md-2'],
                ],
                [
                    'name' => 'commune_id',
                    'type' => 'select2_from_array',
                    'label' => 'Comuna',
                    'options' => Commune::orderBy('name', 'asc')->pluck('name', 'id')->toArray(),
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'name' => 'uid',
                    'type' => 'text',
                    'label' => 'RUT',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'name' => 'first_name',
                    'type' => 'text',
                    'label' => 'Nombre',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'name' => 'last_name',
                    'type' => 'text',
                    'label' => 'Apellido',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'name' => 'email',
                    'type' => 'email',
                    'label' => 'Email',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'name' => 'phone',
                    'type' => 'text',
                    'label' => 'Teléfono',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'name' => 'cellphone',
                    'type' => 'text',
                    'label' => 'Teléfono móvil',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'name' => 'extra',
                    'type' => 'textarea',
                    'label' => 'Detalles',
                    'wrapper' => ['class' => 'form-group col-md-12'],
                ],
            ],
            'new_item_label' => 'Agregar dirección',
            'tab' => 'Direcciones',
        ]);

        CRUD::addField([
            'name' => 'activities_data',
            'type' => 'repeatable',
            'label' => 'Giros',
            'default' => '{}',
            'fields' => [
                [
                    'name' => 'business_activity_id',
                    'type' => 'select2_from_array',
                    'label' => 'Giro',
                    'options' => BusinessActivity::orderBy('name', 'asc')->pluck('name', 'id')->toArray(),
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-12',
                    ],
                ],
            ],
            'new_item_label' => 'Agregar giro',
            'tab' => 'Actividades comerciales',
        ]);

        Crud::addField([
            'name'  => 'banks_data',
            'label' => 'Cuentas',
            'type'  => 'repeatable',
            'default' => '{}',
            'fields' => [
                [
                    'name' => 'account_type_id',
                    'type' => 'select2_from_array',
                    'label' => 'Tipo de cuenta',
                    'options' => BankAccountType::orderBy('name', 'asc')->pluck('name', 'id')->toArray(),
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-4',
                    ],
                ],
                [
                    'name' => 'bank_id',
                    'type' => 'select2_from_array',
                    'label' => 'Banco',
                    'options' => Bank::orderBy('name', 'asc')->pluck('name', 'id')->toArray(),
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-4',
                    ],
                ],
                [
                    'name' => 'account_number',
                    'type' => 'text',
                    'label' => 'Número de Cuenta',
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-4',
                    ],
                ],
                [
                    'name' => 'rut',
                    'type' => 'text',
                    'label' => 'RUT',
                    'wrapper' => [
                        'class' => 'form-group col-md-4'
                    ],
                ],
                [
                    'name' => 'first_name',
                    'type' => 'text',
                    'label' => 'Nombre',
                    'wrapper' => [
                        'class' => 'form-group col-md-4'
                    ],
                ],
                [
                    'name' => 'last_name',
                    'type' => 'text',
                    'label' => 'Apellido',
                    'wrapper' => [
                        'class' => 'form-group col-md-4'
                    ],
                ],
                [
                    'name' => 'email',
                    'type' => 'email',
                    'label' => 'Email',
                    'wrapper' => [
                        'class' => 'form-group col-md-6'
                    ],
                ],
                [
                    'name' => 'phone',
                    'type' => 'text',
                    'label' => 'Teléfono',
                    'wrapper' => [
                        'class' => 'form-group col-md-6'
                    ],
                ],
            ],
            'new_item_label' => 'Agregar cuenta',
            'tab' => 'Datos bancarios',
        ]);

        Crud::addField([
            'name'  => 'contacts_data',
            'label' => 'Contactos',
            'type'  => 'repeatable',
            'default' => '{}',
            'fields' => [
                [
                    'name' => 'contact_type_id',
                    'type' => 'select2_from_array',
                    'label' => 'Plataforma',
                    'options' => ContactType::orderBy('name', 'asc')->pluck('name', 'id')->toArray(),
                    'wrapperAttributes' => [
                        'class' => 'form-group col-md-6',
                    ],
                ],
                [
                    'name' => 'url',
                    'type' => 'text',
                    'label' => 'URL',
                    'wrapper' => [
                        'class' => 'form-group col-md-6'
                    ],
                ],
            ],
            'new_item_label' => 'Agregar contacto',
            'tab' => 'Contactos',
        ]);

        CRUD::addField([
            'name' => 'privacy_policy',
            'type'  => 'tinymce',
            'label' => 'Política de privacidad',
            'tab' => 'Políticas',
        ]);

        CRUD::addField([
            'name' => 'shipping_policy',
            'type'  => 'tinymce',
            'label' => 'Política de compra',
            'tab' => 'Políticas',
        ]);

        CRUD::addField([
            'name' => 'return_policy',
            'tab' => 'Políticas',
            'label' => 'Política de devolución',
            'type' => 'tinymce',
        ]);

        CRUD::addField([
            'name' => 'meta_title',
            'type' => 'text',
            'label' => 'Título para los buscadores ',
            'tab' => 'SEO',
            'wrapper' => [
                'class' => 'form-group col-md-6'
            ],
        ]);

        CRUD::addField([
            'name' => 'meta_keywords',
            'type' => 'text',
            'attributes' => [
                'placeholder' => 'Ejemplo: actividad, nombre de empresa',
            ],
            'label' => 'Palabras clave (separadas por coma)',
            'tab' => 'SEO',
            'wrapper' => [
                'class' => 'form-group col-md-6'
            ],
        ]);

        CRUD::addField([
            'name' => 'meta_description',
            'type'  => 'textarea',
            'label' => 'Descripción para los buscadores',
            'tab' => 'SEO',
        ]);

        CRUD::addField([
            'name' => 'logo',
            'type' => 'image',
            'label' => 'Logo',
            'crop' => true,
            'wrapper' => [
                'class' => 'form-group col-md-12'
            ],
            'tab' => 'Estilos',
        ]);

        CRUD::addField([
            'name' => 'banner',
            'type' => 'image',
            'label' => 'Banner',
            'crop' => true,
            'wrapper' => [
                'class' => 'form-group col-md-12'
            ],
            'tab' => 'Estilos',
        ]);

        // CRUD::addField([
        //     'name' => 'paymentmethods',
        //     'type' => 'repeatable',
        //     'label' => 'Métodos de pago',
        //     'new_item_label'  => 'agregar nuevo metodo de pago',
        //     'fake' => true,
        //     'fields' => [
        //         [
        //             'name' => 'payment_method_id',
        //             'type' => 'select2_from_array',
        //             'options' => PaymentMethod::orderBy('title', 'asc')->pluck('title', 'id')->toArray(),
        //             'label' => 'Metodo de pago',
        //             'wrapper' => [
        //                 'class' => 'form-group col-12'
        //             ],
        //         ],
        //         [
        //             'name' => 'key',
        //             'type'  => 'text',
        //             'label' => 'Código',
        //             'wrapper' => [
        //                 'class' => 'form-group col-12'
        //             ],
        //         ],
        //         [
        //             'name' => 'status',
        //             'label' => 'Activo',
        //             'type' => 'checkbox',
        //             'wrapperAttributes' => [
        //                 'class' => 'form-group col-md-12',
        //             ],
        //             'default' => true,
        //         ]
        //     ],
        //     'tab' => 'Métodos de pago',
        // ]);

        // CRUD::addField([
        //     'name' => 'shippingmethods',
        //     'type' => 'repeatable',
        //     'label' => 'Métodos de shipping',
        //     'new_item_label'  => 'agregar nuevo metodo de envio',
        //     'fake' => true,
        //     'fields' => [
        //         [
        //             'name' => 'shipping_method_id',
        //             'type' => 'select2_from_array',
        //             'options' => ShippingMethod::orderBy('title', 'asc')->pluck('title', 'id')->toArray(),
        //             'label' => 'Metodo de envio',
        //             'wrapper' => [
        //                 'class' => 'form-group col-12'
        //             ],
        //         ],
        //         [
        //             'name' => 'status',
        //             'label' => 'Activo',
        //             'type' => 'checkbox',
        //             'wrapperAttributes' => [
        //                 'class' => 'form-group col-md-12',
        //             ],
        //             'default' => false,

        //         ]
        //     ],
        //     'tab' => 'Métodos de shipping',
        // ]);

        if(backpack_user()->hasAnyRole('Super admin|Administrador')) {
            CRUD::addField([
                'name' => 'is_approved',
                'type' => 'checkbox',
                'label' => 'Aprobado',
                'default' => false,
                'tab' => 'Administrador',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-12',
                ],
            ]);

            CRUD::addField([
                'name' => 'source',
                'type' => 'text',
                'label' => 'Fuente',
                'tab' => 'Administrador',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-12',
                ],
                'attributes' => [
                    'readonly' => 'readonly',
                ],
            ]);

            CRUD::addField([
                'name' => 'commission_enable',
                'type'  => 'checkbox',
                'label' => 'Comisión',
                'tab' => 'Administrador',
                'wrapper' => [
                    'class' => 'form-group col-md-12'
                ],
            ]);

            CRUD::addField([
                'name' => 'commission_percentage',
                'type'  => 'number',
                'attributes' => [
                    'step' => '.01',
                    'min' => 0,
                    'max' => 100
                ],
                'default' => '0,00',
                'label' => 'Porcentaje comisión',
                'tab' => 'Administrador',
                'wrapper' => [
                    'class' => 'form-group col-12'
                ],
            ]);

            CRUD::addField([
                'name' => 'disabled_commission',
                'type' => 'checkbox_disable_fields',
                'checkbox' => 'commission_enable',
                'fields' => [
                    'commission_percentage'
                ],
                'tab' => 'Administrador',
            ]);
        }

        CRUD::addField([
            'name' => 'rut_formatter',
            'type' => 'rut_formatter',
            'rut_fields' => ['uid', 'rut'],
            'tab' => 'General',
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