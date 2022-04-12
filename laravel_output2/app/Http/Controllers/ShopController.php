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
        $use = $request->use;
        //Log::debug(dump($request));

        $query = Shop::query();

        if(isset($keyword_name)){
            $query->where('shop_name','like','%'.$keyword_name.'%');
        }

        if(isset($keyword_station)){
            $query->where('nearest_station','like','%'.$keyword_station.'%');
        }

        if(isset($keyword_budget)){
            if(isset($keyword_equality)){
                if($keyword_equality == 1){
                    $query->where('budget_min','>=',$keyword_budget);
                }else if($keyword_equality == 2){
                    $query->where('budget_max','<=',$keyword_budget);
                }
            }
        }

        DB::enableQueryLog();

        $shops = $query->get();

        Log::debug(DB::getQueryLog());

        return view('show',[
            'shops'=>$shops
        ]);

    }

}
