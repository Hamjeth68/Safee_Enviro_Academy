<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'p_title' => 'Introduction Waste Management',
                'p_name' => 'Waste Management',
                'slug'  => '',
                'p_description' => '',
                'p_quantity' => 1,
                'p_ammount' => 99,

            ],
            [
                'p_title' => 'Hazardous Waste ',
                'p_name' => 'Samsung Brand',
                'slug'  => '',
                'p_description' => '',
                'p_quantity' => 1,
                'p_ammount' => 175,
         
            ],
            [
                'p_title' => 'Waste Legislation',
                'p_name' => 'Samsung Brand',
                'slug'  => '',
                'p_description' => '',
                'p_quantity' => 1,
                'p_ammount' => 99,

            ],
            [
                'p_title' => 'Landfill Management',
                'p_name' => 'Samsung Brand',
                'slug'  => '',
                'p_description' => '',
                'p_quantity' => 1,
                'p_ammount' => 350,

            ],

            [
                'p_title' => 'Speciality Waste Course',
                'p_name' => 'Samsung Brand',
                'slug'  => '',
                'p_description' => '',
                'p_quantity' => 1,
                'p_ammount' => 400,

            ],
            [
                'p_title' => 'Fire Safety',
                'p_name' => 'Fire Safety',
                'slug'  => '',
                'p_description' => '',
                'p_quantity' => 1,
                'p_ammount' => 200,
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
