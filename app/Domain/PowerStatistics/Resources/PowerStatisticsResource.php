<?php

namespace App\Domain\PowerStatistics\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PowerStatisticsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'region_id' => $this->region_id,
            'quantity' => $this->quantity
        ];
    }
}
