<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicInformation extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'biodata_type',
        'marital_status',
        'birth_year',
        'height',
        'complexion',
        'weight',
        'blood_group',
        'nationality',
    ];

    public function occupationInformation()
    {
        return $this->hasOne(OccupationInformation::class, 'user_id', 'user_id');
    }
}
