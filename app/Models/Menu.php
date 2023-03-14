<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public const TYPES = [
        'morning',
        'lunch',
        'dinner',
        'snack',
    ];

    protected $fillable = [
        'name',
        'calories',
        'type',
    ];
}
