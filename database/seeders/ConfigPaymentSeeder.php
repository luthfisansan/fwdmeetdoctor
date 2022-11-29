<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\MasterData\ConfigPayment;
use Illuminate\Support\Facades\DB;

class ConfigPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create data here
        $config_payment = [
            [
                'fee' => '150000',
                'vat' => '20', //vat is percentage
            ],
        ];
        // this array $specialist will be insert to table 'specialist'
        ConfigPayment::insert($config_payment);
    }
}
