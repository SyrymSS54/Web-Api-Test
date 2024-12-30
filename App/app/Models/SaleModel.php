<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderModel;

class SaleModel extends Model
{
    use HasFactory;
    protected $table = 'sale';

    public function order()
    {
        return $this->belongsTo(OrderModel::class,'order_id','id');
    }
}
