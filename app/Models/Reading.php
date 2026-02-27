<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'status',
        'rating',
        'started_at',
        'finished_at',
    ];

    protected $casts = [
        'rating' => 'decimal:1',
        'started_at' => 'date',
        'finished_at' => 'date',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}