<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Books;

class Authors extends Model
{
    protected $fillable = [
        'nom','prenom'
    ];
    public function scopeIdDescending($query){
        return $query->orderBy('created_at','desc');
    }
    public function books(){
        return $this->hasMany(Books::class);
    }
}
