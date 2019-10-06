<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Brand;
use App\Cart;
use App\Category;
use App\Customer;
use App\Logo;
use App\Product;
use App\Slider;
use App\Subcategory;
use App\User;
use Illuminate\Http\Request;
use Session;

class FrontendController extends Controller
{
    public function index(){
        $sliders=Slider::all();
        $categories=Category::where('publication_status',1)->get();
        $subcategories=Subcategory::all();
        $brands=Brand::where('publication_status',1)->get();
        $products=Product::where('publication_status',1)->get();
        return view('frontEnd.index',compact('sliders','categories','subcategories','brands','products'));
    }
    public function product_details($id){
        $product=Product::find($id);
        $categories=Category::where('publication_status',1)->get();
        return view('frontEnd.pages.product-details',compact('product','categories'));
    }
    public function cart(){
        return view('frontEnd.pages.cart');
    }
    public function ts(){
        return view('frontEnd.pages.cart');
    }

    public function getAddToCartSale(Request $request, $id){
        $offSale = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addSale($offSale, $offSale->id);

        $request->session()->put('cart', $cart);
        return  redirect()->back();

    }



    public function addToCart(Request $request, $id){
        $publishedProduct = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($publishedProduct, $publishedProduct->id);

        $request->session()->put('cart', $cart);
        return  redirect()->back();

    }



    public function account(){
        return view('frontEnd.pages.my-account');
    }
    public function login(){
        return view('frontEnd.pages.login');
    }
    public function registration(Request $request)
    {
        //return $request;

        $this->validate($request,[
            'name' =>'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if($request->password_confirmation===$request->password){
            if( Customer::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ])){
                return redirect()->route('user-login')->with('msg','Successfully Registration Now Log In with your email and Password!');
            }
        }
        return redirect()->route('user-login')->with('msg','Error!');;
    }
}
