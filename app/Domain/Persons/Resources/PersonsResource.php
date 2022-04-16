<?php

namespace App\Domain\Persons\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonsResource extends JsonResource
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
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'fathersname' => $this->fathersname,
            'phone' => $this->phone,
            'email' => $this->email,
            'location' => $this->location,
            'image' => $this->image,
            'activity' => $this->activity,

            'working_days' => $this->workingDays,
        ];
    }
}
