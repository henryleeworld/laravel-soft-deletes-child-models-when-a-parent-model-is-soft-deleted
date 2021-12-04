<?php

namespace App\Models;

use Dillingham\SoftDeletesParent\SoftDeletesParent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes, SoftDeletesParent;

    protected static $softDeletesParent = Author::class;
}
