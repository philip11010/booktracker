<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'description',
        'cover_image',
        'page_count',
        'publication_year',
    ];

    public function reading()
    {
        return $this->hasOne(Reading::class);
    }

    public function review()
    {
        return $this->hasOne(Review::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'book_tags');
    }
}