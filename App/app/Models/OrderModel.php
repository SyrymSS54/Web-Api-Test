<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;
    protected $table = 'order';

    public function description()
    {
        return $this->hasMany(DescriptionModel::class,'order_id','id');
    }
}
