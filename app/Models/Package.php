<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    // Optional: Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'packages'; // This is optional if your table name is 'packages'

    // Specify fillable fields if needed
    protected $fillable = [
        'name',
        'price',
        'connections',
        'offer_details',
        'discount',
        'months', // Missing field added
        'feature_1', // Missing field added
        'feature_2', // Missing field added
        'feature_3', // Missing field added
        'feature_4', // Missing field added
        'notification_message',
        'send_sms',
    ];
}