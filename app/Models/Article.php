<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        "judul",
        "konten",
        "type",
        "thumbnail_url",
    ];
    // protected $guarded = [];

}