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
    <script type="text/javascript" src="<?php echo e(asset('js/Landing.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/Header.js')); ?>"></script>

    <!-- CSS Link -->
    <link rel="stylesheet" href="<?php echo e(asset('css/Header.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/Landing.css')); ?>" />

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

    <div class="category">
        <div class="category__item">
            <img src="https://rukminim1.flixcart.com/flap/64/64/image/f15c02bfeb02d15d.png?q=100"
                class="category__itemImage">
            Top Offers
        </div>
        <div class="category__item">
            <img src="https://rukminim1.flixcart.com/flap/64/64/image/29327f40e9c4d26b.png?q=100"
                class="category__itemImage">
            Grocery
        </div>
        <div class="category__item">
            <img src="https://rukminim1.flixcart.com/flap/64/64/image/22fddf3c7da4c4f4.png?q=100"
                class="category__itemImage">
            Mobiles
        </div>
        <div class="category__item">
            <img src="https://rukminim1.flixcart.com/flap/64/64/image/82b3ca5fb2301045.png?q=100"
                class="category__itemImage">
            Fashion
        </div>
        <div class="category__item">
            <img src="https://rukminim1.flixcart.com/flap/64/64/image/69c6589653afdb9a.png?q=100"
                class="category__itemImage">
            Electronics
        </div>
        <div class="category__item">
            <img src="https://rukminim1.flixcart.com/flap/64/64/image/ab7e2b022a4587dd.jpg?q=100"
                class="category__itemImage">
            Home
        </div>
        <div class="category__item">
            <img src="https://rukminim1.flixcart.com/flap/64/64/image/0ff199d1bd27eb98.png?q=100"
                class="category__itemImage">
            Appliances
        </div>
        <div class="category__item">
            <img src="https://rukminim1.flixcart.com/flap/64/64/image/71050627a56b4693.png?q=100"
                class="category__itemImage">
            Travel
        </div>
        <div class="category__item">
            <img src="https://rukminim1.flixcart.com/flap/64/64/image/dff3f7adcf3a90c6.png?q=100"
                class="category__itemImage">
            Beauty, Toys & More
        </div>
    </div>
    <div class="mainContents">

        <div class="slideshow">

            <img class="slideshow__image slideshow__imageFade"
                src="https://rukminim1.flixcart.com/flap/1680/280/image/b47ca8ef99c54b4a.jpeg?q=50" style="width:100%">
            <img class="slideshow__image slideshow__imageFade"
                src="https://rukminim1.flixcart.com/flap/1680/280/image/72ade6c1b48d2539.jpg?q=50" style="width:100%">
            <img class="slideshow__image slideshow__imageFade"
                src="https://rukminim1.flixcart.com/flap/1680/280/image/5e130368e516d7c1.jpeg?q=50" style="width:100%">

            <a class="slideshow__prevButton">
                <span class="material-icons">
                    chevron_left
                </span>
            </a>
            <a class="slideshow__nextButton">
                <span class="material-icons">
                    chevron_right
                </span>
            </a>
        </div>
        <div class="subcategory">
            <h4>Deals of the Day</h4>
            <div class="productSlider">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if (isset($component)) { $__componentOriginal2c1b2c59fa706cf2cddefa5ad9acf56417989ab0 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Product::class, ['product' => $product]); ?>
