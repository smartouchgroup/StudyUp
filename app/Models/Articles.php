<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = [
        'titre','color', 'contenu', 'photo','last_article'
    ];
}
