<?php

namespace Database\Seeders;

use App\Models\Baju;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bajuseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i=0; $i < 2 ; $i++) { 
            Baju::create([
                'nama_baju' => $faker->name,
                'harga_baju' => $faker->phoneNumber
            ]);
        }
    }
}
