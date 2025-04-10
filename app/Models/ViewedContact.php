<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewedContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'contact_id',
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');  // Adjust if contact table different
    }
}
