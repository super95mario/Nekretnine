<?php

use Illuminate\Database\Seeder;
use App\CadastralMunicipality;

class CadastralMunicipalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CadastralMunicipality::create(['name' =>'Tovarnik']);
    }
}
