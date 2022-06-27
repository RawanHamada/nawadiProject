<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'city_name',
    ];
    public function boys() {
        return $this->hasMany(Boy::class);
    }
    /**
     * Get all of the clubs fty
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clubs()
    {
        return $this->hasMany(Club::class, 'city_id')->withDefault();
    }
}
