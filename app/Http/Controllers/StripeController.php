<?php

namespace App\Http\Controllers;
use Session;
use Stripe;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function stripe()
    {
        return view('Frontend.stripe');
    }

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100*100,
                "currency" => "INR",
                "source" => $request->stripeToken,
                "description" => "This payment is testing purpose",
        ]);
   
        Session::flash('success', 'Payment Successfull!');
           
        return back();
    }
}