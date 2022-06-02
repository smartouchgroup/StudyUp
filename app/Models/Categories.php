<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'categorie', 'icone',
    ];
    public function scopeIdDescending($query){
        return $query->orderBy('created_at','desc');
    }
    public function book(){
        return $this->hasOne(Books::class,'categorie_id');
    }
    public function favoris(){
        return $this->belongsTo(favoris::class);
    }
}
