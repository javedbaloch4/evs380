<!DOCTYPE html>
<html>
    <head>
        <title>{{!empty($title)? $title : ''}}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{url('css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
        <link href="{{url('css/custom.css')}}" type="text/css" rel="stylesheet" media="all">
        <script src="{{url('js/jquery.js')}}" type="text/javascript"></script>
        <script src="{{url('js/custom.js')}}" type="text/javascript"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 logo-section">
                        <img src="{{url('img/logo.png')}}" alt="logo">
                    </div>
                    <div class="col-md-7 col-sm-7 cart-section">
                        <div class="text text-right">
                            <a href="#" title="shoping cart">Shopping Cart</a>
                            <span>now in your cart 0 items</span>
                        </div>
                        <div class="lang-currency">
                            <div class="parent-container pull-right">
                                <div class="language pull-left">
                                    <span class="text">Language:</span>
                                </div>
                                <div class="currencies pull-left">
                                    <span class="text">Currencies:</span>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navigation">
                                <i class="icon-bar"></i>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <nav class="menu collapse navbar-collapse" id="header-navigation">
                            <ul class="clearfix">
                                <li class="pull-left active"><a href="#">Home</a></li>
                                <li class="pull-left"><a href="#">What's New</a></li>
                                <li class="pull-left"><a href="#">Specials</a></li>
                                <li class="pull-left"><a href="#">My Account</a></li>
                                <li class="pull-left"><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 header-slider">
                        <div class="slider-container">
                            <div class="slider-children clearfix">
                                <div class="slides pull-right">
                                    <img src="assets/img/slider/slide-1.png" alt="slide 1">
                                </div>
                                <div class="controls pull-left">
                                    <ul class="clearfix controls-btns">
                                        <li data-img="assets/img/slider/slide-1.png" data-bg_img="assets/img/slider/bg-btn1.png" class="active"><span><img src="assets/img/slider/list-img.png" alt="list-img-1"></span>50% Discount Insanity</li>
                                        <li data-img="assets/img/slider/slide-2.png" data-bg_img="assets/img/slider/bg-btn2.png"><span><img src="assets/img/slider/list-img.png" alt="list-img-2"></span>Premium Products</li>
                                        <li data-img="assets/img/slider/slide-3.png" data-bg_img="assets/img/slider/bg-btn3.png"><span><img src="assets/img/slider/list-img.png" alt="list-img-3"></span>Exclusive Offer</li>
                                        <li data-img="assets/img/slider/slide-4.png" data-bg_img="assets/img/slider/bg-btn4.png"><span><img src="assets/img/slider/list-img.png" alt="list-img-4"></span>Red Hot Stuff</li>
                                        <li data-img="assets/img/slider/slide-5.png" data-bg_img="assets/img/slider/bg-btn5.png"><span><img src="assets/img/slider/list-img.png" alt="list-img-5"></span>Summertime Discount </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="aside-left">
                             <h3>Categories</h3>
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#category-navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <nav id="category-navigation" class="collapse navbar-collapse">
                                <ul class="cat-nav">
                                    <li><a href="#" title="Sound Device">Sound Device</a></li>
                                    <li><a href="#" title="Video game consoles<">Video game consoles</a></li>
                                    <li><a href="#" title="Sound Device">Video game consoles</a></li>
                                    <li><a href="#" title="Video game consoles<">Home security systems</a></li>
                                    <li><a href="#" title="Cameras">Cameras</a></li>
                                    <li><a href="#" title="Home theater systems">Home theater systems</a></li>
                                    <li><a href="#" title="TVs">TVs</a></li>
                                    <li><a href="#" title="Computers">Computers</a></li>
                                    <li><a href="#" title="Games/movies/music">Games/movies/music</a></li>
                                    <li><a href="#" title="Accessories">Accessories</a></li>
                                    <li><a href="#" title="Office">Office</a></li>
                                    <li><a href="#" title="House wears">House wears</a></li>
                                </ul>
                            </nav>

                            <img class="hidden-xs" src="assets/img/ads/ads-1.png" alt="ads image">
                            <h3>Manufacturers</h3>

                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="main-section">
                            <div class="clearfix">
                                <h3 class="featured-title pull-left">Featured <span>Products</span></h3>
                                <div class="view-all-btn pull-right btn btn-danger">View All Products</div>
                            </div>
                            <ul class="clearfix featured-products">
                                <li>
                                    <img src="assets/img/products/product-1.png" alt="product 1">
                                    <div class="title">HTC Google Nexus One Black</div>
                                    <div class="price">$206.99</div>
                                </li>
                                <li>
                                    <img src="assets/img/products/product-1.png" alt="product 1">
                                    <div class="title">HTC Google Nexus One Black</div>
                                    <div class="price">$206.99</div>
                                </li>
                                <li>
                                    <img src="assets/img/products/product-1.png" alt="product 1">
                                    <div class="title">HTC Google Nexus One Black</div>
                                    <div class="price">$206.99</div>
                                </li>
                                <li>
                                    <img src="assets/img/products/product-1.png" alt="product 1">
                                    <div class="title">HTC Google Nexus One Black</div>
                                    <div class="price">$206.99</div>
                                </li>
                                <li>
                                    <img src="assets/img/products/product-1.png" alt="product 1">
                                    <div class="title">HTC Google Nexus One Black</div>
                                    <div class="price">$206.99</div>
                                </li>
                                <li>
                                    <img src="assets/img/products/product-1.png" alt="product 1">
                                    <div class="title">HTC Google Nexus One Black</div>
                                    <div class="price">$206.99</div>
                                </li>
                                <li>
                                    <img src="assets/img/products/product-1.png" alt="product 1">
                                    <div class="title">HTC Google Nexus One Black</div>
                                    <div class="price">$206.99</div>
                                </li>
                                <li>
                                    <img src="assets/img/products/product-1.png" alt="product 1">
                                    <div class="title">HTC Google Nexus One Black</div>
                                    <div class="price">$206.99</div>
                                </li>
                                <li>
                                    <img src="assets/img/products/product-1.png" alt="product 1">
                                    <div class="title">HTC Google Nexus One Black</div>
                                    <div class="price">$206.99</div>
                                </li>
                                <li>
                                    <img src="assets/img/products/product-1.png" alt="product 1">
                                    <div class="title">HTC Google Nexus One Black</div>
                                    <div class="price">$206.99</div>
                                </li>
                                <li>
                                    <img src="assets/img/products/product-1.png" alt="product 1">
                                    <div class="title">HTC Google Nexus One Black</div>
                                    <div class="price">$206.99</div>
                                </li>
                                <li>
                                    <img src="assets/img/products/product-1.png" alt="product 1">
                                    <div class="title">HTC Google Nexus One Black</div>
                                    <div class="price">$206.99</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container hidden-xs">
                <div class="row">
                    <div class="col-md-12 carousel-slider">
                        <h3>Our <span>Spotlight</span></h3>
                        <ul class="clearfix">
                            <li>
                                <img class="pull-left" src="assets/img/carousel/image-1.png" alt="image 1">
                                <span class="title">Camcorders</span>
                                <span class="saving">save $40</span>
                            </li>
                            <li>
                                <img class="pull-left" src="assets/img/carousel/image-1.png" alt="image 1">
                                <span class="title">Camcorders</span>
                                <span class="saving">save $40</span>
                            </li>
                            <li>
                                <img class="pull-left" src="assets/img/carousel/image-1.png" alt="image 1">
                                <span class="title">Camcorders</span>
                                <span class="saving">save $40</span>
                            </li>
                            <li>
                                <img class="pull-left" src="assets/img/carousel/image-1.png" alt="image 1">
                                <span class="title">Camcorders</span>
                                <span class="saving">save $40</span>
                            </li>
                        </ul>
                        <span class="button-left pull-left"></span>
                        <span class="button-right pull-right"></span>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 footer-nav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#footer-navigation">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <nav class="collapse navbar-collapse" id="footer-navigation">
                            <ul class="clearfix">
                                <li class="pull-left active"><a href="#">Home</a></li>
                                <li class="pull-left"><a href="#">What's New</a></li>
                                <li class="pull-left"><a href="#">Specials</a></li>
                                <li class="pull-left"><a href="#">My Account</a></li>
                                <li class="pull-left"><a href="#">Contact</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 company-info">
                        <div>
                            Website template designed by 
                            <a href="#" title="designed company name">TemplateMonster.com</a>    |    
                            3D Models provided by 
                            <a href="#" title="designed company name">Templates.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="assets/js/jquery.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.js" type="text/javascript"></script>
        <script src="assets/js/custom.js" type="text/javascript"></script>
    </body>
</html>
