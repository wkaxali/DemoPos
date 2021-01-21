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
        $data=DB:: select('select * from vw_daily_stock_sales where Date ='.$date);
        return $data;
      }

    
}
