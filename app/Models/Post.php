<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // app/Models/Post.php
    protected $fillable = ['title', 'body'];
}
