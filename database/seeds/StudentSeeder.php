<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 30; $i++){
        DB::table('students')->insert([
        	'nama' => $faker->name,
        	'umur' => $faker->numberBetween(10,20),
        	'alamat' => $faker->address,
        	
            ]);
        }
    }
}
