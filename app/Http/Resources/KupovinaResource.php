<?php

namespace App\Http\Resources;

use App\Models\Klijent;
use App\Models\Putovanje;
use Illuminate\Http\Resources\Json\JsonResource;

class KupovinaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return 
        [
                'id'=>$this->resource->id,
                'datum'=>$this->resource->datum,
                'klijent'=>Klijent::find($this->resource->klijent_id),
                'putovanje'=>Putovanje::find($this->resource->putovanje_id),
        ];
    }
}
