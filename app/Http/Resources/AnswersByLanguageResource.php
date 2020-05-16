<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class AnswersByLanguageResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'language_id' => $this->language_id,
            'language' => $this->language,
            'numero_repuesta_dadas' => $this->numero_repuesta_dadas,
        ];
    }
}
