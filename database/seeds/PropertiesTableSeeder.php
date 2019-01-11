<?php

use Illuminate\Database\Seeder;
use App\Property;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property::create(['area' =>'25.4','cadastral_number' =>'1523','property_type_id' =>1,'cadastral_municipality_id' =>1]);
        
    }
}
