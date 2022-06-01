<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class ArticlesSeeder extends Seeder
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
        $categoriesIDs = \DB::table('categories')->pluck('id');
        $resourcesIDs= \DB::table('resources')->pluck('id');

        for ($i = 1; $i < 10; $i++){
            $data[] = [
                'name' => $faker->realText(10),
                'content' => $faker->realText(50),
                'resource_id' => $resourceIds->random(),
                'category_id' => $categoryIds->random(),
            ];
        }
        \DB::table('articles')->insert($data);
    }
}
