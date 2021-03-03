<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class deliverLetterPrintController extends Controller
{
    public function deliveryLetter($id){
        $newHTML= '';

        PDF::SetTitle('Delivery Letter');
        PDF::AddPage();
        PDF::writeHTML($newHTML, true, false, true, false, '');
    
        PDF::Output('deliveryLetter.pdf');






    }

        }
