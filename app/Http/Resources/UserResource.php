<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'financial' => [
                'total_money' => $this->financial ? $this->financial->total_money : "",
                'total_expenses' => $this->financial ? $this->financial->total_expenses : "",
            ]
        ];
    }
}
