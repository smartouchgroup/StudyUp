<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $fillable = [
        'pays',
    ];
    public function scopeIdDescending($query){
        return $query->orderBy('created_at','desc');
    }
}
