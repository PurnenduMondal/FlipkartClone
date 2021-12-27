<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Storage;

class ProductController extends Controller
{
    

    public function ViewAll() { 
        $products = Product::all();
        return view('admin.products', compact('products')); 
    }


    public function ViewEditPage($id) { 
        $product = Product::find($id);
        return view('admin.edit-product', compact('product')); 
    }


    public function Insert(Request $request){

        // dd($request->all());
        $product_id = Product::insertGetId([
            'category' => $request->category,
            'subcategory' => $request->subcategory,
            'name' => $request->name,
            'price' => $request->price,
            'discount' => $request->discount
        ]);
        $validatedData = $request->validate(['image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',]);

        if ($request->hasFile('image')) {
            ProductImage::insertGetId([
                'product_id' => $product_id,
                'image_name' => $request->file('image')->getClientOriginalName(),
            ]); 

            Storage::disk('public')->put($request->file('image')->getClientOriginalName(), $request->file('image')->get());
        }
        return redirect()->route('admin.products');
    }  


    public function Update(Request $request){

        Product::findOrFail($request->id)->update([
            'category' => $request->category,
            'subcategory' => $request->subcategory,
            'name' => $request->name,
            'price' => $request->price,
            'discount' => $request->discount
        ]);
        return redirect()->route('admin.products');
    }

    
    public function Delete($id){

    	$product= Product::findOrFail($id);
        $product_images = ProductImage::where('product_id', $product->id)->get();

        foreach ($product_images as $product_image) {

            unlink(public_path('uploads/' .$product_image->image_name ));
            
        }

        ProductImage::where('product_id', $product->id)->delete();
    	Product::findOrFail($id)->delete();

		return redirect()->back();

    }
}
