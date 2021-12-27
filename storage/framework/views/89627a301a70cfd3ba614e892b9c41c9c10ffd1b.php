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
    <a class="header__logo" href="<?php echo e(route('landing_page')); ?>">
        <img class="header__logoImage"
            src="https://static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/flipkart-plus_8d85f4.png">
        <div class="header__logoText">
            Explore <span>Plus<img
                    src="https://static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/plus_aef861.png"></span>
        </div>
    </a>

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
            <a class="header__dropdownItem" href="<?php echo e(Auth::user() ? route('user_profile') : ''); ?>">
                <span class="material-icons">account_circle</span> My Profile
            </a>
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
    <div class="header__cart" >
        <a href="<?php echo e(Auth::user() ? route('display_cart') : ''); ?>" >
            <span class="header__cartIcon material-icons">shopping_cart</span>Cart
        </a>
    </div>
</div><?php /**PATH G:\xampp\htdocs\FlipkartClone\resources\views/components/header.blade.php ENDPATH**/ ?>