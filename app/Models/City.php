<?php

namespace App\Models;

use App\Models\Boy;
use App\Models\Girl;
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
     * Get all of the girls for the City
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function girls()
    {
        return $this->hasMany(Girl::class);
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
