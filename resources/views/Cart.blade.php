<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <script type="text/javascript" src="{{ asset('js/Cart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/Header.js') }}"></script>
    
    <!-- CSS Link -->
    <link rel="stylesheet" href="{{ asset('css/Header.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Cart.css') }}" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <x-header />

    <div class="cart__container">
        <div class="cart__items">
            <div style="box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 2px 0px; background-color: white;">
                <div class="cart__header">
                    <p>My Cart ({{ $cartProducts->count() }})</p>
                    @if( !$cartProducts->isEmpty() )
                    <div class="cart__address">
                        <img src="{{asset('image/Pin.svg')}}" alt="">
                        <span>Deliver to</span>
                        <div>Address</div>
                    </div>
                    @endif
                </div>

                @if(!$cartProducts->isEmpty())
                @foreach ($cartProducts as $product)
                <div class="cart__item">
                    <div style="display: flex;">
                        <div class="cart__itemImage">
                            <img src="{{asset('uploads/'.$productImages->firstWhere('product_id', $product->id)->image_name)}}"
                                alt="">

                        </div>
                        <div class="cart__textContents">
                            <div class="cart__itemName">
                                {{$product->name}}
                            </div>
                            <div class="itemPrice">
                                <div class="product__sellingPrice">&#8377;<span>{{ $product->selling_price * $cart_items_quentity[$product->id]}}</span></div>
                                <div class="product__actualPrice">&#8377;<span>{{ $product->actual_price * $cart_items_quentity[$product->id]}}</span></div>
                                <div class="product__discount">{{ $product->discount }}% off</div>
                            </div>

                        </div>
                    </div>
                    <div class="item__remove" style="padding-top: 10px; display: flex">

                        <button class="cartItem__addRemoveBtn"> - </button>
                        <div class="item__quantity">
                            <input type="text" id="{{ $product->id }}" name="quantity"
                                value="{{$cart_items_quentity[$product->id]}}" disabled>
                        </div>
                        <button class="cartItem__addRemoveBtn"> + </button>

                        <a href="{{route('delete_cartItem', $product->id)}}" style="margin-left: 24px;">
                            REMOVE
                        </a>
                    </div>
                </div>
                @endforeach
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
                    <div class="text">Price ({{ $cartProducts->count() }} items)</div>
                    <div class="cart__totalActualPrice ">&#8377;<span>{{$total_actual_price}}</span></div>
                </div>
                <div class="price__row">
                    <div class="text">Discount</div>
                    <div class="cart__totalDiscount" style="color:#3ca842" class="amount">-&#8377;<span>{{$total_discount}}</span></div>
                </div>
                <div class="price__row">
                    <div class="text">Delivery Charges</div>
                    <div style="color:#3ca842" class="amount">FREE</div>
                </div>
                <div class="price__row totalamount">
                    <div class="text">Total Amount</div>
                    <div class="cart__totalSellingPrice ">&#8377;<span>{{$total_selling_price }}</span></div>
                </div>
            </div>
        </div>
        @else
        <div class="cart__empty">
            <img src="https://rukminim1.flixcart.com/www/800/800/promos/16/05/2019/d438a32e-765a-4d8b-b4a6-520b560971e8.png?q=90"
                alt="">
            <p>Your cart is empty!</p>
            <a href="/">Shop now</a>
        </div>
        @endif
    </div>
</body>

</html>