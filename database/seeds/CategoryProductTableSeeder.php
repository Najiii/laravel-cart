<?php

use Illuminate\Database\Seeder;
use App\CategoryProduct;

class CategoryProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryProduct::insert([
            "category_id" => 1,
            "product_id" => 1
        ]);

        CategoryProduct::insert([
            "category_id" => 1,
            "product_id" => 2
        ]);

        CategoryProduct::insert([
            "category_id" => 1,
            "product_id" => 3
        ]);

        CategoryProduct::insert([
            "category_id" => 1,
            "product_id" => 4
        ]);

        CategoryProduct::insert([
            "category_id" => 1,
            "product_id" => 5
        ]);

        // Apparel & Shoes
        CategoryProduct::insert([
            "category_id" => 3,
            "product_id" => 1
        ]);

        CategoryProduct::insert([
            "category_id" => 3,
            "product_id" => 2
        ]);

        CategoryProduct::insert([
            "category_id" => 3,
            "product_id" => 3
        ]);

        CategoryProduct::insert([
            "category_id" => 3,
            "product_id" => 4
        ]);

        CategoryProduct::insert([
            "category_id" => 3,
            "product_id" => 5
        ]);

        // Electronics
        CategoryProduct::insert([
            "category_id" => 2,
            "product_id" => 6
        ]);

        // Apparel
        CategoryProduct::insert([
            "category_id" => 3,
            "product_id" => 7
        ]);

        CategoryProduct::insert([
            "category_id" => 3,
            "product_id" => 8
        ]);

        CategoryProduct::insert([
            "category_id" => 3,
            "product_id" => 9
        ]);

        CategoryProduct::insert([
            "category_id" => 3,
            "product_id" => 10
        ]);
    }
}
