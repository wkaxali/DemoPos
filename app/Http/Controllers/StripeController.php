<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

class StripeController extends Controller
{
    public function postCheckout(Request $request) {


        
      
      
        
        Stripe::setApiKey('sk_test_51Hx51vDF9fotRLlU3yPRSDi1udE8vfZEw0JeqeommznSNcj56IWHjGpQMhR2mvgZPvHkvnVLk0wvuNo40AR2DtlE00PIw1QQez');
                           
        dd($token = $request->stripeToken);
        try {
         
            $payment_intent = \Stripe\PaymentIntent::create([
                'description' => 'Stripe Test Payment',
                'amount' => 1500,
                'currency' => 'usd',
                'description' => 'Payment From Codehunger',
                'payment_method_types' => ['card'],
            ]);
            
    
        }
         catch (Exception $e) {
            dd( $e->getMessage());
        }

       // Session::forget('cart');

        return "successfull";
    }
}
