<?php

namespace App\Models;

use Dillingham\SoftDeletesParent\SoftDeletesParent;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use SoftDeletesParent;
}
