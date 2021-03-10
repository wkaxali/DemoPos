<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class assesoriesController extends Controller
{
    






public static function AddAcessories(Request $request, $CO){
    $ata=json_decode($CO);
    $toolkit = $ata[1];
    $sparetyre = $ata[2];
    $orignalkeys = $ata[3];
    $warrentybook = $ata[4];
    $invoicenumber = $ata[0];
  
    $re = DB::table('tbl_invoice_assesories')
    ->insert([
     'ToolKit'=>$toolkit,
      'SpareTyre'=>$sparetyre,
      'OrignalKeys'=>$orignalkeys,
      'WarrantyBook'=>$warrentybook ,
      'InvoiceNumber'=>$invoicenumber
      ]);
  
      return $invoicenumber;
    }
}
