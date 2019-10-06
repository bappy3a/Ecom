<?php
/*Route::get('/', function () {
    return view('frontEnd.index');
});*/
/*
|--------------------------------------------------------------------------
| FrontEnd Start
|--------------------------------------------------------------------------
*/
Route::get('/','frontendController@index');
//Route::get('product-details','frontendController@product_details')->name('product-details');
Route::get('product-details/{id}','frontendController@product_details')->name('product-details');

Route::get('account','frontendController@account')->name('account');
Route::get('user-login','frontendController@login')->name('user-login');
Route::post('user-login-action','Auth\LoginController@login')->name('user-login-action');
Route::get('logout','Auth\LoginController@logout')->name('logout');
Route::post('user-registration','frontendController@registration')->name('user-registration');


/*
|--------------------------------------------------------------------------
| Cart Start
|--------------------------------------------------------------------------
*/
Route::get('cart','frontendController@cart')->name('cart');



Route::get('/addcart-to-sale/{id}','frontendController@getAddToCartSale')->name('cart-top');
Route::get('addToCart/{id}','frontendController@addToCart')->name('addToCart');

/*
|--------------------------------------------------------------------------
| Cart End
|--------------------------------------------------------------------------
*/





/*
|--------------------------------------------------------------------------
| Admin Authentication Start
|--------------------------------------------------------------------------
*/
Route::get('login','Auth\AdminLoginController@LoginForm')->name('login');
Route::get('admin-signup','AdminController@create')->name('admin-signup');
Route::post('admin-store','AdminController@store')->name('admin-store');
Route::post('admin-login','Auth\AdminLoginController@login')->name('admin-login');
Route::get('admin-logout','Auth\AdminLoginController@logout')->name('admin-logout');
/*
|--------------------------------------------------------------------------
| Admin Authentication End
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Seller Route Start
|--------------------------------------------------------------------------
*/
Route::resource('adminseller','SelleraController');
Route::any('approveSeller/{id}','SelleraController@approveSeller')->name('approveSeller');
Route::any('suspendSeller/{id}','SelleraController@suspendSeller')->name('suspendSeller');
Route::any('deactiveSeller/{id}','SelleraController@deactiveSeller')->name('deactiveSeller');

Route::get('seller-login','Auth\SellerLoginController@showloginform');
Route::post('seller-login','Auth\SellerLoginController@login');
Route::get('seller-logout','Auth\SellerLoginController@logout');
Route::get('/productshowtable','SellerController@showproduct');
Route::get('/add-product','SellerController@showformaddproduct');
Route::get('/findcategory','SellerController@findcatid');
Route::post('/product-add','SellerController@addproduct')->name('addproduct');
Route::any('productdestroy/{id}','SellerController@productdestroy')->name('productdestroy');
Route::any('productedite/{id}','SellerController@productedite')->name('seller.productedite');
Route::any('updateproduct/{id}','SellerController@updateproduct')->name('seller.updateproduct');

Route::get('/findbrandselle','SellerController@findbrand');


/*
|--------------------------------------------------------------------------
| Admin Start
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard','AdminController@index')->name('dashboard');
//    Resource For Patch method:
    Route::resource('patch','AdminController');

//   Category:
    Route::get('categories','AdminController@categories')->name('categories');
    Route::post('category_store','AdminController@category_store')->name('category_store');
    Route::post('category_update/{id}','AdminController@category_update')->name('category_update');
    Route::get('category_destroy/{id}','AdminController@category_destroy')->name('category_destroy');
    Route::get('category_active/{id}','AdminController@category_active')->name('category_active');
    Route::get('category_deactive/{id}','AdminController@category_deactive')->name('category_deactive');
    

    //   SubCategory:
    Route::post('subcategory_store','AdminController@subcategory_store')->name('subcategory_store');
    Route::post('subcategory_update','AdminController@subcategory_update')->name('subcategory_update');
    Route::get('subcategory_destroy/{id}','AdminController@subcategory_destroy')->name('subcategory_destroy');

    //   Brand:
    Route::get('brands','AdminController@brands')->name('brands');
    Route::post('brand_store','AdminController@brand_store')->name('brand_store');
    Route::post('brand_update/{id}','AdminController@brand_update')->name('brand_update');
    Route::get('brand_destroy/{id}','AdminController@brand_destroy')->name('brand_destroy');
    Route::get('brand_active/{id}','AdminController@brand_active')->name('brand_active');
    Route::get('brand_deactive/{id}','AdminController@brand_deactive')->name('brand_deactive');


    Route::get('get-class-list','AdminController@getClassList');
    Route::get('get-brand-list','AdminController@getBrandList');


//   Products:
    Route::get('products','AdminController@products')->name('products');
    Route::post('product_store','AdminController@product_store')->name('product_store');
    Route::post('product_update/{id}','AdminController@product_update')->name('product_update');
    Route::get('product_destroy/{id}','AdminController@product_destroy')->name('product_destroy');
    Route::get('product_active/{id}','AdminController@product_active')->name('product_active');
    Route::get('product_deactive/{id}','AdminController@product_deactive')->name('product_deactive');


    //   Logo Dynamic:
    Route::get('logo','AdminController@addlogo')->name('logo');
    Route::post('storelogo','AdminController@storelogo')->name('storelogo');
    Route::get('logo-index','AdminController@alllogo')->name('logo-index');
    Route::get('deletelogo/{id}','AdminController@deletelogo')->name('deletelogo');
    //   Slider Dynamic:
    Route::get('slider-index','AdminController@allslider')->name('slider-index');
    Route::get('editslider/{id}','AdminController@editslider')->name('editslider');
    Route::post('updateslider/{id}','AdminController@updateslider')->name('updateslider');
    Route::get('deleteslider/{id}','AdminController@deleteslider')->name('deleteslider');
    Route::get('slider','AdminController@addslider')->name('slider');
    Route::post('storeslider','AdminController@storeslider')->name('storeslider');
//   Contact Dynamic:
    Route::get('contactinfo','AdminController@contactinfo_create')->name('contactinfo');
    Route::get('contactinfo-index','AdminController@contactinfo')->name('contactinfo-index');
    Route::patch('contactinfo_store','AdminController@contactinfo_store')->name('contactinfo_store');

    Route::get('admin-add-product','AdminController@addproduct')->name('admin-add-product');

    Route::any('admin-all-product','AdminController@allproduct')->name('admin-all-product');
    Route::get('admin-admin-product','AdminController@adminpostproduct')->name('admin-admin-product');
    Route::get('admin-edite-product/{id}','AdminController@adminediteproduct')->name('admin-edite-product');
    Route::any('admin-updateproduct/{id}','AdminController@adminupdateproduct')->name('admin-updateproduct');
    Route::post('addproduct','AdminController@productadd');
    Route::any('admin-publish-product/{id}','AdminController@adminpublishproduct')->name('admin-publish-product');
    Route::any('admin-unpublish-product/{id}','AdminController@adminunpublishproduct')->name('admin-unpublish-product');


    Route::get('/findbrand','AdminController@findbrand');
});
/*
|--------------------------------------------------------------------------
| Admin End
|--------------------------------------------------------------------------
*/

Route::get('/clear', function() {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    return 'Cleared!';
});
