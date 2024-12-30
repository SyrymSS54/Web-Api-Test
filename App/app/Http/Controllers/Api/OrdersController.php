<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use App\Models\OrderModel;

class OrdersController extends Controller
{
    public function get_orders(OrderRequest $request)
    {
        $credentials = $request->safe()->only(['dateFrom','limit']);

        // dd($credentials);

        $dateFrom = $credentials['dateFrom'];
        $limit = $credentials['limit'];

        // dd(OrderModel::whereDate('created_at', '>', $dateFrom)->first()->description);
        $result = OrderModel::whereDate('created_at', '>', $dateFrom)->with('description')->take($limit)->paginate(5);

        return response()->json($result);
    }
}
