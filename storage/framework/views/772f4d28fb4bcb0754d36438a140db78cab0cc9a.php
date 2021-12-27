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
    <script type="text/javascript" src="<?php echo e(asset('js/Orders.js')); ?>"></script>

    <!-- CSS Link -->
    <link rel="stylesheet" href="<?php echo e(asset('css/Orders.css')); ?>" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <!--Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method='POST' action="" class="loginForm">
                    <?php echo csrf_field(); ?>
                    <div class="loginForm__body">
                        <img src="<?php echo e(asset('image/LoginImage.jpg')); ?>">
                        <div class="loginForm__content">
                            <div class="loginForm__input">
                                <input id="email" name="email" type="email" required>
                                <label>Enter Email Address</label>
                            </div>
                            <div class="loginForm__input">
                                <input id="password" name="password" type="password" required>
                                <label>Enter Password</label>
                            </div>
                            <button class="loginForm_submit" type="submit">Login</button>
                            <a href="">Create an account</a>
                        </div>
                    </div>
                    <button type="button" data-bs-dismiss="modal" class="loginForm_close">
                        <span class="material-icons">close</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="header__logo">
            <img class="header__logoImage"
                src="https://static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/flipkart-plus_8d85f4.png">
            <div class="header__logoText">
                Explore <span>Plus<img
                        src="https://static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/plus_aef861.png"></span>
            </div>
        </div>

        <form class="header__search">
            <?php echo csrf_field(); ?>
            <input class="header__searchInput" type="text" placeholder="Search for products, brands and more">
            <input class="header__searchIcon material-icons" type="submit" value="search" />
        </form>

        <!-- Button trigger modal -->
        <div class="header__userLogin">
            <button class="header__userLoginBtn" data-bs-toggle="modal" data-bs-target="#loginModal"><?php echo e(Auth::user() ?
                Auth::user()->name : 'Login'); ?></button>
            <div class="header__dropdown">
                <?php if(!Auth::user()): ?>
                <div class="header__dropdownItem">
                    New customer?
                    <a href="">
                        Sign Up
                    </a>
                </div>
                <?php endif; ?>
                <div class="header__dropdownItem">
                    <span class="material-icons">account_circle</span> My Profile
                </div>
                <div class="header__dropdownItem">
                    <span class="material-icons">drive_folder_upload</span> Orders
                </div>
                <div class="header__dropdownItem">
                    <span class="material-icons">favorite</span> Wishlists
                </div>

                <?php if(Auth::user()): ?>
                <form method='POST' action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="header__dropdownItem adminLoginBtn" onclick="this.closest('form').submit();">
                        <span class="material-icons">power_settings_new</span> Log out
                    </div>
                </form>
                <?php else: ?>
                <div class="header__dropdownItem adminLoginBtn" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <span class="material-icons">admin_panel_settings</span> Admin Login
                </div>
                <?php endif; ?>
            </div>
            <!-- Login Modal -->

        </div>
        <div class="header__moreOptions">
            More<span class="material-icons">keyboard_arrow_down</span>

            <div class="header__dropdown">
                <div class="header__dropdownItem">
                    <span class="material-icons">notifications</span> Notification Preferences
                </div>
                <div class="header__dropdownItem">
                    <span class="material-icons">work</span> Sell On Flipkart
                </div>
                <div class="header__dropdownItem">
                    <span class="material-icons">live_help</span> 24x7 Customer Support
                </div>
                <div class="header__dropdownItem">
                    <span class="material-icons">trending_up</span> Advertise
                </div>
                <div class="header__dropdownItem">
                    <span class="material-icons">file_download</span> Download App
                </div>
            </div>
        </div>
        <div class="header__cart">
            <span class="header__cartIcon material-icons">shopping_cart</span>
            Cart
        </div>
    </div>

    <div class="order__container">
        <div class="order__filters">
            <div class="order__filtersText">
                <span>Filters</span>
            </div>
            <div class="order__filtersText">
                ORDER STATUS
            </div>
            <div class="order__filteroptions">
                <input type="checkbox" id="option1" name="option1" value="On The Way">
                <label for="option1">On The Way</label><br>
                <input type="checkbox" id="option2" name="option2" value="Delivered">
                <label for="option2">Delivered</label><br>
                <input type="checkbox" id="option3" name="option3" value="Cancelled">
                <label for="option3">Cancelled</label><br>
                <input type="checkbox" id="option4" name="option4" value="Returned">
                <label for="option4">Returned</label><br>
            </div>
        </div>

        <div class="order__items">
            <div class="order__item">
                <div style='display:flex;'>
                    <div class="order__itemImage">
                        <img src="https://rukminim1.flixcart.com/image/416/416/ktuewsw0/pen/d/3/0/2156824-reynolds-original-imag73htcuy84cqm.jpeg?q=70"
                            alt="">
                    </div>
                    <div class="order__itemName">
                        Reynolds Dominar Blue Pen Jar Ball Pen
                    </div>
                </div>

                <div class="itemPrice">
                    ₹244
                </div>
                <div class="order__status">
                    <div></div> Delivered
                </div>
                <div class="order__cancelOrder">
                    <img src="<?php echo e(asset('image/ordercancel.svg')); ?>" alt=""> Cancel Order
                </div>
            </div>
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

</html><?php /**PATH G:\xampp\htdocs\FlipkartClone\resources\views/Orders.blade.php ENDPATH**/ ?>