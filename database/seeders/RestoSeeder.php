<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restos')->insert(
            [
                'name'=>'KFC',
                'email'=>'kfc@me.com',
                'address'=>'amreli',
            ],
            [
                'name'=>'abc',
                'email'=>'abc@me.com',
                'address'=>'india',
            ],
            [
                'name'=>'bca',
                'email'=>'bca@me.com',
                'address'=>'india',
            ],
            [
                'name'=>'def',
                'email'=>'def@me.com',
                'address'=>'amreli',
            ],
            [
                'name'=>'kgf',
                'email'=>'lgf@me.com',
                'address'=>'amreli',
            ]
        );
    }
}
