<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortlistedUser extends Model
{
    use HasFactory;

    // এই টেবিলের জন্য কোন কোন ফিল্ডগুলো মডেল দ্বারা ভরাট করা যাবে তা উল্লেখ করুন
    protected $fillable = [
        'user_id',
        'shortlister_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function shortlister()
    {
        return $this->belongsTo(User::class, 'shortlister_id');
    }

}