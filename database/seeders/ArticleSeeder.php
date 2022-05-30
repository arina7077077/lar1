<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
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

        for ($i = 1; $i < 10; $i++) {
            $data[] = [
                'title' => $faker->realText(50),
                'content' => $faker->text(400),
                'is_active' => $faker->boolean,
            ];
        }

        \DB::table('articles')->insert($data);
    }
}
