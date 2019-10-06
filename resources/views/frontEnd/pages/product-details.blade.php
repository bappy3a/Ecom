@extends('frontEnd.master')
@section('content')
<div class="product_container">
    <div class="container">
        <!--product details start-->
        <div class="product_details product_sidebar">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                       {{-- <div class="widget_list widget_filter">
                            <h2>Price</h2>
                            <form action="#">
                                <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 1.4%; width: 98.6%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 1.4%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span></div>
                                <button type="submit">Filter</button>
                                <input type="text" name="text" id="amount">
                            </form>
                        </div>--}}
                        <div class="widget_list">
                            <h2>Brand</h2>
                            <ul>
                                <li>
                                    @foreach($categories as $category)
                                        @foreach($category->brands as $brand)
                                    <a href="#">{{$brand->name}} <span>(6)</span></a>
                                            @endforeach
                                        @endforeach
                                </li>
                            </ul>
                        </div>
                        {{--<div class="widget_list">
                            <h2>Size</h2>
                            <ul>
                                <li>
                                    <a href="#">Size 1  <span>(6)</span></a>
                                </li>
                                <li>
                                    <a href="#"> Size 2 <span>(8)</span></a>
                                </li>
                                <li>
                                    <a href="#">Size 3 <span>(10)</span></a>
                                </li>
                                <li>
                                    <a href="#"> Size 4 <span>(6)</span></a>
                                </li>

                            </ul>
                        </div>--}}
                       {{-- <div class="widget_list">
                            <h2>Weight</h2>
                            <ul>
                                <li>
                                    <a href="#">Weight 1  <span>(6)</span></a>
                                </li>
                                <li>
                                    <a href="#"> Weight 2 <span>(8)</span></a>
                                </li>
                                <li>
                                    <a href="#">Weight 3 <span>(10)</span></a>
                                </li>
                                <li>
                                    <a href="#"> Weight 4 <span>(6)</span></a>
                                </li>

                            </ul>
                        </div>--}}
                        <div class="widget_list widget_categories">
                            <h2>categories</h2>
                            <ul>
                                <li>
                                    <a href="#">Categories1 <span>(6)</span></a>
                                </li>
                                <li>
                                    <a href="#">Categories2 <span>(10)</span></a>
                                </li>
                                <li>
                                    <a href="#">Categories3 <span>(4)</span></a>
                                </li>
                                <li>
                                    <a href="#">Categories4 <span>(10)</span></a>
                                </li>
                                <li>
                                    <a href="#">Categories5 <span>(8)</span></a>
                                </li>

                            </ul>
                        </div>
                        <div class="shop_sidebar_banner">
                            <a href="#"><img src="assets/img/bg/banner31.jpg" alt=""></a>
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="product_container_inner mb-60">
                        <div class="product_right_sidebar">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <div class="product-details-tab">
                                        <div id="img-1" class="zoomWrapper single-zoom">
                                            <a href="#">
                                                <img id="zoom1" src="/image/product/{{$product->image}}" data-zoom-image="assets/img/product/productbig1.jpg" alt="big-1">
                                            </a>
                                        </div>
                                        <div class="single-zoom-thumb">
                                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                                <li>
                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="/image/product/{{$product->image1}}" data-zoom-image="/image/product/{{$product->image1}}">
                                                        <img src="/image/product/{{$product->image1}}" alt="zo-th-1"/>
                                                    </a>

                                                </li>
                                                <li >
                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig3.jpg" data-zoom-image="/image/product/{{$product->image2}}">
                                                        <img src="/image/product/{{$product->image2}}" alt="zo-th-1"/>
                                                    </a>

                                                </li>
                                                <li >
                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig4.jpg" data-zoom-image="/image/product/{{$product->image3}}">
                                                        <img src="/image/product/{{$product->image3}}" alt="zo-th-1"/>
                                                    </a>

                                                </li>
                                                <li >
                                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig5.jpg" data-zoom-image="/image/product/{{$product->image}}">
                                                        <img src="/image/product/{{$product->image}}" alt="zo-th-1"/>
                                                    </a>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="product_d_right">
                                        <form action="#">

                                            <h1>{{$product->name}}</h1>
                                            <div class="product_nav">
                                                <ul>
                                                    <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                                    <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                                </ul>
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
                                                <span class="current_price">{{$product->price}}</span>
                                                {{--<span class="old_price">$80.00</span>--}}

                                            </div>
                                            <div class="product_desc">
                                                <p>{{$product->details}}</p>
                                            </div>
                                            {{--  <div class="product_variant color">
                                                  <h3>Available Options</h3>
                                                  <label>color</label>
                                                  <ul>
                                                      <li class="color1"><a href="#"></a></li>
                                                      <li class="color2"><a href="#"></a></li>
                                                      <li class="color3"><a href="#"></a></li>
                                                      <li class="color4"><a href="#"></a></li>
                                                  </ul>
                                              </div>--}}
                                            <div class="product_variant quantity">
                                                <label>quantity</label>
                                                <input min="0" max="100" value="1" type="number">
                                                <a class="btn-outline-success"> <i class="ion-bag"></i> add to cart</a>
                                            </div>
                                            <div class="product_meta">
                                                <span>Category: <a href="#">Clothings</a></span>
                                            </div>

                                        </form>
                                        <div class="priduct_social">
                                            <ul>
                                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>
                                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>
                                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>
                                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>
                                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--product info start-->
                        <div class="product_d_info sidebar">
                            <div class="product_d_inner ">
                                <div class="product_info_button">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Specification</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (1)</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="info" role="tabpanel">
                                        <div class="product_info_content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                            <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sheet" role="tabpanel">
                                        <div class="product_d_table">
                                            <form action="#">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td class="first_child">Compositions</td>
                                                        <td>Polyester</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Styles</td>
                                                        <td>Girly</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Properties</td>
                                                        <td>Short Dress</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                        <div class="product_info_content">
                                            <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                                        <div class="reviews_wrapper">
                                            <h2>1 review for Donec eu furniture</h2>
                                            <div class="reviews_comment_box">
                                                <div class="comment_thmb">
                                                    <img src="assets/img/blog/comment2.jpg" alt="">
                                                </div>
                                                <div class="comment_text">
                                                    <div class="reviews_meta">
                                                        <div class="star_rating">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <p><strong>admin </strong>- September 12, 2018</p>
                                                        <span>roadthemes</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="comment_title">
                                                <h2>Add a review </h2>
                                                <p>Your email address will not be published.  Required fields are marked </p>
                                            </div>
                                            <div class="product_ratting mb-10">
                                                <h3>Your rating</h3>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_review_form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="review_comment">Your review </label>
                                                            <textarea name="comment" id="review_comment"></textarea>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <label for="author">Name</label>
                                                            <input id="author" type="text">

                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <label for="email">Email </label>
                                                            <input id="email" type="text">
                                                        </div>
                                                    </div>
                                                    <button type="submit">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--product info end-->
                    </div>


                </div>
            </div>
        </div>
        <!--product details end-->
    </div>
</div>
@endsection
