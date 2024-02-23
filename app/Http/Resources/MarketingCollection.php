<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MarketingCollection extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function ($marketing) {
                return [
                    'id' => $marketing->id,
                    'form_data' => $marketing->form_data,
                ];
            })
        ];
    }
}





