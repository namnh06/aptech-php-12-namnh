<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\aticle;

class ariclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 5;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('articles')->insert([
                'title' => $faker->title,
                'content' => $faker->unique()->content,
            ]);
        }
    }
}
