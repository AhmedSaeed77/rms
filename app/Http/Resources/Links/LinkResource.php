<?php

namespace App\Http\Resources\Links;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LinkResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'description'=>$this->description,
            'link'=>$this->link,
            'by'=>$this->creator->name,
            'created_at'=>$this->created_at,
        ];
    }
}
