<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('suppliers')->insert([
            'name'=>Str::random(30),
            'phone'=>rand(1000000000, 9999999999),
            'address'=>'Avenida La Ciudad # 15 - 23',
            ]);
    }
}
