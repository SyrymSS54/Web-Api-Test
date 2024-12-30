<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\IncomeRequest;
use Illuminate\Http\Request;
use App\Models\IncomeModel;
use App\Models\StockModel;

class IncomeController extends Controller
{
    public function get_income(IncomeRequest $request)
    {
        $credentials = $request->safe()->only(['dateFrom','dateTo','limit']);

        $dateFrom = $credentials['dateFrom'];
        $dateTo = $credentials['dateTo'];
        $limit = $credentials['limit'];

        $result = StockModel::whereDate('created_at', '>', $dateFrom)->whereDate('created_at' ,'<', $dateTo)->take($limit)->paginate(5);

        return response()->json($result);
    }
}
