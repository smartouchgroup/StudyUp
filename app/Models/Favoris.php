<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Favoris extends Model
{
protected $fillable = [
    'user_id','category_id'
];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function categories(){
        return $this->hasMany(Categories::class,'categorie_id');
    }
}
