<a href="<?php echo e(route('view_product', $product->id)); ?>" class="productSlider__item">

    <div class="productSlider__itemImage">
        <img src="<?php echo e(asset('uploads/'.$productImage->image_name)); ?>">
    </div>
    
    <div class="productSlider__itemText1">
        <?php echo e($product->name); ?>

    </div>
    <div class="productSlider__itemText2">

        <span class="product__sellingPrice">&#8377;<?php echo e($product->selling_price); ?></span>
        <span class="product__actualPrice">&#8377;<?php echo e($product->actual_price); ?></span>
        <span class="product__discount"><?php echo e($product->discount); ?>% off</span>
    </div>
</a>
<?php /**PATH G:\xampp\htdocs\FlipkartClone\resources\views/components/product.blade.php ENDPATH**/ ?>