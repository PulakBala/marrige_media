<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id',
        'groom_name',
        'guardian_mobile',
        'relationship_with_guardian',
        'guardian_email',
    ];
}
