<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BiblioResource extends JsonResource
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
            $this->books,
            $this->books->category,
            $this->books->editor,
            $this->books->author,
            $this->books->langues,
            $this->books->countrie
        ]);
    }
}
