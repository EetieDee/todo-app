<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'completed', 'start_date', 'end_date'];

    protected $casts = [
        'completed' => 'boolean',
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}
