<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'category',
        'image_url',
        'status'
    ];

    public function userBlog() {
        return $this->belongsTo("App\Models\User");
    }

    public function commentBlog() {
        return $this->hasMany(Comment::class);
    }
}
