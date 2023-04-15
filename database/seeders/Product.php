<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'item_code' => 'PRD003',
                'name_of_goods' => 'BBQ',
                'catagory_item' => 'Food',
                'price' => '100',
                'qty'   => '150',
            ],
            [
                'item_code' => 'PRD004',
                'name_of_goods' => 'Kabab',
                'catagory_item' => 'Food',
                'price' => '500',
                'qty'   => '200',
            ],
            [
                'item_code' => 'PRD005',
                'name_of_goods' => 'Makronies',
                'catagory_item' => 'Food',
                'price' => '500',
                'qty'   => '100',
            ],
            [
                'item_code' => 'PRD006',
                'name_of_goods' => 'Coffee',
                'catagory_item' => 'Drink',
                'price' => '500',
                'qty'   => '300',
            ],
            [
                'item_code' => 'PRD008',
                'name_of_goods' => 'Juice',
                'catagory_item' => 'Drink',
                'price' => '300',
                'qty'   => '100',
            ],
            [
                'item_code' => 'PRD009',
                'name_of_goods' => 'Lemonade',
                'catagory_item' => 'Drinks',
                'price' => '200',
                'qty'   => '300',
            ],
            [
                'item_code' => 'PRD0010',
                'name_of_goods' => 'Soda',
                'catagory_item' => 'Drinks',
                'price' => '600',
                'qty'   => '400',
            ],
            [
                'item_code' => 'PRD0011',
                'name_of_goods' => 'Popcorn',
                'catagory_item' => 'Snakes',
                'price' => '200',
                'qty'   => '100',
            ],
            [
                'item_code' => 'PRD0012',
                'name_of_goods' => 'Lays',
                'catagory_item' => 'Snakes',
                'price' => '300',
                'qty'   => '200',
            ],
            [
                'item_code' => 'PRD0013',
                'name_of_goods' => 'Kurkury',
                'catagory_item' => 'Snakes',
                'price' => '500',
                'qty'   => '200',
            ],
            [
                'item_code' => 'PRD0014',
                'name_of_goods' => 'Granola bars',
                'catagory_item' => 'Snakes',
                'price' => '600',
                'qty'   => '500',
            ],
            [
                'item_code' => 'PRD0015',
                'name_of_goods' => 'Salanty',
                'catagory_item' => 'Snakes',
                'price' => '200',
                'qty'   => '300',
            ],
            [
                'item_code' => 'PRD0016',
                'name_of_goods' => 'Apple',
                'catagory_item' => 'Fruit',
                'price' => '700',
                'qty'   => '400',
            ],
            [
                'item_code' => 'PRD0017',
                'name_of_goods' => 'Banana',
                'catagory_item' => 'Fruit',
                'price' => '400',
                'qty'   => '200',
            ],
            [
                'item_code' => 'PRD0018',
                'name_of_goods' => 'Orange',
                'catagory_item' => 'Fruit',
                'price' => '500',
                'qty'   => '200',
            ],
            [
                'item_code' => 'PRD0019',
                'name_of_goods' => 'Strawberry',
                'catagory_item' => 'Fruit',
                'price' => '600',
                'qty'   => '300',
            ],
            [
                'item_code' => 'PRD0020',
                'name_of_goods' => 'Mangos',
                'catagory_item' => 'Fruit',
                'price' => '800',
                'qty'   => '600',
            ],
        ]);
    }
}
