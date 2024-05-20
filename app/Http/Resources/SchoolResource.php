<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class SchoolResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

    return[
        'id'=>$this->id,
        'name'=>$this->name,
        'map'=>$this->map,
        'facebook'=>$this->facebook ?? '@',
        'logo'=> asset(Storage::url($this->logo)),
        'tel_1'=>$this->tel_1,
    ];

    }
}
