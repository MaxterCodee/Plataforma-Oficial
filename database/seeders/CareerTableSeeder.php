<?php

namespace Database\Seeders;

use App\Models\Career;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $career1 = new Career;
        $career1->name = "Sistemas Computacionales";
        $career1->image_url = "asdasdasd.com";
        $career1->save();

        $career2 = new Career;
        $career2->name = "Negocios";
        $career2->image_url = "werwwwr.com";
        $career2->save();
    }
    
}
