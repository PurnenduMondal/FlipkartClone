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
    <link rel="icon" href="https://img1a.flixcheckout.com/www/promos/new/20150528-140547-favicon-retina.ico">

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
    <script type="text/javascript" src="{{ asset('js/CheckOut.js') }}"></script>

    <!-- CSS Link -->
    <link rel="stylesheet" href="{{ asset('css/Header.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/CheckOut.css') }}" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <x-header />

    <div class="checkout__container">
        <div class="checkout__items">
            <div class="checkout__header">
                <p>Order Summary</p>
                <div class="checkout__address">
                    <img src="{{asset('images/Pin.svg')}}" alt="">
                    <span>Deliver to</span> 
                    <div>Address</div>
                </div>
            </div>
            <div class="checkout__item">
                <div class="checkout__itemImage">
                    <img src="https://rukminim1.flixcart.com/image/612/612/jjiw1ow0/pen/p/w/9/cello-cel1006381-original-imaf739ay4vbamsz.jpeg?q=70" alt="">
                </div>
                <div class="checkout__textContents">
                    <div class="checkout__itemName">
                        Reynolds Dominar Blue Pen Jar Ball Pen
                    </div>
                    <div class="itemPrice">
                        <div class="product__sellingPrice">₹250</div>
                        <div class="product__actualPrice">₹300</div>
                        <div class="product__discount">13% off</div>
                    </div>
                    <div class="item__remove">
                       REMOVE 
                    </div>
                </div>
            </div>
            <div class="checkout__footer">
                <button>PLACE ORDER</button>
            </div>
        </div>
        <div class="checkout__priceSection">
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
