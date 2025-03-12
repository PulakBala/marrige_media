<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id',
        'method',
        'higher_qualification',
        'other_qualification',
        'islamic_title',
        'passing_year',
        'group_name',
        'result',
    ];
}
