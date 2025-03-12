<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id',
        'clothes',
        'beard',
        'prayer',
        'mahram',
        'quran_recitation',
        'fiqh',
        'media',
        'diseases',
        'deen_work',
        'shrine_beliefs',
        'islamic_books',
        'islamic_scholars',
        'category',
        'hobbies',
        'mobile',
        'photo',
    ];
}
