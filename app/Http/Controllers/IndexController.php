<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function View() { 
        $products = Product::latest()->get();
        return view('Landing',compact('products'));
    }

    public function ViewProductDetails($id) { 

        $products = Product::find($id)->get();        
        $productImages = ProductImage::where('product_id',$id)->get();

        return view('ProductDetails',compact('products','productImages'));
    }
}
