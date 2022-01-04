<a href="{{ route('view_product', $product->id) }}" class="productSlider__item">

    <div class="productSlider__itemImage">
        <img src="{{asset('uploads/'.$productImage->image_name)}}">
    </div>
    
    <div class="productSlider__itemText1">
        {{ $product->name }}
    </div>
    <div class="productSlider__itemText2">

        <span class="product__sellingPrice">&#8377;{{ $product->selling_price }}</span>
        <span class="product__actualPrice">&#8377;{{ $product->actual_price }}</span>
        <span class="product__discount">{{ $product->discount }}% off</span>
    </div>
</a>
