<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Carbon\Carbon;

class AISessionController extends Controller
{
    public static function getDashboardInformations($key,$Value){


    }

    
    public static function dailySaleAmount(){

        $date = Carbon::now()->toDateString();
        $re=DB:: table('vw_daily_stock_sales')->where('Date', '=', '2021-1-29')->first();
        session(['dailySale' => $re->DailySale]);
      }

    
}
