<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    use SoftDeletes;

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
