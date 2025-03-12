<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermanentAddress extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id',
        'country_id',
        'state_id',
        'district_id',
        'city_id',
    ];
}
