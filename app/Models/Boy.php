<?php

namespace App\Models;
use App\Models\Age;
use App\Models\City;
use App\Models\Club;
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

    /**
     * Get the city that owns the Boy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    /**
     * Get the club that owns the Boy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function club()
    {
        return $this->belongsTo(Club::class, 'club_id');
    }

    public static function getBoy(){
        $records =Boy::all()->toArray();
        return $records;
    }

}
