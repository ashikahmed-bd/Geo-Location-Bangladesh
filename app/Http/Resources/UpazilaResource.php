<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UpazilaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => ucfirst($this->name),
            'bn_name' => $this->bn_name,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'url' => strtolower($this->url),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'district' => DistrictResource::make($this->whenLoaded('district')),
            'unions' => DistrictResource::collection($this->whenLoaded('unions')),
        ];
    }
}
