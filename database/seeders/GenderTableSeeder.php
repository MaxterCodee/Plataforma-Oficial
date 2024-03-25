<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $gender1 = new Gender;
        $gender1->name = "Masculino";
        $gender1->save();

        $gender2 = new Gender;
        $gender2->name = "Femenino";
        $gender2->save();
    }
}
