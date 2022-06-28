<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Age extends Model
{
    use HasFactory;
    protected $fillable = [
        'age_group',
    ];

    public function boys()
    {
        return $this->hasMany(Boy::class, 'age_id')->withDefault();
    }
}
