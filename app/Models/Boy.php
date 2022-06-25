<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boy extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'civil_record',
        'first_phone',
        'second_phone',
        'class',
        'school',
        'neighborhood',
        'age',
        'move',
        'gallery',
    ];
    protected $casts = [
        'gallery' => 'json',
        // 'clubs' => 'json',
    ];
}