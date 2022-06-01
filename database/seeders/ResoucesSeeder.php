<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class ResoucesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $data = [];

        for ($i = 1; $i < 10; $i++){
            $data[] = [
                'name' => $faker->realText(10),
            ];
        }
        \DB::table('resources')->insert($data);
    }
}
