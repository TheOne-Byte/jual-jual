<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::create([
            'name' => 'GO-PAY',
        ]);
        PaymentMethod::create([
            'name' => 'OVO',
        ]);
        PaymentMethod::create([
            'name' => 'Dana',
        ]);
        PaymentMethod::create([
            'name' => 'ShopeePay',
        ]);
        PaymentMethod::create([
            'name' => 'Bank Transfers',
        ]);
    }
}
