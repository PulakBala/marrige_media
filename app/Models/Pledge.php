<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pledge extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id',
        'parents_know',
        'testify_truth',
        'agree',
    ];
}
