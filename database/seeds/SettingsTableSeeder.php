<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('settings')->delete();

        \DB::table('settings')->insert(array (
            0 =>
            array (
                'id' => 1,
                'key' => 'default_company',
                'name' => 'Empresa por defecto',
                'description' => NULL,
                'value' => '1',
                'field' => '{"label" : "Valor", "name" : "value", "type" : "text"}',
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'key' => 'default_branch',
                'name' => 'Sucursal por defecto',
                'description' => NULL,
                'value' => '1',
                'field' => '{"label" : "Valor", "name" : "value", "type" : "text"}',
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'key' => 'customer_create_user',
                'name' => 'Crear usuario desde cliente',
                'description' => NULL,
                'value' => '0',
                'field' => '{"label" : "Valor", "name" : "value", "type" : "checkbox"}',
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => '2020-10-21 12:25:59',
            ),
            3 =>
            array (
                'id' => 4,
                'key' => 'seller_create_user',
                'name' => 'Crear usuario desde vendedor',
                'description' => NULL,
                'value' => '1',
                'field' => '{"label" : "Valor", "name" : "value", "type" : "checkbox"}',
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'key' => 'default_currency',
                'name' => 'Moneda por defecto',
                'description' => NULL,
                'value' => '1',
                'field' => '{"label" : "Valor", "name" : "value", "type" : "text"}',
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'key' => 'default_seller_role',
                'name' => 'Rol vendedor por defecto',
                'description' => NULL,
                'value' => '3',
                'field' => '{"label" : "Valor", "name" : "value", "type" : "text"}',
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}