<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'date_of_birth',
        'address',
        'email',
        'phone',
        'zip_code',
        'facebook',
        'twitter' ,
        'github',
        'linkedin',
        'photo',
        'logo',
        'user_id',
    ];

    public function user()
     {
         return $this->belongsTo(User::class);
     }
}
