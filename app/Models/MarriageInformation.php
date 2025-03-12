<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarriageInformation extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id',
        'guardians_agree',
        'keep_veil',
        'allow_study',
        'allow_job',
        'living_arrangement',
        'expect_gift',
        'marriage_thoughts',
    ];
}
