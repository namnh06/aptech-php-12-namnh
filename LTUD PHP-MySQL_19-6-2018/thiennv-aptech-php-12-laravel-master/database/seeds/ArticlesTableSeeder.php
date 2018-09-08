<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,5) as $value) {
            Article::create([
                'title' => $faker->name,
                'content' => $faker->word,
            ]);
        }
    }
}
