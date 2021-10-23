<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $product = new Product();
      $product->id   = 1;
      $product->name = "products 1";
      $product->quantity  = "2";
      $product->description  = "products1";
      $product->price  = "99.99";
      $product->category_id  = 1;
      $product->save();

      $product = new Product();
      $product->id   = 2;
      $product->name = "products 2";
      $product->quantity  = "4";
      $product->description  = "products2";
      $product->price  = "99.99";
      $product->category_id  = 2;
      $product->save();

      $product = new Product();
      $product->id   = 3;
      $product->name = "products 3";
      $product->quantity  = "6";
      $product->description  = "products3";
      $product->price  = "99.99";
      $product->category_id  = 3;
      $product->save();
    }
}
