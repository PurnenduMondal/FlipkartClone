<?php

namespace App\View\Components;

use App\Models\ProductImage;
use Illuminate\View\Component;

class Product extends Component
{
    public $product;
    public $productImage;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        $this->product = $product;
        $this->productImage = ProductImage::where('product_id', $product->id)->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.product');
    }
}
