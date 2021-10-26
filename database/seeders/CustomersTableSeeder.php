<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $factory->define(App\Customer::class, function (Faker $faker) {
        //     return [
        //         "firstname" => $faker->name(),
        //         "lastname" => $faker->safeEmail,
        //         'gender' => $faker->randomElement(["male", "female"]),
        //         'age' => $faker->numberBetween(25, 50),
        //     ];
        // });
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('customers')->insert([
                'firstname' => $faker->name,
                'lastname' => $faker->name,
                'gender' =>  $faker->name,
                'age' => $faker->numberBetween(25, 50),
            ]);
        }
        // Customer::create([
        //     "firstname" => $faker->name(),
        //     "lastname" => $faker->safeEmail,
        //     'gender' => $faker->randomElement(["male", "female"]),
        //     'age' => $faker->numberBetween(25, 50),
        // ]);
  

 
    }
}