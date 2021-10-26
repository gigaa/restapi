<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                'firstname' => $faker->name,
                'lastname' => $faker->name,
                'gender' =>  $faker->name,
                'age' => $faker->numberBetween(25, 50),
            ]);
        }
        // CustomersTableSeeder::class;
        // \App\Models\Customer::factory(100)->create();


        // \App\Models\User::factory(10)->create();
    }
}