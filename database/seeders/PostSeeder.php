<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title'             => '常把「天才」二字掛在嘴邊',
                'author_id'         => 1,
                'parent_deleted_at' => now(),
            ],
            [
                'title'             => '個性外向粗線條又單純',
                'author_id'         => 1,
                'parent_deleted_at' => null,
            ],
            [
                'title'             => '好勝心強，在比賽中比誰都認真。',
                'author_id'         => 2,
                'parent_deleted_at' => null,
            ],
        ];
        Post::insert($posts);
    }
}
