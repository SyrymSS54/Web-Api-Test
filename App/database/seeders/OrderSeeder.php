<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = [
                [
                    'product_id' => 1,
                    'count' => 1,
                    'price' => 1000,
                ],
                [
                    'product_id' => 2,
                    'count' => 2,
                    'price' => 2000,
                ]
                
                ];

        for($i=1;$i<=11;$i++)
        {
            $time = '2024-12-'.$i+10 .' 00:00:00';

            DB::table('order')->insert([
                'totalprice' => 5000,
                'created_at' => $time
            ]);

            foreach($orders as $order)
            {
                DB::table('orderdescription')->insert([
                    'order_id' => $i,
                    'product_id' => $order['product_id'],
                    'count' => $order['count'],
                    'created_at' => $time
                ]);
            }

            DB::table('income')->insert([
                'order' => $i,
                'summ' => 5000,
                'created_at' => $time
            ]);

            DB::table('sale')->insert([
                'order_id' => $i,
                'summ' => 5000,
                'created_at' => $time
                
            ]);
        }
    }
}
