<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class UnsolicitedQuestionsResource extends Resource
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
            'numero_preguntas_sin_ser_preguntas' => $this->resource
        ];
    }
}
