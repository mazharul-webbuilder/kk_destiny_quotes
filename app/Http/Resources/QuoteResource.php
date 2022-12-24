<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuoteResource extends JsonResource
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
          'quoteId' => $this->id,
            'authorID' => $this->author->id,
            'quoteBody' => $this->quote,
            'publishedDate' => $this->created_at
        ];
    }
}
