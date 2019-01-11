<?php

use Illuminate\Database\Seeder;
use App\County;

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        County::create(['name' =>'Vukovarsko-Srijemska']);
    }
}
