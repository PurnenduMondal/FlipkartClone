<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{

    public function ViewAll()
    {

        $cart_items_quentity = json_decode(Cookie::get('cart_items_quentity'), true);
        $total_actual_price = 0;
        $total_selling_price = 0;
        $cartItemIds = $cart_items_quentity ? array_keys($cart_items_quentity) : array();

        $cartProducts = Product::whereIn('id', $cartItemIds)->get();
        $productImages = ProductImage::whereIn('product_id', $cartItemIds)->get();
        foreach ($cartProducts as $product) {

            $total_actual_price += $product->actual_price * $cart_items_quentity[$product->id];
            $total_selling_price += $product->selling_price * $cart_items_quentity[$product->id];
        }
        
        $total_discount = $total_actual_price - $total_selling_price;

        return view('Cart', compact('cartProducts', 'productImages', 'cart_items_quentity', 'total_actual_price', 'total_selling_price', 'total_discount'));
    }


    public function Insert($product_id)
    {
        $minutes = 60 * 24;
        $cart_items_quentity = json_decode(Cookie::get('cart_items_quentity'), true);

        if (!isset($cart_items_quentity[$product_id])) {
            
            $cart_items_quentity[$product_id] = 1;
        }
        Cookie::queue('cart_items_quentity', json_encode($cart_items_quentity), $minutes);

        return redirect()->route('display_cart');
    }


    public function Update(Request $request, $product_id)
    {
        $product = Product::find($product_id);
        $quantity = $request->input('quantity');
        $increase = $request->boolean('increase');

        if ($product->quantity != $quantity && $increase) {
            $quantity++;
        }
        if ($quantity != 1 && !$increase) {
            $quantity--;
        }

        $actual_price = $product->actual_price * $quantity;
        $selling_price = $product->selling_price * $quantity;

        $minutes = 60 * 24;
        $cart_items_quentity = json_decode(Cookie::get('cart_items_quentity'), true);
        $cart_items_quentity[$product_id] = $quantity;

        $cartProducts = Product::whereIn('id', array_keys($cart_items_quentity))->get();
        $total_actual_price = 0;
        $total_selling_price = 0;

        foreach ($cartProducts as $product) {

            $total_actual_price += $product->actual_price * $cart_items_quentity[$product->id];
            $total_selling_price += $product->selling_price * $cart_items_quentity[$product->id];
        }
        $total_discount = $total_actual_price - $total_selling_price;

        Cookie::queue('cart_items_quentity', json_encode($cart_items_quentity), $minutes);
        $JsonResponse = compact('quantity', 'actual_price', 'selling_price', 'total_actual_price', 'total_selling_price', 'total_discount');

        return json_encode($JsonResponse);
    }


    public function Delete($product_id)
    {
        $cart_items_quentity = json_decode(Cookie::get('cart_items_quentity'), true);
        $minutes = 60 * 24;
        unset($cart_items_quentity[$product_id]);
        
        Cookie::queue('cart_items_quentity', json_encode($cart_items_quentity), $minutes);

        return redirect()->back();
    }
}
