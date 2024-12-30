<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            [
                'name' => 'product 1',
                'price' => 1000,
                'created_at' => '2024-12-01 00:00:00'
            ],
            [
                'name' => 'product 2',
                'price' => 2000,
                'created_at' => '2024-12-02 00:00:00'
            ]
            ,
            [
                'name' => 'product 3',
                'price' => 3000,
                'created_at' => '2024-12-03 00:00:00'
            ],
            [
                'name' => 'product 4',
                'price' => 4000,
                'created_at' => '2024-12-04 00:00:00'
            ],
            [
                'name' => 'product 5',
                'price' => 5000,
                'created_at' => '2024-12-05 00:00:00'
            ],
            [
                'name' => 'product 6',
                'price' => 6000,
                'created_at' => '2024-12-06 00:00:00'
            ],
            [
                'name' => 'product 7',
                'price' => 7000,
                'created_at' => '2024-12-07 00:00:00'
            ],
            [
                'name' => 'product 8',
                'price' => 8000,
                'created_at' => '2024-12-08 00:00:00'
            ],
            [
                'name' => 'product 9',
                'price' => 9000,
                'created_at' => '2024-12-09 00:00:00'
            ],
            [
                'name' => 'product 10',
                'price' => 10000,
                'created_at' => '2024-12-10 00:00:00'
            ],
            [
                'name' => 'product 11',
                'price' => 11000,
                'created_at' => '2024-12-11 00:00:00'
            ],
            [
                'name' => 'product 12',
                'price' => 12000,
                'created_at' => '2024-12-12 00:00:00'
            ],
            [
                'name' => 'product 13',
                'price' => 13000,
                'created_at' => '2024-12-13 00:00:00'
            ],
            [
                'name' => 'product 14',
                'price' => 14000,
                'created_at' => '2024-12-14 00:00:00'
            ],
            [
                'name' => 'product 15',
                'price' => 15000,
                'created_at' => '2024-12-15 00:00:00'
            ],
            [
                'name' => 'product 16',
                'price' => 16000,
                'created_at' => '2024-12-16 00:00:00'
            ],
            [
                'name' => 'product 17',
                'price' => 17000,
                'created_at' => '2024-12-17 00:00:00'
            ],
            [
                'name' => 'product 18',
                'price' => 18000,
                'created_at' => '2024-12-18 00:00:00'
            ],
            [
                'name' => 'product 19',
                'price' => 19000,
                'created_at' => '2024-12-19 00:00:00'
            ],
            [
                'name' => 'product 20',
                'price' => 20000,
                'created_at' => '2024-12-20 00:00:00'
            ],
            [
                'name' => 'product 21',
                'price' => 21000,
                'created_at' => '2024-12-21 00:00:00'
            ],
            [
                'name' => 'product 22',
                'price' => 22000,
                'created_at' => '2024-12-22 00:00:00'
            ],
            [
                'name' => 'product 23',
                'price' => 23000,
                'created_at' => '2024-12-23 00:00:00'
            ],
            [
                'name' => 'product 24',
                'price' => 24000,
                'created_at' => '2024-12-24 00:00:00'
            ],
            [
                'name' => 'product 25',
                'price' => 25000,
                'created_at' => '2024-12-25 00:00:00'
            ],
            [
                'name' => 'product 26',
                'price' => 26000,
                'created_at' => '2024-12-26 00:00:00'
            ],
            [
                'name' => 'product 27',
                'price' => 27000,
                'created_at' => '2024-12-27 00:00:00'
            ],
            [
                'name' => 'product 28',
                'price' => 28000,
                'created_at' => '2024-12-28 00:00:00'
            ],
            [
                'name' => 'product 29',
                'price' => 29000,
                'created_at' => '2024-12-29 00:00:00'
            ],
            [
                'name' => 'product 30',
                'price' => 30000,
                'created_at' => '2024-12-30 00:00:00'
            ],
            [
                'name' => 'product 31',
                'price' => 31000,
                'created_at' => '2024-12-31 00:00:00'
            ]
            ];
        
        foreach($arr as $value){
            DB::table('stock')->insert([
                'name' => $value['name'],
                'price' => $value['price'],
                'created_at' => $value['created_at']
            ]);
        }
    }
}
