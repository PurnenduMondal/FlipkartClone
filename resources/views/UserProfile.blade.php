<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> My Profile </title>

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
    <script type="text/javascript" src="{{ asset('js/UserProfile.js') }}"></script>

    <!-- CSS Link -->
    <link rel="stylesheet" href="{{ asset('css/Header.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/UserProfile.css') }}" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <x-header />

    <div class="profileContainer">
        <div class="profile__sidebar">
            <div class="profile__name">
                <img
                    src="https://static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/profile-pic-male_4811a1.svg">
                <div>
                    <p style="font-size: 12px;margin-bottom: 0;">Hello,</p>
                    <p style="font-weight: 500;margin-bottom: 0;">Purnendu Mondal</p>
                </div>
            </div>
            <a class="profile__sidebarItem" href="{{route('view_orders')}}">
                <div>
                    <img style="width:20px;height:20px;margin: 0 20px 0 9px;" src="{{asset('image/orders.svg')}}">
                    MY ORDERS
                </div>
                <div>
                    <span class="material-icons">
                        chevron_right
                    </span>
                </div>
            </a>
            <div class="profile__sidebarItem" style="color: #2874f0;">
                <div>
                    <img style="width:20px;height:20px;margin: 0 20px 0 9px;" src="{{asset('image/account.svg')}}">
                    ACCOUNT SETTINGS
                </div>
                <div>
                    <span class="material-icons">
                        chevron_right
                    </span>
                </div>
            </div>
        </div>

        <div class="profile__content">
            <form action="{{route('submit_personal_info')}}" method="post">
                @csrf
                <div class="profile__contentTitle">
                    <div>Personal Information</div> <span>Edit</span>
                </div>
                <div class="profile__inputContainer">
                    <div class="profile__input" style="margin: 0">
                        <div class="profile__nameInput">
                            <input type="text" name="first_name" id="" value="{{Auth::user()->first_name}}" required>
                            <label for="">First Name</label>
                        </div>
                        <div class="profile__nameInput">
                            <input type="text" name="last_name" id="" value="{{Auth::user()->last_name}}" required>
                            <label for="">Last Name</label>
                        </div>
                        <input type="submit" value="SAVE">
                    </div>

                    <div style="margin-bottom: 46px;">
                        <div style="padding: 12px 0;font-size: 14px;">Your Gender</div>
                        <input style="transform: scale(1.3);padding-right: 5px;" type="radio" name="gender" value="male"
                            id="male" {{ Auth::user()->gender == 'male' ? 'checked' : ''}} >
                        <label for="male" style="padding-right: 32px;cursor: pointer;">Male</label>
                        <input style="transform: scale(1.3);padding-right: 5px;cursor: pointer;" type="radio"
                            name="gender" value="female" id="female" {{ Auth::user()->gender == 'female' ? 'checked' : ''}}>
                        <label for="female" style="cursor: pointer;">Female</label>
                    </div>
                </div>
            </form>


            <form action="{{route('submit_email')}}" method="post">
                @csrf
                <div class="profile__contentTitle">
                    <div>Email Address</div><span>Edit</span> <span>Change Password</span>
                </div>

                <div class="profile__input">
                    <div method="post" class="profile__nameInput">
                        <input type="email" name="email" id="" required value="{{Auth::user()->email}}">
                        <label for="">Email Address</label>
                    </div>
                    <!-- <div class="profile__nameInput">
                        <input type="text" name="" id="" required >
                        <label for="">Password</label>
                    </div> -->
                    <input type="submit" value="SAVE">
                </div>
            </form>

            <form action="{{route('submit_address')}}" method="post">
                @csrf
                <div class="profile__contentTitle">
                    <div>Address</div><span>Edit</span>
                </div>
                <div class="profile__inputContainer">

                    <div class="profile__input">
                        <div class="profile__nameInput" style="width:530px">
                            <input type="text" name="address" id="" required value="{{Auth::user()->address}}">
                            <label for="">Address</label>
                        </div>
                        <input type="submit" value="SAVE">
                    </div>
                </div>
            </form>


            <div class="profile__faqs">
                <div class="profile__contentTitle">
                    <div>FAQs</div>
                </div>
                <div>What happens when I update my email address (or mobile number)?</div>
                <p>Your login email id (or mobile number) changes, likewise. You'll receive all your account related
                    communication on your updated email address (or mobile number).</p>
                <div>When will my Flipkart account be updated with the new email address (or mobile number)?</div>
                <p>It happens as soon as you confirm the verification code sent to your email (or mobile) and save the
                    changes.</p>
                <div>What happens to my existing Flipkart account when I update my email address (or mobile
                    number)?</div>
                <p>Updating your email address (or mobile number) doesn't invalidate your account. Your account remains
                    fully functional. You'll continue seeing your Order history, saved information and personal details.
                </p>
                <div>Does my Seller account get affected when I update my email address?</div>
                <p>Flipkart has a 'single sign-on' policy. Any changes will reflect in your Seller account also.</p>
            </div>
            <img src="https://static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/myProfileFooter_4e9fe2.png">
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