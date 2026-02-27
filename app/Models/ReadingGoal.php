<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReadingGoal extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'goal_count',
    ];

    protected $casts = [
        'year' => 'integer',
        'goal_count' => 'integer',
    ];
}
