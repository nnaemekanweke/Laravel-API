<?php

namespace App\Http\Resources\Api\v2;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
       return [

        'full_name' => $this->first_name .' '. $this->last_name,
        'phone' => $this->phone,
        'email' => $this->email,
        'country' => $this->country,
    ];

    }
}
