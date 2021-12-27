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
            <div class="cart__header">
                <p>My Cart</p>
                <div class="cart__address">
                    <img src="<?php echo e(asset('image/Pin.svg')); ?>" alt="">
                    <span>Deliver to</span> 
                    <div>Address</div>
                </div>
            </div>
            <div class="cart__item">
                <div class="cart__itemImage">
                    <img src="https://rukminim1.flixcart.com/image/416/416/ktuewsw0/pen/d/3/0/2156824-reynolds-original-imag73htcuy84cqm.jpeg?q=70" alt="">
                </div>
                <div class="cart__textContents">
                    <div class="cart__itemName">
                        Reynolds Dominar Blue Pen Jar Ball Pen
                    </div>
                    <div class="itemPrice">
                        <div class="product__discountedPrice">₹250</div>
                        <div class="product__actualPrice">₹300</div>
                        <div class="product__discount">13% off</div>
                    </div>
                    <div class="item__remove">
                       REMOVE 
                    </div>
                </div>
            </div>
            <div class="cart__footer">
                <button>PLACE ORDER</button>
            </div>
        </div>
        <div class="cart__priceSection">
            <div class="priceDetails">
                PRICE DETAILS
            </div>
            <div class="allPrices">
                <div class="price__row">
                    <div class="text">Price (1 items)</div>
                    <div class="amount">₹224</div>
                </div>
                <div class="price__row">
                    <div class="text">Discount</div>
                    <div style="color:#3ca842" class="amount">-₹19</div>
                </div>
                <div class="price__row">
                    <div class="text">Delivery Charges</div>
                    <div style="color:#3ca842" class="amount">FREE</div>
                </div>
                <div class="price__row totalamount">
                    <div class="text">Total Amount</div>
                    <div class="amount">₹224</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH G:\xampp\htdocs\FlipkartClone\resources\views/Cart.blade.php ENDPATH**/ ?>