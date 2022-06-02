<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Editors extends Model
{
    protected $fillable = [
        'nom', 'icone'
    ];
    public function scopeIdDescending($query){
        return $query->orderBy('created_at','desc');
    }
}
