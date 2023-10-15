<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CabinetResource extends JsonResource
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
            'cabinet_number' => $this->cabinet_number,
            'corpse_id' => $this->corpse_id,
            'corpse' => [
                'id' => $this->corpse->id,
                'corpse_number' => $this->corpse->corpse_number
            ]
        ];
    }
}
