<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create([
            'user_id' => 1,
            'product_id' => 1,
            'payment_method_id' => 1,
            'created_at' => '2021-05-01 00:00:00',
            'updated_at' => '2021-05-01 00:00:00'
        ]);

        Transaction::create([
            'user_id' => 1,
            'product_id' => 2,
            'payment_method_id' => 1,
            'created_at' => '2021-05-01 00:00:00',
            'updated_at' => '2021-05-01 00:00:00'
        ]);

        Transaction::create([
            'user_id' => 2,
            'product_id' => 4,
            'payment_method_id' => 5,
            'created_at' => '2021-05-01 00:00:00',
            'updated_at' => '2021-05-01 00:00:00'
        ]);

        Transaction::create([
            'user_id' => 3,
            'product_id' => 4,
            'payment_method_id' => 3,
            'created_at' => '2021-05-01 00:00:00',
            'updated_at' => '2021-05-01 00:00:00'
        ]);

        Transaction::create([
            'user_id' => 4,
            'product_id' => 5,
            'payment_method_id' => 1,
            'created_at' => '2021-05-01 00:00:00',
            'updated_at' => '2021-05-01 00:00:00'
        ]);

        Transaction::create([
            'user_id' => 1,
            'product_id' => 6,
            'payment_method_id' => 1,
            'created_at' => '2021-05-01 00:00:00',
            'updated_at' => '2021-05-01 00:00:00'
        ]);

        Transaction::create([
            'user_id' => 1,
            'product_id' => 7,
            'payment_method_id' => 2,
            'created_at' => '2021-05-01 00:00:00',
            'updated_at' => '2021-05-01 00:00:00'
        ]);

        Transaction::create([
            'user_id' => 5,
            'product_id' => 8,
            'payment_method_id' => 1,
            'created_at' => '2021-05-01 00:00:00',
            'updated_at' => '2021-05-01 00:00:00'
        ]);

        Transaction::create([
            'user_id' => 3,
            'product_id' => 9,
            'payment_method_id' => 1,
            'created_at' => '2021-05-01 00:00:00',
            'updated_at' => '2021-05-01 00:00:00'
        ]);
    }
}
