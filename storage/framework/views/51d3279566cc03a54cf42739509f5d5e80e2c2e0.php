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
                        <img src="<?php echo e(asset('images/Pin.svg')); ?>" alt="">
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
                                <div class="product__sellingPrice">&#8377;<span><?php echo e($product->selling_price *
                                        $cart_items_quentity[$product->id]); ?></span></div>
                                <div class="product__actualPrice">&#8377;<span><?php echo e($product->actual_price *
                                        $cart_items_quentity[$product->id]); ?></span></div>
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
                <?php echo csrf_field(); ?>
                <div class="cart__footer">
                    <input type="hidden" value="124" name="amount">
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
                    <div class="cart__totalDiscount" style="color:#3ca842" class="amount">
                        -&#8377;<span><?php echo e($total_discount); ?></span></div>
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

            <form class="cart__payment" method='post' action="<?php echo e(route('make-payment')); ?>" data-cc-on-file="false"
                data-stripe-publishable-key="<?php echo e(env('STRIPE_KEY')); ?>">
                <?php echo csrf_field(); ?>
                <?php if(Session::has('success')): ?>
                <div class="alert alert-primary text-center">
                    <p><?php echo e(Session::get('success')); ?></p>
                </div>
                <?php endif; ?>
                <div style="display: flex">
                    <div class="cart__cardPayment" style="font-size: 14px;">
                        Credit / Debit / ATM Card
                        <div class="cart__cardInput" style="width: 319px; margin-top: 8px;">
                            <input type="number" class="card-number" required>
                            <label for="">Enter Card Number</label>
                        </div>
                        <div style="display: flex">
                            <div class="cart__cardDate" style="font-size: 14px;">
                                Valid Thru
                                <select class="expiration_month" style="border: none; margin-left:5px">
                                    <option>MM</option>
                                    <?php for($i = 1; $i <= 12; $i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                        <?php endfor; ?>
                                </select>
                                <select class="expiration_year" id="" style="border: none;">
                                    <option>YY</option>
                                    <?php for($i = 22; $i <= 40; $i++): ?> <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                        <?php endfor; ?>
                                </select>
                            </div>

                            <div class="cart__cardInput" style="width: 128px;">
                                <input class="cvv" type="number" required>
                                <label for="">CVV</label>
                            </div>
                        </div>
                        <div class="cart__payBtn">
                            <input type="hidden" name='amount' value="<?php echo e($total_selling_price); ?>">
                            <input type="hidden" name="cartproducts" value="<?php echo e(json_encode($cart_items_quentity)); ?>">
                            <button type="submit">PAY &#8377;<?php echo e($total_selling_price); ?></button>
                        </div>
                    </div>
                </div>
            </form>
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

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function () {

        var $form = $(".cart__payment");
        $('form.cart__payment').bind('submit', function (e) {

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.cvc').val(),
                    exp_month: $('.expiration_month').val(),
                    exp_year: $('.expiration_year').val()
                }, stripeRes);
            }
        })

        function stripeRes(status, response) {
            if (response.error) {
                console.log(response.error.message);
            } else {
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    });

</script>

</html><?php /**PATH G:\xampp\htdocs\FlipkartClone\resources\views/Cart.blade.php ENDPATH**/ ?>