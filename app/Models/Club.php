<?php

namespace App\Models;

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


     // public function cities() {
    //     return $this->hasMany(Boy::class);
    // }


}
