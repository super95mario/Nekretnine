<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
    $this->call(PropertyTypesTableSeeder::class);
    $this->call(CountiesTableSeeder::class);
    $this->call(MunicipalitiesTableSeeder::class);
    $this->call(CadastralMunicipalitiesTableSeeder::class);
    $this->call(TownsTableSeeder::class);
    $this->call(OwnersTableSeeder::class);
    $this->call(PropertiesTableSeeder::class);
    $this->call(OwnerPropertyTableSeeder::class);
    }
}
