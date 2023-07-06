<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', // Add 'title' field here
        'content',
        'tags',
        // Add other fillable fields as needed
    ];
}
