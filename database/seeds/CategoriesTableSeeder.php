<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        $category= new \App\Category([
            'name'=>'High Tech',

        ]);
        $category->save();
        $category= new \App\Category([
            'name'=>'Clothes',

        ]);
        $category->save();
    }
}
