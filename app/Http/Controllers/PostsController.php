<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;

class PostsController extends Controller
{
    public function show() 
    {
        echo '目前貼文總筆數：' . Post::count() . PHP_EOL;
        echo '目前貼文（含作者已軟刪除）總筆數：' . Post::withParentTrashed()->count() . PHP_EOL;
        echo '目前貼文（僅作者已軟刪除）總筆數：' . Post::onlyParentTrashed()->count() . PHP_EOL;
        $authorId = 2;
        $author = Author::findOrFail($authorId);
        echo '軟刪除作者代號' . ' ' . $authorId . PHP_EOL;
        $author->delete();
        echo '目前貼文總筆數：' . Post::count() . PHP_EOL;
        echo '目前貼文（含作者已軟刪除）總筆數：' . Post::withParentTrashed()->count() . PHP_EOL;
        echo '目前貼文（僅作者已軟刪除）總筆數：' . Post::onlyParentTrashed()->count() . PHP_EOL;
        echo '恢復作者代號' . ' ' . $authorId . PHP_EOL;
        $author->restore();
        echo '目前貼文總筆數：' . Post::count() . PHP_EOL;
        echo '目前貼文（含作者已軟刪除）總筆數：' . Post::withParentTrashed()->count() . PHP_EOL;
        echo '目前貼文（僅作者已軟刪除）總筆數：' . Post::onlyParentTrashed()->count() . PHP_EOL;
    }
}
