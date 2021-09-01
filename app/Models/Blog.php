<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'excerpt', 'content', 'meta_title', 'meta_descr', 'meta_key', 'category', 'image'];
}
