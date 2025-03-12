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
}
