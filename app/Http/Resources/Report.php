<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Report extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'sellingprice' => $this->sellingprice,
            'productcost' => $this->productcost,
            'orders' => $this->orders,
            'roas' => $this->roas,
            'delivery' => $this->delivery,
            'salevalue' => $this->salevalue,
            'cpp' => $this->cpp,
            'delivered' => $this->delivered,
            'profitperdelivered' => $this->profitperdelivered,
            'totalprofit' => $this->totalprofit,
            'remittance' => $this->remittance,
            'adcost' => $this->adcost,
            'product' => $this->product,
            'gst' => $this->gst,
            'packaging' => $this->packaging,
            'shipping' => $this->shipping,
            'totalexpense' => $this->totalexpense,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}