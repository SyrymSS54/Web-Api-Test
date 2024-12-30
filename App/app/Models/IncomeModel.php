<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeModel extends Model
{
    use HasFactory;
    protected $table = 'income';

    public function order()
    {
        return $this->belongsTo(OrderModel::class,'order_id','id');
    }
}
