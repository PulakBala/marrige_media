<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OccupationInformation extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id',
        'occupation',
        'description',
        'monthly_income',
    ];
}
