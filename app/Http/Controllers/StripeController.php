<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe;
use Carbon\Carbon;

class StripeController extends Controller
{
    public function stripePost(Request $request)
    {
        
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => $request->amount*100,
            "currency" => "INR",
            "source" => $request->stripeToken,
            "description" => "This payment is tested purpose"
        ]);
        
        $products = json_decode($request->cartproducts);
        foreach($products as $key => $value) {
            Order::insert([
                "user_id" => Auth::user()->id,
                "product_id" => $key,
                "quantity" => $value,
                "status" => "Order Placed",
                'created_at' => Carbon::now(),
            ]);            
        }


        Session::flash('success', 'Payment successful!');
           
        return back();
    }


}
