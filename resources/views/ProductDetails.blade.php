<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping Site for Mobiles, Electronics, Furniture, Grocery, Lifestyle, Books &amp; More. Best Offers!
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Landing.css" />

    <!-- Icons -->
    <link rel="icon" href="https://img1a.flixcart.com/www/promos/new/20150528-140547-favicon-retina.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!--JQuery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Font Link -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />

    <!-- JavaScript Link -->
    <script type="text/javascript" src="{{ asset('js/ProductDetails.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/Header.js') }}"></script>
    <script src="https://unpkg.com/js-image-zoom/js-image-zoom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-image-zoom/js-image-zoom.min.js"></script>

    <!-- CSS Link -->
    <link rel="stylesheet" href="{{ asset('css/Header.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/ProductDetails.css') }}" />

</head>

<body>

    <x-header />

    <div class="productdetails">
        <div class="product__imageColumn">

            @foreach ($productImages as $productImage)
            <div class="product__smallImage">
                <img
                    src="{{asset('uploads/'.$productImage->image_name)}}">
            </div>
            @endforeach

        </div>
        <div>
            <div class="product__largeImage">

                <div id="img-container">
                    <img id="largeImage" src="{{asset('uploads/'.$productImages[0]->image_name)}}">

                </div>
                <!-- <div id="zoomed-img-result-id" class="img-zoom-result"></div> -->
            </div>
            <div class="product__actionButtons">
                <a class="product__addToCartButton" href= {{route('insert_cartItem', $product->id)}} >
                    <span class="material-icons">
                        shopping_cart
                    </span>
                    <span>ADD TO CART</span>
                </a>
                <a class="product__buyButton" >
                    <span class="material-icons">
                        flash_on
                    </span>
                    <span>BUY NOW</span>
                </a>
            </div>
        </div>

        <div class="product__textContainer">
            <p style="font-size:12px;color:#878787;display:flex;margin-bottom: 5px;"> Home <span
                    style="font-size:14px;padding:2px;" class="material-icons">chevron_right</span> Mobiles </p>
            <h1>{{ $product->name }}</h1>
            <span class="product__sellingPrice">&#8377;{{ $product->selling_price }}</span>
            <span class="product__actualPrice">&#8377;{{ $product->actual_price }}</span>
            <span class="product__discount">{{ $product->discount }}% off</span>

            <h6>Available offers</h6>
            <div class="product__offer">
                <img
                    src="https://rukminim1.flixcart.com/www/18/18/promos/06/09/2016/c22c9fc4-0555-4460-8401-bf5c28d7ba29.png?q=90">
                Special Price Get extra 50% off (price inclusive of discount)
            </div>
            <div class="product__offer">
                <img
                    src="https://rukminim1.flixcart.com/www/18/18/promos/06/09/2016/c22c9fc4-0555-4460-8401-bf5c28d7ba29.png?q=90">
                Bank Offer 5% Unlimited Cashback on Flipkart Axis Bank Credit Card
            </div>
            <div class="product__offer">
                <img
                    src="https://rukminim1.flixcart.com/www/18/18/promos/06/09/2016/c22c9fc4-0555-4460-8401-bf5c28d7ba29.png?q=90">
                Bank Offer Flat ₹75 off on first Flipkart Pay Later order of ₹500 and above
            </div>
            <div class="product__offer">
                <img
                    src="https://rukminim1.flixcart.com/www/18/18/promos/06/09/2016/c22c9fc4-0555-4460-8401-bf5c28d7ba29.png?q=90">
                Bank Offer 20% off on 1st txn with Amex Network Cards issued by SBI Cards and Mobikwik
            </div>
            <div class="more_infoContrainer" style="padding-top: 24px;">
                <div class="d-flex">
                    <div style="width: 110px;">Highlights</div>
                    <div>
                        <ul>
                            <li>Top Quality Product</li>
                            <li>Excellent Brand Support</li>
                            <li>Durable</li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex">
                    <div style="width: 110px;">Services</div>
                    <div>
                        <ul>
                            <li>Cash on Delivery</li>
                            <li>Net banking & Credit/ Debit/ ATM card</li>
                            <li>14 Days Return Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>