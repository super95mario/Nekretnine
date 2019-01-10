<?php

use Illuminate\Database\Seeder;
use App\Owner;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
Owner::create(['oib' =>'15761853761','name' =>'Marko','surname' =>'Markovic','username' =>'user','password' =>'user','address' =>'rudzera boskovica 26','town_id' =>'1']);

    }
}
