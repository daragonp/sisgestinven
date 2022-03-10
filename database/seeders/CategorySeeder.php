<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name'=>'Lácteos',
            ]);
        DB::table('categories')->insert([
            'name'=>'Víveres',
            ]);
        DB::table('categories')->insert([
            'name'=>'Licores nacionales',
            ]);
        DB::table('categories')->insert([
            'name'=>'Licores importados',
            ]);
        DB::table('categories')->insert([
            'name'=>'Rancho',
            ]);
        DB::table('categories')->insert([
            'name'=>'Belleza',
            ]);
        DB::table('categories')->insert([
            'name'=>'Salud',
            ]);
        DB::table('categories')->insert([
            'name'=>'Alimentos',
            ]);
        DB::table('categories')->insert([
            'name'=>'Granos',
            ]);
    }
}
