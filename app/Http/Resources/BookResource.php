<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray([
            'categorie'=>$this->category->categorie,
            'editeur' => $this->editor->nom,
            'auteur' => $this->author->nom,
            'langue' => $this->langues->langue,
            'pays' => $this->countrie->pays
        ]);
    }
}
