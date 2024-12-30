<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StockRequest;
use Illuminate\Http\Request;
use App\Models\StockModel;

class StocksController extends Controller
{
    public function get_stocks(StockRequest $request)
    {
        $credentials = $request->safe()->only(['dateFrom','limit']);

        $dateFrom = $credentials['dateFrom'];
        $limit = $credentials['limit'];

        $result = StockModel::whereDate('created_at', '>', $dateFrom)->take($limit)->paginate(5);

        return response()->json($result);
    }
}
