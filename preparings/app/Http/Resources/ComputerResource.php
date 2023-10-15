<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ComputerResource extends JsonResource
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
            'specs' => $this->specs,
            'cabinet_id' => $this->cabinet_id,
            'cabinet' => [
                'id' => $this->cabinet->id,
                'cabinet_number' => $this->cabinet->cabinet_number,
                'corpse' => [
                    'id' => $this->cabinet->corpse->id,
                    'corpse_number' => $this->cabinet->corpse->corpse_number
                ]
            ]
        ];
    }
}
