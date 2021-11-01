<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlaceResource extends JsonResource
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
            'Id' => $this->id,
            'Title' => $this->title,
            'TheaterName' => $this->theater_name,
            'Description' => $this->description,
            'RoomNo' => $this->room_no,
            'Rating' => $this->rating,
            'StartTime' => $this->start_time,
            'EndTime' => $this->end_time,
            'CreatedAt' => $this->created_at,
            'UpdatedAt' => $this->updated_at,
        ];
    }
}
