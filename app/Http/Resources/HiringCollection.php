<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class HiringCollection extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function ($hiring) {
                return [
                    'id' => $hiring->id,
                    'form_data' => $hiring->form_data,
                ];
            })
        ];
    }
}





