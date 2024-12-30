<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaleRequest;
use Illuminate\Http\Request;
use App\Models\SaleModel;

class SalesController extends Controller
{
    public function get_sales(SaleRequest $request)
    {
        $credentials = $request->safe()->only(['dateFrom','limit']);

        $dateFrom = $credentials['dateFrom'];
        $limit = $credentials['limit'];

        $result = SaleModel::whereDate('created_at', '>', $dateFrom)->take($limit)->paginate(5);

        return response()->json($result);
    }
}
