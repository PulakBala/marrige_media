<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresentAddress extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id',
        'country_id',
        'state_id',
        'district_id',
        'city_id',
        'same_as_permanent',
        'grew_up',
    ];


    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function logError($message)
    {
        \Log::error($message);
    }
}
