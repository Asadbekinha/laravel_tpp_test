<?php

namespace App\Domain\Indicators\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IndicatorsResource extends JsonResource
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
            'title' => $this->title,
            'amount' => $this->amount,
            'unit' => $this->unit,
            'icon_class' => $this->icon_class
        ];
    }
}
