<?php

use Illuminate\Database\Seeder;
use App\Models\News\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Post::class,50)->create();
    }
}
