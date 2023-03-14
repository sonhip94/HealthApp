<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beauty extends Model
{
    use HasFactory;

    public const TYPES = [
        'column',
        'diet',
        'beauty',
        'health',
    ];

    protected $fillable = [
        'name',
        'type',
    ];
}
