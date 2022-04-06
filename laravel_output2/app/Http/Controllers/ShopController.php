<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use Illuminate\Support\Facades\DB;

use App\Models\Shop;

class ShopController extends Controller
{
    public function search(Request $request){
        $keyword_name = $request->shop_name;
        $keyword_station = $request->nearest_station;
        $keyword_budget = $request->budget;
        $keyword_equality = $request->equality;
        $keyword_use = $request->use;
        $keyword_food = $request->food;

        $query = Shop::query();

        if(isset($keyword_name)){
            $query->where('shop_name','like','%'.$keyword_name.'%');
        }

        DB::enableQueryLog();

        $shops = $query->orderBy('shop_id','asc')->paginate(15);

        Log::debug(DB::getQueryLog());

        return view('show',[
            'shops'=>$shops
        ]);
    }

}
