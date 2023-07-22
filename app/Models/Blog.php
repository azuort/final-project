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
        'b_created_at',
        'b_updated_at',
        'image_url',
        'status',
        'user_id'
    ];

    public function userBlog() {
        return $this->belongsTo("App\Models\User");
    }

    public function commentBlog() {
        return $this->hasMany(Comment::class);
    }
}
