<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //fillable
    //guarded

    protected $fillable = [
        'title',
        'description',
        'status',
        'publish_at',
        'category_id',
        'user_id'
    ];

    // protected $guarded = [];
}
