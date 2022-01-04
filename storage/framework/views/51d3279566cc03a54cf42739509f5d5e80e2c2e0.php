<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Online Shopping Site for Mobiles, Electronics, Furniture, Grocery, Lifestyle, Books &amp; More. Best Offers!
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="icon" href="https://img1a.flixcart.com/www/promos/new/20150528-140547-favicon-retina.ico">

    <!--Google Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    <!--JQuery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Font Link -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />

    <!-- JavaScript Link -->
    <script type="text/javascript" src="<?php echo e(asset('js/Cart.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/Header.js')); ?>"></script>
    
    <!-- CSS Link -->
    <link rel="stylesheet" href="<?php echo e(asset('css/Header.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/Cart.css')); ?>" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.header','data' => []]); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <div class="cart__container">
        <div class="cart__items">
            <div style="box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 2px 0px; background-color: white;">
                <div class="cart__header">
                    <p>My Cart (<?php echo e($cartProducts->count()); ?>)</p>
                    <?php if( !$cartProducts->isEmpty() ): ?>
                    <div class="cart__address">
                        <img src="<?php echo e(asset('image/Pin.svg')); ?>" alt="">
                        <span>Deliver to</span>
                        <div>Address</div>
                    </div>
                    <?php endif; ?>
                </div>

                <?php if(!$cartProducts->isEmpty()): ?>
                <?php $__currentLoopData = $cartProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="cart__item">
                    <div style="display: flex;">
                        <div class="cart__itemImage">
                            <img src="<?php echo e(asset('uploads/'.$productImages->firstWhere('product_id', $product->id)->image_name)); ?>"
                                alt="">

                        </div>
                        <div class="cart__textContents">
                            <div class="cart__itemName">
                                <?php echo e($product->name); ?>

                            </div>
                            <div class="itemPrice">
                                <div class="product__sellingPrice">&#8377;<span><?php echo e($product->selling_price * $cart_items_quentity[$product->id]); ?></span></div>
                                <div class="product__actualPrice">&#8377;<span><?php echo e($product->actual_price * $cart_items_quentity[$product->id]); ?></span></div>
                                <div class="product__discount"><?php echo e($product->discount); ?>% off</div>
                            </div>

                        </div>
                    </div>
                    <div class="item__remove" style="padding-top: 10px; display: flex">

                        <button class="cartItem__addRemoveBtn"> - </button>
                        <div class="item__quantity">
                            <input type="text" id="<?php echo e($product->id); ?>" name="quantity"
                                value="<?php echo e($cart_items_quentity[$product->id]); ?>" disabled>
                        </div>
                        <button class="cartItem__addRemoveBtn"> + </button>

                        <a href="<?php echo e(route('delete_cartItem', $product->id)); ?>" style="margin-left: 24px;">
                            REMOVE
                        </a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="cart__footer">
                    <button>PLACE ORDER</button>
                </div>
            </div>
        </div>
        <div class="cart__priceSection">
            <div class="priceDetails">
                PRICE DETAILS
            </div>
            <div class="allPrices">
                <div class="price__row">
                    <div class="text">Price (<?php echo e($cartProducts->count()); ?> items)</div>
                    <div class="cart__totalActualPrice ">&#8377;<span><?php echo e($total_actual_price); ?></span></div>
                </div>
                <div class="price__row">
                    <div class="text">Discount</div>
                    <div class="cart__totalDiscount" style="color:#3ca842" class="amount">-&#8377;<span><?php echo e($total_discount); ?></span></div>
                </div>
                <div class="price__row">
                    <div class="text">Delivery Charges</div>
                    <div style="color:#3ca842" class="amount">FREE</div>
                </div>
                <div class="price__row totalamount">
                    <div class="text">Total Amount</div>
                    <div class="cart__totalSellingPrice ">&#8377;<span><?php echo e($total_selling_price); ?></span></div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="cart__empty">
            <img src="https://rukminim1.flixcart.com/www/800/800/promos/16/05/2019/d438a32e-765a-4d8b-b4a6-520b560971e8.png?q=90"
                alt="">
            <p>Your cart is empty!</p>
            <a href="/">Shop now</a>
        </div>
        <?php endif; ?>
    </div>
</body>

</html><?php /**PATH G:\xampp\htdocs\FlipkartClone\resources\views/Cart.blade.php ENDPATH**/ ?>