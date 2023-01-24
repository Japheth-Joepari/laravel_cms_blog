<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\Category;
use App\Models\User;
use App\Models\Comment;


class Post extends Model
{
    use HasFactory;

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function tags() {
        return $this->hasMany(Tag::class);
    }

    public function categories () {
        return $this->belongsTo(category::class);
    }
}
