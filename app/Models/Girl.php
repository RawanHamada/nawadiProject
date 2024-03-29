<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Girl extends Model
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
        'photo',
        'employee',
        'condition',
    ];
    protected $casts = [
        'photo' => 'json',
    ];
}
