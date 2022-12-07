<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ShipmentTransformer extends JsonResource
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
            'ID' => $this->id,
            'Shipment' => $this->number,
            'Type' => $this->type,
            'DateCreated' => $this->date_created,
            'LastUpdate' => $this->last_update,
            'Status' => $this->status,
            'UpdatedBy' => $this->updated_by,
        ];
    }
}
