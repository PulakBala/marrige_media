<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPackage extends Model
{
    //
    use HasFactory;

    // টেবিলের নাম
    protected $table = 'user_packages';

    // মডেল কনস্ট্রেইন্ট (যে ফিল্ডগুলো mass assignable হবে)
    protected $fillable = [
        'user_id',
        'package_id',
        'used_connections',
        'payment_status',
        'expiry_date',
        'is_active',
        'subscribed_at',
        'transaction_id',
        'notes'
    ];

    // ইউজার এবং প্যাকেজের সম্পর্ক
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

}
