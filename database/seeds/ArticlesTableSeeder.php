<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Article;
use App\Author;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for($i = 0; $i < 30; $i++ ) {

            // (1) creo l'author
            $author = new Author();
            $author->picture = $faker->imageUrl(640, 482, 'posts', true);
            $author->author = $faker->words(2,true);
            $author->email = $faker->email();
        }
    }
}
