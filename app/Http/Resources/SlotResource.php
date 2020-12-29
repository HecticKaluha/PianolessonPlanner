<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SlotResource extends JsonResource
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
            'id' => $this->id,
            'date' => $this->date->format('Y-m-d'),
            'startTime' => $this->startTime->format('H:i'),
            'endTime' => $this->endTime->format('H:i'),
            'category_id' => $this->category_id,
            'booked' => $this->name ? true : false,
        ];
    }
}
