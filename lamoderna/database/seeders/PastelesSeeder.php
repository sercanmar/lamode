<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Pastel;
class PastelesSeeder extends Seeder
{
    
    public function run(): void
    {
        $faker = Faker::create();

        for($i=0;$i<10;$i++){
            $pastel = new Pastel();
        $pastel->nombre = 'El pastel de ' . $faker->firstNameFemale;
        $pastel->sabor = $faker->randomElement(['Chocolate','Vainilla','
            cheesecake']);
        $pastel->imagen="";
        $pastel->save();

        }
        
    }
}
