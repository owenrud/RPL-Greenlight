<?php

namespace Database\Seeders;
use DB;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RuteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
        for($i=0;$i<40;$i++){
        $faker = Faker::create('id_ID');
        DB::table('rute')->insert([
            'id_bus'=> $faker->numberBetween(1,53),
            'titik_awal' => $faker->street,
            'titik_sampai' => $faker->street,
            'jam_berangkat' => $faker->time('H:i'),
            'jam_sampai' => $faker->time('H:i'),
        ]);}
    }
}
