<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class PostsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10; $i++) { 
            $newpost = new Post();
            $newpost->title = $faker->sentence(3);
            $newpost->content = $faker->text(500);
            $newpost->slug = Str::slug($newpost->title);
            $newpost->type_id = $faker->numberBetween(1, 6);
            $newpost->save();
        }
        
    }
}
