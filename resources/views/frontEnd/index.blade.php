@extends('frontEnd.master')
@section('content')
<!--slider area start-->
<section class="slider_section mb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="categories_menu">
                    <div class="categories_title">
                        <h2 class="categori_toggle">Shop by Categories</h2>
                    </div>
                    <div class="categories_menu_toggle">
                        <ul>
                            {{--@foreach($categories as $category)
                                <li class="menu_item_children categorie_list"><a href="#"> {{$category->name}} <i class="fa fa-angle-right"></i></a>
                                    <ul class="categorie_dropdown_menu">
                                        @foreach($category->subcategories as $subcategory)
                                            <li><a href="#"> {{$subcategory->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach--}}
                                @foreach($categories as $category)
                                <li class="menu_item_children categorie_list"><a href="#"> {{$category->name}} <i class="fa fa-angle-right"></i></a>
                                    <ul class="categorie_dropdown_menu">
                                        @foreach($category->subcategories as $subcategory)
                                        <li class="menu_item_children"><a href="#">{{$subcategory->name}} <i class="fa fa-angle-right"></i></a>
                                            @endforeach
                                            <ul class="categorie_multilabel_menu">
                                                @foreach($category->brands as $brand)
                                                <li><a href="#">{{$brand->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                @endforeach

                        </ul>
                    </div>
                </div>

                        <h2 class="categori_toggle">Shop by Categories</h2>


            </div>
            <div class="col-lg-9">
                <div class="slider_area slider_four owl-carousel">
                    @foreach($sliders as $slider)
                    <div class="single_slider d-flex align-items-center" data-bgimg="/image/slider/{{$slider->slider_image}}">
                        <div class="slider_content slider_c_four">
                            <h1>{{$slider->heading_1}}</h1>
                            <h3><span>{{$slider->heading_2}}</span> 30%</h3>
                            <p>{{$slider->description}}</p>
                            <a href="#">shop now</a>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>

</section>
<!--slider area end-->

<!--shipping area start-->
<section class="shipping_area shipping_four mb-60">
    <div class="container">
        <div class="shipping_inner">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <i class="ion-android-plane"></i>
                        </div>
                        <div class="shipping_content">
                            <h2>Free Uk Standard Delivery</h2>
                            <p>Designated day delivery</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <i class="ion-social-dropbox"></i>
                        </div>
                        <div class="shipping_content">
                            <h2>Freshyly Prepared Ingredients</h2>
                            <p>Made for your delivery date</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <i class="ion-load-a"></i>
                        </div>
                        <div class="shipping_content">
                            <h2>98% Of Anta Clients</h2>
                            <p>Reach their personal goals set</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <i class="ion-trophy"></i>
                        </div>
                        <div class="shipping_content">
                            <h2>Winner Of 15 Awards</h2>
                            <p>Healthy food and drink 2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--shipping area end-->

<!--new product area start-->
<section class="product_area product_four mb-30">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title title_style4">
                    <h3>Our Products</h3>
                    <p>Browse the collection of our new products</p>
                </div>
            </div>
        </div>
        <div class="product_wrapper product_color4">
                    <div class="row product_slick_column4">
                        {{-- @foreach($products as $product)
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{route('product-details',['id'=>$product->id])}}"><img src="/image/product/{{$product->image}}" alt=""></a>
                                    <a class="secondary_img" href="{{route('product-details',['id'=>$product->id])}}"><img src="/image/product/{{$product->image}}" alt=""></a>
                                    
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="{{route('cart')}}" title="add to cart"><i class="ion-bag"></i></a></li>
                                            <li class="quick_view"><a href="#" data-toggle="modal" data-target="#product-details{{$product->id}}" title="Quick View"><i class="ion-eye"></i></a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h4><a href="{{route('product-details',['id'=>$product->id])}}">{{$product->name}}</a></h4>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="price-container">
                                        <div class="price_box">
                                            <span class="current_price">{{$product->price}}</span>
                                           
                                        </div>
                                        <div class="wishlist_btn">
                                            <a href="{{route('cart-top',['id'=>$product->id])}}" title="wishlist"><i class="ion-android-cart"></i></a>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                            @endforeach --}}
                    </div>
        </div>
    </div>
</section>
<!--new product area end-->

{{--<!--banner area start-->
<div class="banner_area banner_four mb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="single_banner">
                    <div class="banner_thumb">
                        <a href="shop.html"><img src="assets/img/bg/banner25.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single_banner">
                    <div class="banner_thumb">
                        <a href="shop.html"><img src="assets/img/bg/banner26.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single_banner">
                    <div class="banner_thumb">
                        <a href="shop.html"><img src="assets/img/bg/banner27.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--banner area end-->
<!--banner area start-->
<div class="banner_area banner_three_column2 mb-56">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-6 col-md-6">
                <div class="single_banner">
                    <div class="banner_thumb">
                        <a href="shop.html"><img src="assets/img/bg/banner28.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single_banner">
                    <div class="banner_thumb">
                        <a href="shop.html"><img src="assets/img/bg/banner29.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--banner area end-->

<!--custom product css here-->
<div class="custom_produtc_area custom_product_four">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="small_product">
                    <div class="small_product_title">
                        <h2>New Products</h2>
                    </div>
                    <div class="small_product_container">
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product36.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product37.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Ipoly and Bark Eames Styl...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product38.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product39.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Terra Xpress HE Cooking P...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product40.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product41.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Robert Welch Knife Block ...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product42.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product43.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Pyoly and Bark Eames Styl...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product44.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product45.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">2 Person Outdoor Camp...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product46.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product47.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Ipoly and Bark Eames Styl...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="small_product">
                    <div class="small_product_title">
                        <h2>Most Viewed</h2>
                    </div>
                    <div class="small_product_container">
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product48.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product47.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Ipoly and Bark Eames Styl...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product46.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product45.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Puoly and Bark Eames Styl...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product44.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product43.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Minimalistic Wall Clock d...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product42.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product41.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Egyptian Stool Carl Hanse..</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product40.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product39.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Flash Furniture Alonza Se...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product38.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product37.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Ipoly and Bark Eames Styl...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="small_product">
                    <div class="small_product_title">
                        <h2>New Products</h2>
                    </div>
                    <div class="small_product_container">
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product42.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product41.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Ipoly and Bark Eames Styl...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product40.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product39.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Terra Xpress HE Cooking P...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product38.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product37.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Robert Welch Knife Block ...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product36.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product37.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Pyoly and Bark Eames Styl...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product38.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product39.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">2 Person Outdoor Camp...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product40.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product41.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Ipoly and Bark Eames Styl...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="small_product">
                    <div class="small_product_title">
                        <h2>Most Viewed</h2>
                    </div>
                    <div class="small_product_container">
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product42.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product43.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Ipoly and Bark Eames Styl...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product44.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product45.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Puoly and Bark Eames Styl...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product46.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product47.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Minimalistic Wall Clock d...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product48.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product40.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Egyptian Stool Carl Hanse..</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product47.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product41.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Flash Furniture Alonza Se...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="small_product_list">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{route('product-details')}}"><img src="assets/img/product/product46.jpg" alt=""></a>
                                <a class="secondary_img" href="{{route('product-details')}}"><img src="assets/img/product/product42.jpg" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h4><a href="{{route('product-details')}}">Ipoly and Bark Eames Styl...</a></h4>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--custom product css end-->

<!--brand newsletter area start-->
<div class="brand_area brand_four">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand_container owl-carousel">
                    <div class="single_brand">
                        <a href="#"><img src="assets/img/brand/brand.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="assets/img/brand/brand1.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="assets/img/brand/brand2.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="assets/img/brand/brand3.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="assets/img/brand/brand4.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="assets/img/brand/brand5.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="assets/img/brand/brand1.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--brand area end-->--}}

<div class="modal fade" id="product-details{{$product->id}}" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal_body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="modal_tab">
                                <div class="tab-content product-details-large">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="/image/product/{{$product->image}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="/image/product/{{$product->image1}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="/image/product/{{$product->image2}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="/image/product/{{$product->image3}}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_tab_button">
                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                        <li >
                                            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="/image/product/{{$product->image}}" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="/image/product/{{$product->image1}}" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="/image/product/{{$product->image2}}" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="/image/product/{{$product->image3}}" alt=""></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2>{{$product->name}}</h2>
                                </div>
                                <div class="modal_price mb-10">
                                    <span class="new_price">{{$product->price}}</span>
                                    {{--<span class="old_price" >$78.99</span>--}}
                                </div>
                                <div class="modal_description mb-15">
                                    <p>{{$product->details}} </p>
                                </div>
                                <div class="variants_selects">
                                    <div class="variants_size">
                                        <h2>size</h2>
                                        <select class="select_option">
                                            <option selected value="1">s</option>
                                            <option value="1">m</option>
                                            <option value="1">l</option>
                                            <option value="1">xl</option>
                                            <option value="1">xxl</option>
                                        </select>
                                    </div>
                                    <div class="variants_color">
                                        <h2>color</h2>
                                        <select class="select_option">
                                            <option selected value="1">purple</option>
                                            <option value="1">violet</option>
                                            <option value="1">black</option>
                                            <option value="1">pink</option>
                                            <option value="1">orange</option>
                                        </select>
                                    </div>
                                    <div class="modal_add_to_cart">
                                        <form action="#">
                                            <input min="0" max="100" value="1" type="number">
                                            <button type="submit">add to cart</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal_social">
                                    <h2>Share this product</h2>
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
