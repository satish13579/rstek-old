<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SolutionCollection extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function ($solution) {
                return [
                    'id' => $solution->id,
                    'form_data' => $solution->form_data,
                ];
            })
        ];
    }
}





