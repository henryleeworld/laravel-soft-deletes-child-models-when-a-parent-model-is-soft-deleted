<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;

class PostsController extends Controller
{
    public function show() 
    {
        echo __('Total number of posts so far:') . Post::count() . PHP_EOL;
        echo __('The current total number of posts (including soft-deleted by the author):') . Post::withParentTrashed()->count() . PHP_EOL;
        echo __('The current total number of posts (only the author has been soft-deleted):') . Post::onlyParentTrashed()->count() . PHP_EOL;
        $authorId = 2;
        $author = Author::findOrFail($authorId);
        echo __('Soft delete author ID') . ' ' . $authorId . PHP_EOL;
        $author->delete();
        echo __('Total number of posts so far:') . Post::count() . PHP_EOL;
        echo __('The current total number of posts (including soft-deleted by the author):') . Post::withParentTrashed()->count() . PHP_EOL;
        echo __('The current total number of posts (only the author has been soft-deleted):') . Post::onlyParentTrashed()->count() . PHP_EOL;
        echo __('Restore author ID') . ' ' . $authorId . PHP_EOL;
        $author->restore();
        echo __('Total number of posts so far:') . Post::count() . PHP_EOL;
        echo __('The current total number of posts (including soft-deleted by the author):') . Post::withParentTrashed()->count() . PHP_EOL;
        echo __('The current total number of posts (only the author has been soft-deleted):') . Post::onlyParentTrashed()->count() . PHP_EOL;
    }
}
