<!--Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- action attribute added using Header.js -->
            <div class="loginForm"> 
                
                <div class="loginForm__body"></div>
            
                <button type="button" data-bs-dismiss="modal" class="loginForm_close">
                    <span class="material-icons">close</span>
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    var clickedButton = "";
    
    function login_form(buttonClassName){
        clickedButton = buttonClassName;

        $('.loginForm__body').html(
            '<div class="loginForm__bodyImage">' +
                '<img src="<?php echo e(asset("image/loginImg.jpg")); ?>">' +
            '</div>' +
            '<form method="POST" class="loginForm__content">' +
                '<?php echo csrf_field(); ?>' +
                '<div class="loginForm__input">' +
                    '<input id="email" name="email" type="email" required>' +
                    '<label>Enter Email Address</label>' +
                '</div>' +
                '<div class="loginForm__input">' +
                    '<input id="password" name="password" type="password" required>' +
                    '<label>Enter Password</label>' +
                '</div>'+
                '<button class="loginForm_submit" type="submit">Login</button>'+
                '<a onClick="registration_form()" class="login_link" style="text-decoration: none;font-weight: 500;cursor: pointer;">'+
                    'Create an account'+
                '</a>' +
            '</form>'  +
            '<div class="login__text1">Login</div>' +
            '<div class="login__text2">Get access to your Orders, Wishlist and Recommendations</div>'
        );

        if(clickedButton == "adminLoginBtn") {
            $(".loginForm__content").attr("action", window.location.origin + "/admin/login");
            $('.login__text1').text('Admin Login');
            $('.login__text2').text('Manage your Products, Update User Orders, and More ');
        }
        else if (clickedButton == "header__userLoginBtn") {
            $(".loginForm__content").attr("action", window.location.origin + "/login");
            $('.login__text1').text('Login');
            $('.login__text2').text('Get access to your Orders, Wishlist and Recommendations');
        };

    }

    function registration_form(){

        $('.loginForm__body').html(
            '<div class="loginForm__bodyImage">' +
                '<img src="<?php echo e(asset("image/loginImg.jpg")); ?>">' +
            '</div>' +
            '<form method="POST" class="loginForm__content">' +
            '<?php echo csrf_field(); ?>' +
            '<div class="loginForm__input">'+
                '<input id = "first_name" name = "first_name" type = "text" required>'+
                '<label>Enter Your First Name</label>'+
            '</div >'+
            '<div class="loginForm__input">'+
                '<input id="last_name" name="last_name" type="text" required>'+
                '<label>Enter Your Last Name</label>'+
            '</div>'+
            '<div class="loginForm__input">'+
                '<input id="address" name="address" type="text" required>'+
                '<label>Enter Your Address</label>'+
            '</div>'+
            '<div class="loginForm__input">'+
                '<input id="email" name="email" type="email" required>'+
                '<label>Enter Email Address</label>'+
            '</div>'+
            '<div class="loginForm__input">'+
                '<input id="password" name="password" type="password" required>'+
                '<label>Enter Password</label>'+
            '</div>'+
            '<button class="loginForm_submit" type="submit">Register</button>'+
            '<a onClick="login_form('+"'"+clickedButton+"'"+')" class="login_link" style="text-decoration: none;font-weight: 500;cursor: pointer;">'+
                'Login to your account</a>'+
            '</a>' +
            '</form>'  +
            '<div class="login__text1">Sign Up</div>' +
            '<div class="login__text2">Sign up with your email address to get started</div>'
        );

        if(clickedButton == "adminLoginBtn") {
            $(".loginForm__content").attr("action", window.location.origin + "/admin/register");
            $('.login__text1').text('Admin Sign Up');
        }
        else if (clickedButton == "header__userLoginBtn") {
            $(".loginForm__content").attr("action", window.location.origin + "/register");
            $('.login__text1').text('Sign Up');
        };
    }
</script>  

<div class="header">
    <a class="header__logo" href="/">
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


    <div class="header__userLogin">
        <!-- a Button to trigger the login modal -->
        <button 
            class="header__userLoginBtn" 
            onClick="login_form('header__userLoginBtn')" 
            data-bs-toggle="modal" 
            data-bs-target="#loginModal"
            style='<?php echo e(Auth::user() ? "color:white;background-color:#2874F0;border:none;display: flex;align-items: center;padding: 3px 20px;" : ""); ?>'
        >
            <?php if(Auth::user()): ?> 
                <?php echo e(Auth::user()->first_name); ?>

                <span style='font-size: 16px;padding: 3px 2px;' class="material-icons">keyboard_arrow_down</span>
            <?php else: ?>
                Login
            <?php endif; ?>
        </button>
        <div class="header__dropdown" style="left: -35px;">
            <div style="height: 17px;display: flex;justify-content: center;color: white;">
                <span style="font-size: 30px;" class="material-icons">eject</span>
            </div>
            <div style="box-shadow: 0 0px 10px 0 rgb(0 0 0 / 20%);">

                <?php if(!Auth::user()): ?>
                <div class="header__dropdownItem">
                    New customer?<a class='login_link' onClick="login_form('header__userLoginBtn')" data-bs-toggle="modal" data-bs-target="#loginModal" >Sign Up</a>
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
                <div class="header__dropdownItem adminLoginBtn" onClick="login_form('adminLoginBtn')" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <span class="material-icons">admin_panel_settings</span> Admin Login
                </div>
                <?php endif; ?>
            </div>
        </div>
        <!-- Login Modal -->

    </div>
    <div class="header__moreOptions">
        More<span class="material-icons">keyboard_arrow_down</span>

        <div class="header__dropdown">
            <div style="height: 17px;display: flex;justify-content: center;color: white;">
                <span style="font-size: 30px;" class="material-icons">eject</span>
            </div>
            <div style="box-shadow: 0 0px 10px 0 rgb(0 0 0 / 20%);">
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
    </div>
    <div class="header__cart">
        <a href="<?php echo e(route('display_cart')); ?>">
            <span class="header__cartIcon material-icons">shopping_cart</span>Cart
        </a>
    </div>
</div><?php /**PATH G:\xampp\htdocs\FlipkartClone\resources\views/components/header.blade.php ENDPATH**/ ?>