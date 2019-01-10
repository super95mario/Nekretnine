<?php

use Illuminate\Database\Seeder;
use App\Municipality;
class MunicipalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Municipality::create(['name' =>'Tovarnik','county_id' =>1]);
    }
}
