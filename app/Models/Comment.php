<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'status'
    ];

    public function userComments() {
        return $this->belongsTo("App\Models\User");
    }

    public function blogComments() {
        return $this->belongsTo("App\Models\Blog");
    }
}
