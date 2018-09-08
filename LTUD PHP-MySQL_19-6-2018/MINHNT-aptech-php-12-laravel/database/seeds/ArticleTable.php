<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ArticleTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach (range(1, 5) as $index){
            \App\Article::create([
               'title' => $faker->sentence($words = 10, $varWords = true),
                'content' => $faker->paragraph($sentences = 10, $varSentences = true),
                
            ]);
        }
    }
}
