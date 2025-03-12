<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpectedPartner extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id',
        'age_from',
        'age_to',
        'complexion',
        'height',
        'educational_qualification',
        'district',
        'marital_status',
        'financial_condition',
        'expected_qualities',
    ];
}
