<!--header area start-->
<header class="header_area header_four">
    <!--header top area start-->
    <div class="header_top header_top_four">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header_top_left">
                        <ul>
                            <li class="account"><a href="#">My Account <i class="ion-ios-arrow-down"></i></a>
                                <ul class="dropdown_links">
                                    <li><a href="{{route('account')}}">My Account </a></li>
                                    @guest('customer')
                                        <li><a href="{{route('user-login')}}">login </a></li>
                                    @else
                                        @endguest
                                    <li><a href="checkout.html">Checkout </a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header_top_right">
                        <div class="header_shipping">
                            <a href="#">Free Shipping on order over $99</a>
                        </div>
                        <div class="header_social">
                            <ul>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header top area end -->
    <!--header container start-->
    <div class="header_bottom header_bottom_four sticky-header">
        <div class="container">
            <div class="header_container_inner  container_position">
                <div class="logo">
                    @php
                    $logos=\App\Logo::all();
                    @endphp
                    @foreach($logos as $logo)
                    <a href="/"><img src="/image/logo/{{$logo->logo_image}}" alt="Logo"  height="52px" width="154px" style="height: 52px;"></a>
                        @endforeach
                </div>
                <div class="main_menu menu_four">
                    <nav>
                        <ul>
                            <li><a href="/"> Home</a></li>
                            <li><a href="#"> pages</a>
                                <ul class="sub_menu pages">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">services</a></li>
                                    <li><a href="faq.html">Frequently Questions</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                    <li><a href="{{route('user-login')}}">login</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                </ul>
                            </li>

                            <li><a href="about.html"> about Us</a></li>
                            <li><a href="contact.html">  Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header_block_right">
                    <ul>
                        <li class="search_bar"><a href="javascript:void(0)"><i class="ion-ios-search-strong"></i></a> </li>
                        <li class="setting_container"><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a> </li>
                        <li class="mini_cart_wrapper"><a href="javascript:void(0)"><i class="ion-bag"></i>{{Session::has('cart') ? '$' : ''}}{{Session::has('cart') ? Session::get('cart')->totalPrice : ''}} <span>{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span></a>
                            <!--mini cart-->
                            <div class="mini_cart mini_cart_four">
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Condimentum Watches</a>
                                        <span class="quantity">Qty: 1</span>
                                        <span class="price_cart">$60.00</span>
                                    </div>
                                    <div class="product-removal">
                                        <button class="remove-product">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </button>
                                    </div>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Officiis debitis</a>
                                        <span class="quantity">Qty: 1</span>
                                        <span class="price_cart">$69.00</span>
                                    </div>
                                    <div class="product-removal">
                                        <button class="remove-product">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </button>
                                    </div>
                                </div>
                                <div class="mini_cart_table">
                                    <div class="cart_total">
                                        <span>Subtotal:</span>
                                        {{--<span class="price">$138.00</span>--}}
                                        <span class="price">{{Session::has('cart') ? '$' : ''}}{{Session::has('cart') ? Session::get('cart')->totalPrice : ''}}</span>
                                    </div>
                                </div>
                                <div class="mini_cart_footer">
                                    <div class="cart_button">
                                        <a href="cart.html">View cart</a>
                                        <a href="checkout.html">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!--mini cart end-->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--header container end-->
    </div>
</header>
<!--header area end-->


<!--Offcanvas menu area start-->
<div class="off_canvars_overlay">

</div>
<div class="Offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <span>MENU</span>
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="Offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="header_top_right">
                        <div class="header_shipping">
                            <a href="#">Free Shipping on order over $99</a>
                        </div>
                        <div class="header_social">
                            <ul>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header_block_right">
                        <ul>
                            <li class="mini_cart_wrapper"><a href="javascript:void(0)"><i class="ion-bag"></i> <span>5</span></a>
                                <!--mini cart-->
                                <div class="mini_cart">
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">Condimentum Watches</a>

                                            <span class="quantity">Qty: 1</span>
                                            <span class="price_cart">$60.00</span>

                                        </div>
                                        <div class="product-removal">
                                            <button class="remove-product">
                                                Remove
                                            </button>
                                        </div>
                                    </div>
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">Officiis debitis</a>
                                            <span class="quantity">Qty: 1</span>
                                            <span class="price_cart">$69.00</span>
                                        </div>
                                        <div class="product-removal">
                                            <button class="remove-product">
                                                Remove
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mini_cart_table">
                                        <div class="cart_total">
                                            <span>Subtotal:</span>
                                            <span class="price">$138.00</span>
                                        </div>
                                    </div>
                                    <div class="mini_cart_footer">
                                        <div class="cart_button">
                                            <a href="cart.html">View cart</a>
                                            <a href="checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                                <!--mini cart end-->
                            </li>
                            <li class="setting_container"><a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                                <div class="setting_wrapper">
                                    <div class="setting_close_btn">
                                        <i class="ion-android-close btn-close"></i>
                                    </div>
                                    <div class="logo">
                                        <a href="index.html"><img src="assets/img/logo/logo-2.png" alt=""></a>
                                    </div>
                                    <div class="header_description">
                                        <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart themes and provide premium and dedicated support to our products.</p>
                                    </div>
                                    <div class="top_links">
                                        <ul>
                                            <li><span>My Account</span>
                                                <ul class="sub_links">
                                                    <li><a href="login.html"> Register</a></li>
                                                    <li><a href="login.html"> Login</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="setting_social">
                                        <ul>
                                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                            <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children">
                                <a href="/"> Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">pages </a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">services</a></li>
                                    <li><a href="faq.html">Frequently Questions</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                    <li><a href="{{route('user-login')}}">login</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="my-account.html">my account</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="about.html">about Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="contact.html"> Contact Us</a>
                            </li>
                        </ul>
                    </div>

                    <div class="Offcanvas_footer">
                        <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                        <ul>
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Offcanvas menu area end-->
