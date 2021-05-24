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

    $dateRaw = Carbon::now()->toDateString();
    $date =  Carbon::createFromFormat('Y-m-d', $dateRaw)->format('d-F-Y');
        $data=DB:: select('select * from vw_daily_stock_sales where Date ="2021-2-4"');
        return $data;
      }

    
}
