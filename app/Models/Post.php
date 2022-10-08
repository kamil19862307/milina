<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
    'user_id',
    'title', 'content',
    'active', 'published_at',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    protected $dates = [
        'published_at',
    ];
}
