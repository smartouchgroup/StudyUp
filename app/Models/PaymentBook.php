<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentBook extends Model
{
    protected $fillable = [
        'user_id', 'book_id','price'
    ];
    public function books(){
        return $this->belongsTo(Books::class,'book_id');
    }
    public function author(){
        return $this->belongsTo(Authors::class,'auteur_id');
    }
    public function langues(){
        return $this->belongsTo(Languages::class, 'langue_id');
    }
    public function category(){
        return $this->belongsTo(Categories::class,'categorie_id');
    }
    public function editor(){
        return $this->belongsTo(Editors::class,'editeur_id');
    }
    public function countrie(){
        return $this->belongsTo(Countries::class,'pays_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