<?php $component->withName('product'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2c1b2c59fa706cf2cddefa5ad9acf56417989ab0)): ?>
<?php $component = $__componentOriginal2c1b2c59fa706cf2cddefa5ad9acf56417989ab0; ?>
<?php unset($__componentOriginal2c1b2c59fa706cf2cddefa5ad9acf56417989ab0); ?>
<?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a class="subcategory__prevButton" onclick="goleft()">
                <span class="material-icons">
                    chevron_left
                </span>
            </a>
            <a class="subcategory__nextButton" onclick="goright()">
                <span class="material-icons">
                    chevron_right
                </span>
            </a>
            <script>
                function goleft() {
                    var scrollLeft = $(".productSlider").scrollLeft();
                    $(".productSlider").animate({
                        scrollLeft: scrollLeft - 600
                    }, 400);
                }

                function goright() {
                    var scrollLeft = $(".productSlider").scrollLeft();
                    $(".productSlider").animate({
                        scrollLeft: scrollLeft + 600
                    }, 400);
                }
            </script>
        </div>
    </div>

    <!-- Footer -->
    <!-- Footer Section is mostly designed using Bootstrap -->
    <footer class="container-fluid">
        <div class="row">
            <div class="col ml-md-3 px-5 Footer">
                <h6>ABOUT</h6>
                <div>
                    <a href="#">Contact Us</a>
                    <a href="#">About Us</a>
                    <a href="#">Careers</a>
                    <a href="#">Flipkart Stories</a>
                    <a href="#">Press</a>
                    <a href="#">Flipkart</a>
                    <a href="#">Wholesale</a>
                </div>
            </div>
            <div class="col Footer">
                <h6>HELP</h6>
                <div>
                    <a href="#">Payments</a>
                    <a href="#">Shipping</a>
                    <a href="#">Cancellation & Returns</a>
                    <a href="#">FAQ</a>
                    <a href="#">Report</a>
                    <a href="#">Infringement</a>
                </div>
            </div>
            <div class="col Footer">
                <h6>POLICY</h6>
                <div>
                    <a href="#">Return Policy</a>
                    <a href="#">Term of Use</a>
                    <a href="#">Security</a>
                    <a href="#">Privacy</a>
                    <a href="#">Sitemap</a>
                    <a href="#">EPR Compliance</a>
                </div>
            </div>
            <div class="col Footer">
                <h6>SOCIAL</h6>
                <div>
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">YouTube</a>
                </div>
            </div>
            <div class="col Footer border-left border-secondary">
                <h6>Mail Us:</h6>
                <div>
                    <p>Flipkart Internet Private Limited,</p>
                    <p>Buildings Alyssa, Begonia &</p>
                    <p>Clove Embassy Tech Village,</p>
                    <p>Outer Ring Road, Devarabeesanahalli Village,</p>
                    <p>Bengaluru, 560103,</p>
                    <p>Karnataka, India</p>
                </div>
            </div>
            <div class="col Footer">
                <h6>Registered Office Address:</h6>
                <div>
                    <p>Flipkart Internet Private Limited,</p>
                    <p>Buildings Alyssa, Begonia &</p>
                    <p>Clove Embassy Tech Village,</p>
                    <p>Outer Ring Road, Devarabeesanahalli Village,</p>
                    <p>Bengaluru, 560103,</p>
                    <p>Karnataka, India</p>
                    <p>CIN : U51109KA2012PTC066107</p>
                    <p>Telephone: <a href="#" class="text-primary">1800 208 9898</a></p>
                </div>
            </div>
        </div>

        <div class="row border-top mt-5 py-3 border-secondary">
            <div class="col">
                <i class="fa fa-briefcase text-warning"></i>
                <span>Sell On Flipkart</span>
            </div>
            <div class="col">
                <i class="fab fa-stumbleupon-circle text-warning"></i>
                <span>Advertise</span>
            </div>
            <div class="col">
                <i class="fa fa-gift text-warning"></i>
                <span>Gift Cards</span>
            </div>
            <div class="col">
                <i class="fa fa-question-circle text-warning"></i>
                <span>Help Center</span>
            </div>
            <div class="col col-md-2 col-xs-4">
                <span>&copy; 2007-2020 Flipkart.com</span>
            </div>
            <div class="col col-md-5 col-xs-6">
                <img class="img-fluid"
                    src="https://static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/payment-method_69e7ec.svg">
            </div>
        </div>
    </footer>
</body>

</html>
<?php /**PATH G:\xampp\htdocs\FlipkartClone\resources\views/Landing.blade.php ENDPATH**/ ?>