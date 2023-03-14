<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'calories',
        'time',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_exercise');
    }
}
