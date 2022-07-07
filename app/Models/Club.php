<?php

namespace App\Models;

use App\Models\Boy;
use App\Models\Girl;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $fillable = [
        'city_id',
        'club_name',
    ];


    /**
     * Get the cities that owns the Club
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cities()
    {
        return $this->belongsTo(City::class, 'city_id')->withDefault();
    }

    /**
     * Get all of the boys fub
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function boys()
    {
        return $this->hasMany(Boy::class);
    }

    /**
     * Get all of the girls for the Club
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function girls()
    {
        return $this->hasMany(Girl::class);
    }

     // public function cities() {
    //     return $this->hasMany(Boy::class);
    // }


}
