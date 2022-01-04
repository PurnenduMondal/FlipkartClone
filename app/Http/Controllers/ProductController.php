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
            'selling_price' => $request->selling_price,
            'actual_price' => $request->actual_price,
            'discount' => $request->discount
        ]);

		foreach($request->file('product-images') as $image) {
            ProductImage::insert(['product_id' => $product_id,'image_name' => $image->getClientOriginalName()]);
            $image->storeAs('uploads',$image->getClientOriginalName(), ['disk' => 'public']);
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
