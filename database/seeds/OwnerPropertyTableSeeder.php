<?php

use Illuminate\Database\Seeder;
use App\OwnerProperty;
class OwnerPropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
OwnerProperty::create(['percentage' =>'1','owner_id' =>'1','property_id' =>'1']);

    }
}
