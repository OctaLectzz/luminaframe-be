<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CollectionPhotoResource extends JsonResource
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
            'user_id' => $this->user_id,
            'photo_id' => $this->photo_id,
            'collection_id' => $this->collection_id,
            'user' => new UserResource($this->user),
            'photo' => new PhotoResource($this->photo),
            'collection' => new CollectionResource($this->collection),
        ];
    }
}
