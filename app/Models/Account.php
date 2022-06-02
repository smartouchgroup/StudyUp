<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['user_id', 'amount','phone','otp_code'];

    public function amount()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
