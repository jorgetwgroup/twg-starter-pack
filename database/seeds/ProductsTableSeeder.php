s<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_type_id' => 1,
                'product_class_id' => 1,
                'product_brand_id' => NULL,
                'sku' => 'ca2-123',
                'name' => 'CAMPERA ANTÁRTIDA 2',
                'description' => '<p>Campera de plum&oacute;n para climas extremadamente fr&iacute;os. El dise&ntilde;o est&aacute; pensado para optimizar el poder expansivo del plum&oacute;n y, por lo tanto, su capacidad aislante. Est&aacute; rellena de plum&oacute;n ALLIED&reg; de alt&iacute;sima calidad. Tejido exterior WINDSTOPPER&reg; Insulation.</p>',
                'short_description' => 'CAMPERA ANTÁRTIDA 2',
                'is_approved' => 1,
                'rejected_reason' => NULL,
                'date_of_rejected' => NULL,
                'is_service' => 0,
                'is_template' => 0,
                'url_key' => 'campera-antrtida-2',
                'new' => 0,
                'featured' => 0,
                'visible' => 0,
                'visible_from' => NULL,
                'visible_to' => NULL,
                'currency_id' => 63,
                'price' => '46800.0000',
                'cost' => NULL,
                'special_price' => NULL,
                'special_price_from' => NULL,
                'special_price_to' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'width' => '1.0000',
                'height' => '1.0000',
                'depth' => '1.0000',
                'weight' => '1.0000',
                'critical_stock' => 0,
                'use_inventory_control' => 0,
                'inventories_json' => NULL,
                'json_value' => NULL,
                'images_json' => '"[{\\"image\\":\\"\\\\\\/storage\\\\\\/products\\\\\\/ce3961b03ed287efdc51f6ecab3d3678.jpg\\"}]"',
                'attributes_json' => '{"attribute-1":null}',
                'variations_json' => NULL,
                'parent_id' => NULL,
                'template_id' => NULL,
                'status' => 1,
                'seller_id' => 1,
                'company_id' => 1,
                'created_at' => '2020-10-21 14:47:50',
                'updated_at' => '2020-10-21 14:52:34',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'product_type_id' => 1,
                'product_class_id' => 1,
                'product_brand_id' => NULL,
                'sku' => 'ca4-123',
                'name' => 'CAMPERA ACONCAGUA 4 PARA EXPEDICIÓN',
                'description' => '<p>Campera t&eacute;cnica de alta monta&ntilde;a para expediciones y largas traves&iacute;as. 100 % impermeable y cortaviento, alta respirabilidad y bajo peso. Tejido GORE-TEX&reg; 3C PRO mejora resistencia a la abrasi&oacute;n interna y enganches.</p>',
                'short_description' => 'CAMPERA ACONCAGUA 4 PARA EXPEDICIÓN',
                'is_approved' => 1,
                'rejected_reason' => NULL,
                'date_of_rejected' => NULL,
                'is_service' => 0,
                'is_template' => 0,
                'url_key' => 'campera-aconcagua-4-para-expedicin',
                'new' => 0,
                'featured' => 0,
                'visible' => 0,
                'visible_from' => NULL,
                'visible_to' => NULL,
                'currency_id' => 63,
                'price' => '41700.0000',
                'cost' => NULL,
                'special_price' => NULL,
                'special_price_from' => NULL,
                'special_price_to' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'width' => '1.0000',
                'height' => '1.0000',
                'depth' => '1.0000',
                'weight' => '0.4800',
                'critical_stock' => 0,
                'use_inventory_control' => 0,
                'inventories_json' => NULL,
                'json_value' => NULL,
                'images_json' => '"[{\\"image\\":\\"\\\\\\/storage\\\\\\/products\\\\\\/6e1c5d780c688b32bde9e92d989d2ce5.jpg\\"}]"',
                'attributes_json' => '{"attribute-1":null}',
                'variations_json' => NULL,
                'parent_id' => NULL,
                'template_id' => NULL,
                'status' => 1,
                'seller_id' => 1,
                'company_id' => 1,
                'created_at' => '2020-10-21 14:54:22',
                'updated_at' => '2020-10-21 14:55:07',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'product_type_id' => 2,
                'product_class_id' => 2,
                'product_brand_id' => NULL,
                'sku' => 'HOLL',
                'name' => 'Hollister',
                'description' => '<p>Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister Hollister</p>',
                'short_description' => 'AFEAFEAEFAEF',
                'is_approved' => 1,
                'rejected_reason' => NULL,
                'date_of_rejected' => NULL,
                'is_service' => 0,
                'is_template' => 0,
                'url_key' => 'hollister',
                'new' => 0,
                'featured' => 0,
                'visible' => 0,
                'visible_from' => NULL,
                'visible_to' => NULL,
                'currency_id' => 63,
                'price' => NULL,
                'cost' => NULL,
                'special_price' => NULL,
                'special_price_from' => NULL,
                'special_price_to' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'width' => NULL,
                'height' => NULL,
                'depth' => NULL,
                'weight' => NULL,
                'critical_stock' => 0,
                'use_inventory_control' => 0,
                'inventories_json' => NULL,
                'json_value' => NULL,
                'images_json' => '"[{\\"image\\":\\"\\\\\\/storage\\\\\\/products\\\\\\/c1736432253e3190b9a513e17a87ccc7.jpg\\"}]"',
                'attributes_json' => '{"attribute-4":"* No aplica"}',
                'variations_json' => '[{"product_id":4,"image":"\\/storage\\/products\\/8dceff88d6e95f7de496d14a81512aef.jpg","sku":"HOL2","name":"Hollister XS","price":"45000","weight":"2","height":"3,13","width":"5,86","depth":"15","super-attribute-3":"XS"},{"product_id":5,"image":"\\/storage\\/products\\/f9e882443ad63eee52f3cbd6dd057ba0.jpg","sku":"HOL76","name":"Hollister S","price":"31520","weight":"2","height":"3,13","width":"5,86","depth":"15","super-attribute-3":"S"},{"product_id":6,"image":"\\/storage\\/products\\/5acb3e1c933f8bab9f349d2250cafa5f.jpg","sku":"HOL34","name":"Hollister M","price":"25000","weight":"2","height":"3,13","width":"5,86","depth":"15","super-attribute-3":"M"}]',
                'parent_id' => NULL,
                'template_id' => NULL,
                'status' => 1,
                'seller_id' => 1,
                'company_id' => 1,
                'created_at' => '2020-10-22 15:22:27',
                'updated_at' => '2020-10-22 16:37:03',
                'deleted_at' => '2020-10-22 16:37:03',
            ),
            3 => 
            array (
                'id' => 4,
                'product_type_id' => 1,
                'product_class_id' => 2,
                'product_brand_id' => NULL,
                'sku' => 'HOL2',
                'name' => 'Hollister XS',
                'description' => NULL,
                'short_description' => NULL,
                'is_approved' => NULL,
                'rejected_reason' => NULL,
                'date_of_rejected' => NULL,
                'is_service' => 0,
                'is_template' => 0,
                'url_key' => NULL,
                'new' => NULL,
                'featured' => NULL,
                'visible' => NULL,
                'visible_from' => NULL,
                'visible_to' => NULL,
                'currency_id' => 63,
                'price' => '45000.0000',
                'cost' => NULL,
                'special_price' => NULL,
                'special_price_from' => NULL,
                'special_price_to' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'width' => '586.0000',
                'height' => '313.0000',
                'depth' => '15.0000',
                'weight' => '2.0000',
                'critical_stock' => 0,
                'use_inventory_control' => 0,
                'inventories_json' => '[]',
                'json_value' => NULL,
                'images_json' => '"[{\\"image\\":\\"\\\\\\/storage\\\\\\/products\\\\\\/8dceff88d6e95f7de496d14a81512aef.jpg\\"}]"',
                'attributes_json' => NULL,
                'variations_json' => NULL,
                'parent_id' => 3,
                'template_id' => NULL,
                'status' => 1,
                'seller_id' => 1,
                'company_id' => 1,
                'created_at' => '2020-10-22 15:24:10',
                'updated_at' => '2020-10-22 16:37:03',
                'deleted_at' => '2020-10-22 16:37:03',
            ),
            4 => 
            array (
                'id' => 5,
                'product_type_id' => 1,
                'product_class_id' => 2,
                'product_brand_id' => NULL,
                'sku' => 'HOL76',
                'name' => 'Hollister S',
                'description' => NULL,
                'short_description' => NULL,
                'is_approved' => NULL,
                'rejected_reason' => NULL,
                'date_of_rejected' => NULL,
                'is_service' => 0,
                'is_template' => 0,
                'url_key' => NULL,
                'new' => NULL,
                'featured' => NULL,
                'visible' => NULL,
                'visible_from' => NULL,
                'visible_to' => NULL,
                'currency_id' => 63,
                'price' => '31520.0000',
                'cost' => NULL,
                'special_price' => NULL,
                'special_price_from' => NULL,
                'special_price_to' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'width' => '586.0000',
                'height' => '313.0000',
                'depth' => '15.0000',
                'weight' => '2.0000',
                'critical_stock' => 0,
                'use_inventory_control' => 0,
                'inventories_json' => '[]',
                'json_value' => NULL,
                'images_json' => '"[{\\"image\\":\\"\\\\\\/storage\\\\\\/products\\\\\\/f9e882443ad63eee52f3cbd6dd057ba0.jpg\\"}]"',
                'attributes_json' => NULL,
                'variations_json' => NULL,
                'parent_id' => 3,
                'template_id' => NULL,
                'status' => 1,
                'seller_id' => 1,
                'company_id' => 1,
                'created_at' => '2020-10-22 15:24:10',
                'updated_at' => '2020-10-22 16:37:03',
                'deleted_at' => '2020-10-22 16:37:03',
            ),
            5 => 
            array (
                'id' => 6,
                'product_type_id' => 1,
                'product_class_id' => 2,
                'product_brand_id' => NULL,
                'sku' => 'HOL34',
                'name' => 'Hollister M',
                'description' => NULL,
                'short_description' => NULL,
                'is_approved' => NULL,
                'rejected_reason' => NULL,
                'date_of_rejected' => NULL,
                'is_service' => 0,
                'is_template' => 0,
                'url_key' => NULL,
                'new' => NULL,
                'featured' => NULL,
                'visible' => NULL,
                'visible_from' => NULL,
                'visible_to' => NULL,
                'currency_id' => 63,
                'price' => '25000.0000',
                'cost' => NULL,
                'special_price' => NULL,
                'special_price_from' => NULL,
                'special_price_to' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'width' => '586.0000',
                'height' => '313.0000',
                'depth' => '15.0000',
                'weight' => '2.0000',
                'critical_stock' => 0,
                'use_inventory_control' => 0,
                'inventories_json' => '[]',
                'json_value' => NULL,
                'images_json' => '"[{\\"image\\":\\"\\\\\\/storage\\\\\\/products\\\\\\/5acb3e1c933f8bab9f349d2250cafa5f.jpg\\"}]"',
                'attributes_json' => NULL,
                'variations_json' => NULL,
                'parent_id' => 3,
                'template_id' => NULL,
                'status' => 1,
                'seller_id' => 1,
                'company_id' => 1,
                'created_at' => '2020-10-22 15:24:10',
                'updated_at' => '2020-10-22 16:37:03',
                'deleted_at' => '2020-10-22 16:37:03',
            ),
            6 => 
            array (
                'id' => 7,
                'product_type_id' => 2,
                'product_class_id' => 2,
                'product_brand_id' => NULL,
                'sku' => 'LEVY',
                'name' => 'Pantalon levy',
                'description' => '<p>&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy Pantalon levy</p>',
                'short_description' => 'Pantalon levy',
                'is_approved' => 1,
                'rejected_reason' => NULL,
                'date_of_rejected' => NULL,
                'is_service' => 0,
                'is_template' => 0,
                'url_key' => 'pantalon-levy',
                'new' => 0,
                'featured' => 0,
                'visible' => 0,
                'visible_from' => NULL,
                'visible_to' => NULL,
                'currency_id' => 63,
                'price' => NULL,
                'cost' => NULL,
                'special_price' => NULL,
                'special_price_from' => NULL,
                'special_price_to' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'width' => NULL,
                'height' => NULL,
                'depth' => NULL,
                'weight' => NULL,
                'critical_stock' => 0,
                'use_inventory_control' => 0,
                'inventories_json' => NULL,
                'json_value' => NULL,
                'images_json' => '"[{\\"image\\":\\"\\\\\\/storage\\\\\\/products\\\\\\/3180058a7a1579762b9f1437f0c96a06.jpg\\"}]"',
                'attributes_json' => '{"attribute-3":"* No aplica","attribute-4":"* No aplica"}',
                'variations_json' => '[{"product_id":"8","image":"\\/storage\\/products\\/3888700a0d64b91166059e07296faf86.jpg","sku":"334234","name":"Levy variante 1","price":"4900","weight":"1","height":"2","width":"3","depth":"4"},{"product_id":"9","image":"\\/storage\\/products\\/de8133566e892662003ac2c86454cc0b.jpg","sku":"3423423","name":"Levy variante 1","price":"4900","weight":"1","height":"2","width":"3","depth":"4"}]',
                'parent_id' => NULL,
                'template_id' => NULL,
                'status' => 1,
                'seller_id' => 1,
                'company_id' => 1,
                'created_at' => '2020-10-22 16:22:51',
                'updated_at' => '2020-10-22 16:37:01',
                'deleted_at' => '2020-10-22 16:37:01',
            ),
            7 => 
            array (
                'id' => 8,
                'product_type_id' => 1,
                'product_class_id' => 2,
                'product_brand_id' => NULL,
                'sku' => '334234',
                'name' => 'Levy variante 1',
                'description' => NULL,
                'short_description' => NULL,
                'is_approved' => NULL,
                'rejected_reason' => NULL,
                'date_of_rejected' => NULL,
                'is_service' => 0,
                'is_template' => 0,
                'url_key' => NULL,
                'new' => NULL,
                'featured' => NULL,
                'visible' => NULL,
                'visible_from' => NULL,
                'visible_to' => NULL,
                'currency_id' => 63,
                'price' => '4900.0000',
                'cost' => NULL,
                'special_price' => NULL,
                'special_price_from' => NULL,
                'special_price_to' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'width' => '3.0000',
                'height' => '2.0000',
                'depth' => '4.0000',
                'weight' => '1.0000',
                'critical_stock' => 0,
                'use_inventory_control' => 0,
                'inventories_json' => '[]',
                'json_value' => NULL,
                'images_json' => '"[{\\"image\\":\\"\\\\\\/storage\\\\\\/products\\\\\\/3888700a0d64b91166059e07296faf86.jpg\\"}]"',
                'attributes_json' => NULL,
                'variations_json' => NULL,
                'parent_id' => 7,
                'template_id' => NULL,
                'status' => 1,
                'seller_id' => 1,
                'company_id' => 1,
                'created_at' => '2020-10-22 16:25:29',
                'updated_at' => '2020-10-22 16:37:01',
                'deleted_at' => '2020-10-22 16:37:01',
            ),
            8 => 
            array (
                'id' => 9,
                'product_type_id' => 1,
                'product_class_id' => 2,
                'product_brand_id' => NULL,
                'sku' => '3423423',
                'name' => 'Levy variante 1',
                'description' => NULL,
                'short_description' => NULL,
                'is_approved' => NULL,
                'rejected_reason' => NULL,
                'date_of_rejected' => NULL,
                'is_service' => 0,
                'is_template' => 0,
                'url_key' => NULL,
                'new' => NULL,
                'featured' => NULL,
                'visible' => NULL,
                'visible_from' => NULL,
                'visible_to' => NULL,
                'currency_id' => 63,
                'price' => '4900.0000',
                'cost' => NULL,
                'special_price' => NULL,
                'special_price_from' => NULL,
                'special_price_to' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'width' => '3.0000',
                'height' => '2.0000',
                'depth' => '4.0000',
                'weight' => '1.0000',
                'critical_stock' => 0,
                'use_inventory_control' => 0,
                'inventories_json' => '[]',
                'json_value' => NULL,
                'images_json' => '"[{\\"image\\":\\"\\\\\\/storage\\\\\\/products\\\\\\/de8133566e892662003ac2c86454cc0b.jpg\\"}]"',
                'attributes_json' => NULL,
                'variations_json' => NULL,
                'parent_id' => 7,
                'template_id' => NULL,
                'status' => 1,
                'seller_id' => 1,
                'company_id' => 1,
                'created_at' => '2020-10-22 16:25:29',
                'updated_at' => '2020-10-22 16:37:01',
                'deleted_at' => '2020-10-22 16:37:01',
            ),
            9 => 
            array (
                'id' => 10,
                'product_type_id' => 2,
                'product_class_id' => 2,
                'product_brand_id' => NULL,
                'sku' => 'HOL',
                'name' => 'Hollister',
                'description' => '<p>Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camiseta Hollister camisetavv</p>',
                'short_description' => 'Hollister camiseta',
                'is_approved' => 1,
                'rejected_reason' => NULL,
                'date_of_rejected' => NULL,
                'is_service' => 0,
                'is_template' => 0,
                'url_key' => 'hollister24',
                'new' => 0,
                'featured' => 0,
                'visible' => 0,
                'visible_from' => NULL,
                'visible_to' => NULL,
                'currency_id' => 63,
                'price' => NULL,
                'cost' => NULL,
                'special_price' => NULL,
                'special_price_from' => NULL,
                'special_price_to' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'width' => NULL,
                'height' => NULL,
                'depth' => NULL,
                'weight' => NULL,
                'critical_stock' => 0,
                'use_inventory_control' => 0,
                'inventories_json' => NULL,
                'json_value' => NULL,
                'images_json' => '"[{\\"image\\":\\"\\\\\\/storage\\\\\\/products\\\\\\/da9e9d056d3ad22550d64ecc642bac72.jpg\\"}]"',
                'attributes_json' => '{"attribute-7":null}',
                'variations_json' => '[{"product_id":11,"image":"\\/storage\\/products\\/5e92a015ae3c95d0d1206a2000071a20.jpg","sku":"HOL56","name":"HOllister blanca","price":"25000","weight":"24","height":"1","width":"23","depth":"1","super-attribute-3":"S","super-attribute-4":"Negro"},{"product_id":12,"image":"\\/storage\\/products\\/d9bb4d7f36259df23a408d8120127e60.jpg","sku":"HOL574","name":"Hollister roja","price":"58000","weight":"3","height":"1","width":"2","depth":"6","super-attribute-3":"S","super-attribute-4":"Rojo"}]',
                'parent_id' => NULL,
                'template_id' => NULL,
                'status' => 1,
                'seller_id' => 1,
                'company_id' => 1,
                'created_at' => '2020-10-22 16:37:49',
                'updated_at' => '2020-10-22 16:39:03',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'product_type_id' => 1,
                'product_class_id' => 2,
                'product_brand_id' => NULL,
                'sku' => 'HOL56',
                'name' => 'HOllister blanca',
                'description' => NULL,
                'short_description' => NULL,
                'is_approved' => NULL,
                'rejected_reason' => NULL,
                'date_of_rejected' => NULL,
                'is_service' => 0,
                'is_template' => 0,
                'url_key' => NULL,
                'new' => NULL,
                'featured' => NULL,
                'visible' => NULL,
                'visible_from' => NULL,
                'visible_to' => NULL,
                'currency_id' => 63,
                'price' => '25000.0000',
                'cost' => NULL,
                'special_price' => NULL,
                'special_price_from' => NULL,
                'special_price_to' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'width' => '23.0000',
                'height' => '1.0000',
                'depth' => '1.0000',
                'weight' => '24.0000',
                'critical_stock' => 0,
                'use_inventory_control' => 0,
                'inventories_json' => '[]',
                'json_value' => NULL,
                'images_json' => '"[{\\"image\\":\\"\\\\\\/storage\\\\\\/products\\\\\\/5e92a015ae3c95d0d1206a2000071a20.jpg\\"}]"',
                'attributes_json' => NULL,
                'variations_json' => NULL,
                'parent_id' => 10,
                'template_id' => NULL,
                'status' => 1,
                'seller_id' => 1,
                'company_id' => 1,
                'created_at' => '2020-10-22 16:39:03',
                'updated_at' => '2020-10-22 16:39:03',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'product_type_id' => 1,
                'product_class_id' => 2,
                'product_brand_id' => NULL,
                'sku' => 'HOL574',
                'name' => 'Hollister roja',
                'description' => NULL,
                'short_description' => NULL,
                'is_approved' => NULL,
                'rejected_reason' => NULL,
                'date_of_rejected' => NULL,
                'is_service' => 0,
                'is_template' => 0,
                'url_key' => NULL,
                'new' => NULL,
                'featured' => NULL,
                'visible' => NULL,
                'visible_from' => NULL,
                'visible_to' => NULL,
                'currency_id' => 63,
                'price' => '58000.0000',
                'cost' => NULL,
                'special_price' => NULL,
                'special_price_from' => NULL,
                'special_price_to' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'width' => '2.0000',
                'height' => '1.0000',
                'depth' => '6.0000',
                'weight' => '3.0000',
                'critical_stock' => 0,
                'use_inventory_control' => 0,
                'inventories_json' => '[]',
                'json_value' => NULL,
                'images_json' => '"[{\\"image\\":\\"\\\\\\/storage\\\\\\/products\\\\\\/d9bb4d7f36259df23a408d8120127e60.jpg\\"}]"',
                'attributes_json' => NULL,
                'variations_json' => NULL,
                'parent_id' => 10,
                'template_id' => NULL,
                'status' => 1,
                'seller_id' => 1,
                'company_id' => 1,
                'created_at' => '2020-10-22 16:39:03',
                'updated_at' => '2020-10-22 16:39:03',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'product_type_id' => 2,
                'product_class_id' => 2,
                'product_brand_id' => NULL,
                'sku' => 'LEVY34',
                'name' => 'LEvy pantalon',
                'description' => '<p>&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy&nbsp;Pantalon levy Pantalon levy Pantalon levy</p>',
                'short_description' => 'Pantalon levy',
                'is_approved' => 1,
                'rejected_reason' => NULL,
                'date_of_rejected' => NULL,
                'is_service' => 0,
                'is_template' => 0,
                'url_key' => 'levy-pantalon',
                'new' => 0,
                'featured' => 0,
                'visible' => 0,
                'visible_from' => NULL,
                'visible_to' => NULL,
                'currency_id' => 63,
                'price' => NULL,
                'cost' => NULL,
                'special_price' => NULL,
                'special_price_from' => NULL,
                'special_price_to' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'width' => NULL,
                'height' => NULL,
                'depth' => NULL,
                'weight' => NULL,
                'critical_stock' => 0,
                'use_inventory_control' => 0,
                'inventories_json' => NULL,
                'json_value' => NULL,
                'images_json' => '"[{\\"image\\":\\"\\\\\\/storage\\\\\\/products\\\\\\/7bff1b7496b68613c31e0998116dd561.jpg\\"}]"',
                'attributes_json' => '{"attribute-4":"* No aplica","attribute-7":null}',
                'variations_json' => '[{"product_id":14,"image":"\\/storage\\/products\\/bef23aebc2ef96e177572c9383d31105.jpg","sku":"DFAEF","name":"pantalon negro","price":"6500","weight":"1","height":"3","width":"6","depth":"51","super-attribute-3":"XS"},{"product_id":15,"image":"\\/storage\\/products\\/5c61f379d9b6955999143499bced51cf.jpg","sku":"34234","name":"pantalon amarillo","price":"6500","weight":"1","height":"3","width":"6","depth":"51","super-attribute-3":"S"}]',
                'parent_id' => NULL,
                'template_id' => NULL,
                'status' => 1,
                'seller_id' => 1,
                'company_id' => 1,
                'created_at' => '2020-10-22 16:39:39',
                'updated_at' => '2020-10-22 16:40:31',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'product_type_id' => 1,
                'product_class_id' => 2,
                'product_brand_id' => NULL,
                'sku' => 'DFAEF',
                'name' => 'pantalon negro',
                'description' => NULL,
                'short_description' => NULL,
                'is_approved' => NULL,
                'rejected_reason' => NULL,
                'date_of_rejected' => NULL,
                'is_service' => 0,
                'is_template' => 0,
                'url_key' => NULL,
                'new' => NULL,
                'featured' => NULL,
                'visible' => NULL,
                'visible_from' => NULL,
                'visible_to' => NULL,
                'currency_id' => 63,
                'price' => '6500.0000',
                'cost' => NULL,
                'special_price' => NULL,
                'special_price_from' => NULL,
                'special_price_to' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'width' => '6.0000',
                'height' => '3.0000',
                'depth' => '51.0000',
                'weight' => '1.0000',
                'critical_stock' => 0,
                'use_inventory_control' => 0,
                'inventories_json' => '[]',
                'json_value' => NULL,
                'images_json' => '"[{\\"image\\":\\"\\\\\\/storage\\\\\\/products\\\\\\/bef23aebc2ef96e177572c9383d31105.jpg\\"}]"',
                'attributes_json' => NULL,
                'variations_json' => NULL,
                'parent_id' => 13,
                'template_id' => NULL,
                'status' => 1,
                'seller_id' => 1,
                'company_id' => 1,
                'created_at' => '2020-10-22 16:40:31',
                'updated_at' => '2020-10-22 16:40:31',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'product_type_id' => 1,
                'product_class_id' => 2,
                'product_brand_id' => NULL,
                'sku' => '34234',
                'name' => 'pantalon amarillo',
                'description' => NULL,
                'short_description' => NULL,
                'is_approved' => NULL,
                'rejected_reason' => NULL,
                'date_of_rejected' => NULL,
                'is_service' => 0,
                'is_template' => 0,
                'url_key' => NULL,
                'new' => NULL,
                'featured' => NULL,
                'visible' => NULL,
                'visible_from' => NULL,
                'visible_to' => NULL,
                'currency_id' => 63,
                'price' => '6500.0000',
                'cost' => NULL,
                'special_price' => NULL,
                'special_price_from' => NULL,
                'special_price_to' => NULL,
                'meta_title' => NULL,
                'meta_keywords' => NULL,
                'meta_description' => NULL,
                'width' => '6.0000',
                'height' => '3.0000',
                'depth' => '51.0000',
                'weight' => '1.0000',
                'critical_stock' => 0,
                'use_inventory_control' => 0,
                'inventories_json' => '[]',
                'json_value' => NULL,
                'images_json' => '"[{\\"image\\":\\"\\\\\\/storage\\\\\\/products\\\\\\/5c61f379d9b6955999143499bced51cf.jpg\\"}]"',
                'attributes_json' => NULL,
                'variations_json' => NULL,
                'parent_id' => 13,
                'template_id' => NULL,
                'status' => 1,
                'seller_id' => 1,
                'company_id' => 1,
                'created_at' => '2020-10-22 16:40:31',
                'updated_at' => '2020-10-22 16:40:31',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}