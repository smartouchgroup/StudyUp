<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Books;

class Languages extends Model
{
    protected $fillable = [
        'langue',
    ];
    public function scopeIdDescending($query){
        return $query->orderBy('created_at','desc');
    }
    public function book(){
        return $this->hasOne(Books::class);
    }
}
