<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticleSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach(range(0,5) as $index){
            Article::create([
                'title' => $faker->sentence($words = 10, $varWords = true),
                'content' => $faker->paragraph($sentences = 10, $varSentences = true),
            ]);
        }
    }
}
