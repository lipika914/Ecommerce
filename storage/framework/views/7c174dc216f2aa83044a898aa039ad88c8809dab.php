<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>E-SHOP</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('main/css/bootstrap.min.css')); ?>" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('main/css/slick.css')); ?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('main/css/slick-theme.css')); ?>" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('main/css/nouislider.min.css')); ?>" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?php echo e(asset('main/css/font-awesome.min.css')); ?>">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('main/css/style.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('main/css/toastr.min.css')); ?>" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- HEADER -->
<header>
    <!-- top Header -->
    <div id="top-header">
        <div class="container">
            <div class="pull-left">
                <span>Welcome to Book Bank!</span>
            </div>

    <!-- header -->
    <div id="header">
        <div class="container">
            <div class="pull-left">
                <!-- Logo -->
                <div class="header-logo">
                    <a class="logo" href="#">
                        <img src="<?php echo e(asset('main/img/logo.png')); ?>" alt="">
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Search -->
                <div class="header-search">
                      <!-- Navbar Search -->
    <form action="<?php echo e(url('search')); ?>" method="POST" role="search" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <?php echo e(csrf_field()); ?>

        <div class="input-group">
            <input type="text" class="form-control" name="name" value="<?php if(!empty($info1)): ?> <?php echo e($info1->name); ?> <?php endif; ?>" placeholder="Search for...use name" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>




            </div>
            <div class="pull-right">
                <ul class="header-btns">
                    <!-- Account -->
                    <li class="header-account dropdown default-dropdown">
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
                        </div>
                        <a href="<?php echo e(url('login1')); ?>" class="text-uppercase">Login</a> / <a href="<?php echo e(url('register')); ?>" class="text-uppercase">Sign Up</a>
                        <ul class="custom-menu">
                            <li><a href="<?php echo e(url('login')); ?>"><i class="fa fa-user-o"></i> My Account</a></li>
                           <!-- <li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>-->
                            <li><a href="<?php echo e(url('logout')); ?>"><i class="fa fa-unlock-alt"></i> Logout</a></li>
                            <li><a href="<?php echo e(url('register.blade')); ?>"><i class="fa fa-user-plus"></i> Create An Account</a></li>
                        </ul>
                    </li>
                    <!-- /Account -->

                    <!-- Cart -->
<li class="nav-toggle">
                        <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                    </li>
                    <!-- / Mobile nav toggle -->
                </ul>
            </div>
        </div>
        <!-- header -->
    </div>
    <!-- container -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
            <!-- category nav -->
<div class="category-nav">
                <span class="category-header">Categories <i class="fa fa-list"></i></span>
                <ul class="category-list">
                    <li>
                        <a>1-1 Semester</a>
							   </li>
                    <li class="dropdown side-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">1-2 Semester <i class="fa fa-angle-right"></i></a>
                    </li>

                    <li class="dropdown side-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">2-1 Semester <i class="fa fa-angle-right"></i></a>
                    </li>

                    <li class="dropdown side-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">2-2 Semester <i class="fa fa-angle-right"></i></a>
                    </li>

                    <li class="dropdown side-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">3-1 Semester<i class="fa fa-angle-right"></i></a>
                    </li>

                    <li class="dropdown side-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">3-2 Semester <i class="fa fa-angle-right"></i></a>
                    </li>

                    <li class="dropdown side-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">4-1 Semester <i class="fa fa-angle-right"></i></a>
                    </li>

                    <li class="dropdown side-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">4-2 Semester <i class="fa fa-angle-right"></i></a>
                    </li>
							   </ul>
							   </div>
            <!-- /category nav -->

            <!-- menu nav -->
            <div class="menu-nav">
                <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                <ul class="menu-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>

                    <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Writer
                            <i class="fa fa-caret-down"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="#">
                                            <img src="<?php echo e(asset('main/./img/Prof-Balaguru.jpg')); ?>" alt="">

                                        </a>
                                        <hr>
                                    </div>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Balagurusamy served as a Member,[1] Planning Commission of the Tamil Nadu
                                                Government July 2011.[2][3][4] .From December 2006 to May 2010, Balagurusamy was an appointed Member of the Union Public Service Commission,[5][6]
                                                a Constitutional Body established under the Article 315 of the Constitution of India.


                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="#">
                                            <img src="<?php echo e(asset('main/./img/banks_jerry_rfidapplied.jpg')); ?>" alt="">

                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Banks, Jerry
                                                1937 - 2017
                                                Jerry M. Banks, age 79, of Columbus, passed away August 11, 2017. He was born in Columbus,
                                                Ohio on December 18, 1937 to Miller and Rosemary Banks.Jerry was a 1957 graduate of North High School in Columbus
                                                 and he earned degrees from The Ohio State University in 1961 and 1965.
                                                He retired from the Columbus Public Schools after a long career </h3></li>

                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="#">
                                            <img src="<?php echo e(asset('main/./img/tejasvi_large.jpg')); ?>" alt="">

                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Kuppali Puttappa Poornachandra Tejaswi (8 September 1938 – 5 April 2007[1]) was a prominent Kannada writer, novelist, photographer, publisher, painter, naturalist, and environmentalist who made a great impression in the "Navya" period of Kannada Literature and inaugurated the Bandaaya ("Protest Literature") with his short-story collection Abachoorina Post Offisu.

                                                He is also the son of 'Rashtrakavi Kuvempu'.</h3></li>

                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="#">
                                            <img src="<?php echo e(asset('main/./img/banner09.jpg')); ?>" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Bags</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="#">Women’s Clothing</a></li>
                                        <li><a href="#">Men’s Clothing</a></li>
                                        <li><a href="#">Phones & Accessories</a></li>
                                        <li><a href="#">Jewelry & Watches</a></li>
                                        <li><a href="#">Bags & Shoes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Course<i class="fa fa-caret-down"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="#">
                                            <img src="<?php echo e(asset('main/./img/banner06.jpg')); ?>" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Course</h3>
                                            </div>
                                        </a>
                                        <hr>
                                    </div>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="#">Women’s Clothing</a></li>
                                        <li><a href="#">Men’s Clothing</a></li>
                                        <li><a href="#">Phones & Accessories</a></li>
                                        <li><a href="#">Jewelry & Watches</a></li>
                                        <li><a href="#">Bags & Shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="#">
                                            <img src="<?php echo e(asset('main/./img/banner07.jpg')); ?>" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Men’s</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="#">Women’s Clothing</a></li>
                                        <li><a href="#">Men’s Clothing</a></li>
                                        <li><a href="#">Phones & Accessories</a></li>
                                        <li><a href="#">Jewelry & Watches</a></li>
                                        <li><a href="#">Bags & Shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="#">
                                            <img src="<?php echo e(asset('main/./img/banner08.jpg')); ?>" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Accessories</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="#">Women’s Clothing</a></li>
                                        <li><a href="#">Men’s Clothing</a></li>
                                        <li><a href="#">Phones & Accessories</a></li>
                                        <li><a href="#">Jewelry & Watches</a></li>
                                        <li><a href="#">Bags & Shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="#">
                                            <img src="<?php echo e(asset('main/./img/banner09.jpg')); ?>" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Bags</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="#">Women’s Clothing</a></li>
                                        <li><a href="#">Men’s Clothing</a></li>
                                        <li><a href="#">Phones & Accessories</a></li>
                                        <li><a href="#">Jewelry & Watches</a></li>
                                        <li><a href="#">Bags & Shoes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li><a href="<?php echo e(url('')); ?>">Contact Us</a></li>

                </ul>
            </div>
            <!-- menu nav -->
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /NAVIGATION -->

<!-- HOME -->
<div id="home">
    <!-- container -->
    <div class="container">
        <!-- home wrap -->
        <div class="home-wrap">
            <!-- home slick -->
            <div id="home-slick">
                <!-- banner -->

                <!-- /banner -->


                <!-- banner -->
<div class="banner banner-1">
                    <img src="<?php echo e(asset('admin/./uploads/5d142911db061.jpg')); ?>" height="700" widht="150"" alt="">
                    <div class="banner-caption">
                    </div>
                </div>


                <div class="banner banner-1">
                    <img src="<?php echo e(asset('admin/./uploads/5d142e7976fc9.jpg')); ?>" height="700" widht="150"" alt="">
                    <div class="banner-caption">
                    </div>
                </div>
                <div class="banner banner-1">
                    <img src="<?php echo e(asset('admin/./uploads/5d142d3886002.jpg')); ?>" height="700" widht="150"" alt="">
                    <div class="banner-caption">
                    </div>
                </div>
                <div class="banner banner-1">
                    <img src="<?php echo e(asset('admin/./uploads/5c757909e9af1.jpg')); ?>" height="700" widht="150"" alt="">
                    <div class="banner-caption">
                    </div>
                </div>
                <div class="banner banner-1">
                    <img src="<?php echo e(asset('admin/./uploads/5c757786dfcf6.jpg')); ?>" height="700" widht="150"" alt="">
                    <div class="banner-caption">

                    </div>
                </div>
                <div class="banner banner-1">
                    <img src="<?php echo e(asset('admin/./uploads/5c757909e9af1.jpg')); ?>" height="700" widht="150" alt="">
                    <div class="banner-caption text-center">

                    </div>
                </div>
                <!-- /banner -->
            </div>
            <!-- /home slick -->
        </div>
        <!-- /home wrap -->
    </div>
    <!-- /container -->
</div>

<!-- /HOME -->

<!-- section -->

<!-- section -->
<div class="section">
    <!-- container -->

        <!-- /row -->

        <!-- row -->
        <div class="row">
            <!-- section title -->

            <!-- section title -->

            <!-- Product Single -->

<!-- /section -->

<!-- FOOTER -->
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="title">Picked For You</h2>
                </div>
                <?php if(isset($books[0])): ?>
                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i><a href="">View Details</a>a></button>
                            <img src="<?php echo e(asset('admin/uploads/'.$book->image)); ?>" height="300" width="30"  alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price"><?php echo e($book->price); ?></h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name"><a href="#"><?php echo e($book->name); ?></a></h2>
                           <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <a href="<?php echo e(route('addToCart',$book->id)); ?>" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            <div style="background-color:black">
                <footer id="footer" class="section section-grey" >
                    <!-- container -->
                    <div class="container" >
                        <!-- row -->
                        <div class="row" >
                            <!-- footer widget -->
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="footer" >
                                    <!-- footer logo -->
                                    <div class="footer-logo">
                                        <a class="logo" href="#">
                                            <img src="<?php echo e(asset('main/./img/logo.png')); ?>" alt="">
                                        </a>
                                    </div>
                                    <!-- /footer logo -->

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

                                    <!-- footer social -->
                                    <ul class="footer-social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                    <!-- /footer social -->
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="footer">
                                    <h3 class="footer-header">My Account</h3>
                                    <ul class="list-links">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">My Wishlist</a></li>
                                        <li><a href="#">Compare</a></li>
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="#">Login</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /footer widget -->

                            <div class="clearfix visible-sm visible-xs"></div>

                            <!-- footer widget -->
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="footer">
                                    <h3 class="footer-header">Customer Service</h3>
                                    <ul class="list-links">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Shiping & Return</a></li>
                                        <li><a href="#">Shiping Guide</a></li>
                                        <li><a href="#">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /footer widget -->

                            <!-- footer subscribe -->
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="footer">
                                    <h3 class="footer-header">Stay Connected</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                    <form>
                                        <div class="form-group">
                                            <input class="input" placeholder="Enter Email Address">
                                        </div>
                                        <button class="primary-btn">Join Newslatter</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /footer subscribe -->
                        </div>
                        <!-- /row -->
                        <hr>
                        <!-- row -->
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </footer>
            </div>
<!-- /FOOTER -->
        </div>
</div>
<!-- jQuery Plugins -->
<script src="<?php echo e(asset('main/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('main/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('main/js/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('main/js/nouislider.min.js')); ?>"></script>
<script src="<?php echo e(asset('main/js/jquery.zoom.min.js')); ?>"></script>
<script src="<?php echo e(asset('main/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('main/js/toastr.min.js')); ?>"></script>

    <script>
        var options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300000",
            "hideDuration": "100000",
            "timeOut": "500000",
            "extendedTimeOut": "100000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        <?php if(!empty(Session::get('success'))): ?>
        toastr.success('<?php echo e(Session::get('success')); ?>', 'SUCCESS', options);
        <?php elseif(!empty(Session::get('error'))): ?>
        toastr.error('<?php echo e(Session::get('error')); ?>', 'ERROR', options)
        <?php elseif(!empty(Session::get('warning'))): ?>
        toastr.warning('<?php echo e(Session::get('warning')); ?>', 'WARNING', options)
        <?php endif; ?>
    </script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Ecommerce\resources\views/main/welcome.blade.php ENDPATH**/ ?>