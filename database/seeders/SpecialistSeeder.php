<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\MasterData\Specialist;
use Illuminate\Support\Facades\DB;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create data here
        $specialist = [
            [
                'name' => 'Dermatology',
                'price' => '250000',  
            ],
            [
                'name' => 'Dentist',
                'price' => '450000',
            ],
            [
                'name' => 'Endodontics',
                'price' => '150000',
            ],
            [
                'name' => 'General Dentistry',
                'price' => '120000',
            ],
            [
                'name' => 'Oral and Maxillofacial Surgery',
                'price' => '80000',
            ],
            [
                'name' => 'Orthodontics',
                'price' => '900000', 
            ],
            [
                'name' => 'Pediatric Dentistry',
                'price' => '300000',
            ],
            [
                'name' => 'Periodontics',
                'price' => '250000',   
            ],
            [
                'name' => 'Prosthodontics',
                'price' => '250000',
            ],
            [
                'name' => 'Radiology',
                'price' => '250000',
            ],
            [
                'name' => 'Surgery',
                'price' => '250000',
            ],
            [
                'name' => 'Urology',
                'price' => '250000',
            ],
        ];
        // this array $specialist will be insert to table 'specialist'
        Specialist::insert($specialist);
    }
}
