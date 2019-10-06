<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerLoginController extends Controller
{
    public function showloginform(){
        return view('seller.pages.login');
    }
    
    public function login(Request $request){

    	if (Auth::guard('seller')->attempt(['email'=>$request->email,'password'=>$request->password])) {
            return view('seller.index');
        }else{
            return redirect()->back()->with('msg','wrong Email or Password !');
        }
    }

    public function logout(){
    	Auth::guard('seller')->logout();
        return redirect('/seller-login')->with('msg','Successfully Log Out !');
    }
}
