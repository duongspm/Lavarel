<!DOCTYPE html>
<html lang="en">

<head>
    <title>Camper - Đấu giá trực tuyến</title>
    
    <!-- Start of Async Drift Code -->
    <script>
    "use strict";

    !function() {
    var t = window.driftt = window.drift = window.driftt || [];
    if (!t.init) {
        if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
        t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
        t.factory = function(e) {
        return function() {
            var n = Array.prototype.slice.call(arguments);
            return n.unshift(e), t.push(n), t;
        };
        }, t.methods.forEach(function(e) {
        t[e] = t.factory(e);
        }), t.load = function(t) {
        var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
        o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
        var i = document.getElementsByTagName("script")[0];
        i.parentNode.insertBefore(o, i);
        };
    }
    }();
    drift.SNIPPET_VERSION = '0.3.1';
    drift.load('ix357zyx2fi4');
    </script>
    <!-- End of Async Drift Code -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">
    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->
    <link rel="apple-touch-icon" href="{{asset('fontend/img/apple-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('fontend/img/favicon.ico')}}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="{{asset('fontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/templatemo.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/custom.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="{{asset('fontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/fontawesome-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/aos.min.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('fontend/css/slider-brand.css')}}" rel="stylesheet"><!-- Slider-brand -->

    <link href="{{asset('fontend/css/cart.scss')}}" rel="stylesheet"><!--Cart -->
    
    <link href="{{asset('fontend/css/login.css')}}" rel="stylesheet"><!--Login -->
    <link href="{{asset('fontend/css/register.css')}}" rel="stylesheet"><!--Register -->

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{asset('fontend/css/fontawesome.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('fontend/images/favicon.png')}}">
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:camper@auction.com">camper@auction.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:0726178211">0397652611</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fa fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow ">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="{{URL::to('/home')}}">
                Camper Auction
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/product-all')}}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <?php
                            $customer_id = Session::get('customer_id');
                            if($customer_id!=NULL)
                            {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/logout')}}"> <i class="fa fa-fw fa-user text-dark mr-3"></i>Logout</a>
                        </li>
                         <?php
                            }else{
                            ?>     
                            <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/login-checkout')}}">Acount</a>
                        </li>
                            <?php
                            }
                            ?>      
                        
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    @yield('content')

    

    <!-- Start Footer -->
    <!--map-locationMap -->
    <div class="location-modal-wrap shadow hidepage" style="display:none;">
        <div class="location-modal-wrap-overlay"></div>
        <div class="location-modal-item">
            <div class="location-modal-container">
            <div class="location-modal">
                <div id="locationMap"></div>
                
                        
            </div>
            
                <div class="card-body">
                <h3>Where are you now?</h3>
                <div class="address text-muted small letter-spacing-1" id="location-address-display"></div>
                <div class="location-modal-close bg-primary text-center"><i class="fal fa-times">&nbsp;</i></div>
            </div>
        
            </div>
        </div>
    </div>

    <!-- Location -->
    <section class="location text-light py-5">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center">
                    <div class="p-2"><i class="fa fa-map fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>ADDRESS</h6>
                        <p>Trần Văn Ơn, TDM, Bình Dương</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="fa fa-mobile-alt fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>CALL FOR QUERY</h6>
                        <p>(+84) 396 752 611</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="fa fa-envelope fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>SEND US MESSAGE</h6>
                        <p>camperauction@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="fa fa-clock fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>OPENING HOURS</h6>
                        <p>09:00 AM - 18:00 PM</p>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of location -->


    <!--map-modal end -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Zay Shop</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fa fa-map-signs"></i>
                            123 Consectetur at ligula 10660
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Luxury</a></li>
                        <li><a class="text-decoration-none" href="#">Sport Wear</a></li>
                        <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                        <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                        <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="{{URL::to('/home')}}">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fa fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fa fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2021 Company Name 
                            | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->
    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn" title="Lên đỉnh nào !!">
        <!-- <img src="assets/images/up-arrow.png" alt="alternative"> -->
        <!-- <img src="{{('fontend/images/up-arrow.png')}}" alt="alternative"> -->
      ^Top
    </button>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
        </script>
    <!-- end of back to top button -->
    <!-- Start Script -->
    <script src="{{asset('fontend/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('fontend/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('fontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('fontend/js/templatemo.js')}}"></script>
    <script src="{{asset('fontend/js/custom.js')}}"></script>
    <script src="{{asset('fontend/bootstrap.min.js')}}"></script><!-- Bootstrap framework -->
    <script src="{{asset('fontend/js/purecounter.min.js')}}"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="{{asset('fontend/js/swiper.min.js')}}"></script><!-- Swiper for image and text sliders -->
    <script src="{{asset('fontend/js/aos.js')}}"></script><!-- AOS on Animation Scroll -->
    <script src="{{asset('fontend/js/script.js')}}"></script>  <!-- Custom scripts -->
    <script src="{{asset('fontend/js/product.js')}}"></script><!-- Product scripts -->
    <script src="{{asset('fontend/js/slider-brand.js')}}"></script><!-- Slider-brand -->
    <script src="{{asset('fontend/js/cart.js')}}"></script><!-- Cart -->
    <script src="{{asset('fontend/js/login.js')}}"></script><!-- Login -->
    
    <!-- End Script -->
</body>

</html>