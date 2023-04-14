<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class Goods_Table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('goods')->insert([
            'goods_code' => 'PRD001',
            'goods_name'=>'Pocari Sweats',
            'goods_category'=>'Beverages',
            'price'=>7500,
            'stock_quantity'=>80
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD002',
            'goods_name'=>'Thai tea',
            'goods_category'=>'Beverages',
            'price'=>8900,
            'stock_quantity'=>50
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD003',
            'goods_name'=>'Fruit Tea',
            'goods_category'=>'Beverages',
            'price'=>6900,
            'stock_quantity'=>45
        ]);
        
        DB::table('goods')->insert([
            'goods_code'=>'PRD004',
            'goods_name'=>'Momogi',
            'goods_category'=>'Foods',
            'price'=>10500,
            'stock_quantity'=>60
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD005',
            'goods_name'=>'Indomie',
            'goods_category'=>'Foods',
            'price'=>3500,
            'stock_quantity'=>200
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD006',
            'goods_name'=>'Lemonilo',
            'goods_category'=>'Foods',
            'price'=>10000,
            'stock_quantity'=>130
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD007',
            'goods_name'=>'Top',
            'goods_category'=>'Foods',
            'price'=>500,
            'stock_quantity'=>100
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD008',
            'goods_name'=>'Buburia',
            'goods_category'=>'Foods',
            'price'=>5300,
            'stock_quantity'=>90
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD009',
            'goods_name'=>'Maya Sardines',
            'goods_category'=>'Foods',
            'price'=>90000,
            'stock_quantity'=>95
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD010',
            'goods_name'=>'Sari Roti Dorayaki',
            'goods_category'=>'Foods',
            'price'=>5500,
            'stock_quantity'=>100
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD011',
            'goods_name'=>'Rei Backpack',
            'goods_category'=>'Bag',
            'price'=>550000,
            'stock_quantity'=>50
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD012',
            'goods_name'=>'Backpack Ryden Blend',
            'goods_category'=>'Bag',
            'price'=>1100000,
            'stock_quantity'=>50
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD013',
            'goods_name'=>'Carys Martin Sling Bags Black',
            'goods_category'=>'Female Bag',
            'price'=>450000,
            'stock_quantity'=>50
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD014',
            'goods_name'=>'Helene Martha Sling Bags Beige',
            'goods_category'=>'Female Bag',
            'price'=>950000,
            'stock_quantity'=>50
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD015',
            'goods_name'=>'Versace Black Jeans',
            'goods_category'=>'Pants',
            'price'=>45000,
            'stock_quantity'=>50
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD016',
            'goods_name'=>'Levi s Blue Jeans',
            'goods_category'=>'Pants',
            'price'=>80000,
            'stock_quantity'=>75
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD017',
            'goods_name'=>'Eiger Shoes',
            'goods_category'=>'Shoes',
            'price'=>455000,
            'stock_quantity'=>75
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD018',
            'goods_name'=>'Hompyped Shoes',
            'goods_category'=>'Shoes',
            'price'=>410000,
            'stock_quantity'=>75
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD019',
            'goods_name'=>'New Balance pink editon shoes',
            'goods_category'=>'Shoes',
            'price'=>1500000,
            'stock_quantity'=>10
        ]);

        DB::table('goods')->insert([
            'goods_code'=>'PRD020',
            'goods_name'=>'Adidas Shoes',
            'goods_category'=>'Shoes',
            'price'=>530000,
            'stock_quantity'=>50
        ]);
    }

    public function down() {
        Schema::dropIfExists('goods');
    }
}
