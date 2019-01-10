<?php

use Illuminate\Database\Seeder;
use App\Town;

class TownsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Town::create(['name' =>'Tovarnik','municipality_id' =>'1','cadastral_municipality_id' =>'1']);
    }
}
