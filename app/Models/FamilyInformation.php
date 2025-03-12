<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyInformation extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id',
        'father_name',
        'father_alive',
        'father_profession',
        'mother_name',
        'mother_alive',
        'mother_profession',
        'brothers_count',
        'sisters_count',
        'financial_status',
        'financial_condition',
        'religious_condition',
    ];
}
