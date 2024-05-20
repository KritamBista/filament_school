<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
        return[
            'id'=>$this->id,
            'tittle'=>$this->tittle,
            'date'=>$this->date,
            'description'=>$this->description,
            'image'=>asset(Storage::url($this->image)),
            'tags'=>$this->tags,

        ]
    }
}
