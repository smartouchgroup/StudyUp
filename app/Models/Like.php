<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
         'book_id','like_number'
    ];
    public function books(){
        return $this->belongsTo(Books::class,'book_id');
    }
}
