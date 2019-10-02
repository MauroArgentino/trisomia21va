<?php

use App\Model\Admin\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 300)->create()->each(function (Post $post){
        	$post->tags()->attach([
        		rand(1, 5),
        		rand(6, 15),
        		rand(16, 20)
        	]);
        });
    }
}
