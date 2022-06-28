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
        'photo',
        'employee',
        'condition',
        'age_id'
    ];
    protected $casts = [
        'photo' => 'json',
        // 'clubs' => 'json',
    ];

    public function age()
    {
        return $this->belongsTo(Age::class, 'age_id')->withDefault();
    }

}
