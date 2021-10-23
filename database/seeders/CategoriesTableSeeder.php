<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->id = 1;
        $category->name = 'Điện Thoại';
        $category->save();

        $category = new Category();
        $category->id = 2;
        $category->name = 'Ti Vi';
        $category->save();

        $category = new Category();
        $category->id = 3;
        $category->name = 'Điện Máy';
        $category->save();
    }
}
