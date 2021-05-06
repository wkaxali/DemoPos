<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class productCategoryController extends Controller
{
   Public Static function addCategory(Request $request, $CO ){
    $category = $CO;

    $re = DB::table('tblpcategory')
        ->insert([
          
          'CategoryName'=>$category
          ]);

          return $category;
   }


   Public Static function getCategory(){
       $data = DB::select('select * from tblpcategory');
       return $data;
   }


   Public Static function editCategory(Request $request, $CO){
    $ata=json_decode($CO);
    $CID = $ata[0];
    $CategoryName = $ata[1];

    $re = DB::table('tblpcategory')
    ->where('PCID', $CID)
    ->update([
      'CategoryName'=>$CategoryName,
      ]);

      return $re;
   }
}
