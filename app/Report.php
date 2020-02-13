<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['title', 'sellingprice', 'productcost', 'orders','roas','delivery','salevalue','cpp','delivered','profitperdelivered','totalprofit','remittance','adcost','product','gst','packaging','shipping','totalexpense'];
}