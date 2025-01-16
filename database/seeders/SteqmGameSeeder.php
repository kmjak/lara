<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SteqmGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Games')->insert([
            [
                'id'=>'1',
                'name'=>'test1',
                'description'=>'test data 1',
                'price'=>100,
                'developer'=>'kmjak',
                'rating'=>4.2,
                'download'=>694,
                'release_date'=>"2000-01-01",
            ],
            [
                'id'=>'2',
                'name'=>'test2',
                'description'=>'test data 2',
                'price'=>400,
                'developer'=>'kmjak',
                'rating'=>1.4,
                'download'=>1,
                'release_date'=>"1985-01-01",
            ],
            [
                'id'=>'3',
                'name'=>'test3',
                'description'=>'test data 3',
                'price'=>0,
                'developer'=>'Aporo',
                'rating'=>3.4,
                'download'=>34,
                'release_date'=>"2010-04-01",
            ],
        ]);
    }
}