@extends('frontEnd.master')
@section('content')
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><a href="login.html">login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="customer_login">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>login</h2>
                        @if(Session::has('msg'))
                            <h5 id="msg" style="color: #ffffff" class="alert-heading">{{session::get('msg')}}</h5>
                        @endif
                        <script>
                            setTimeout(function() {
                                $('#msg').fadeOut('fast');
                            }, 4000);
                        </script>
                        <form action="{{route('user-login-action')}}" method="post">
                            @csrf
                            <p>
                                <label>Username or email <span>*</span></label>
                                <input type="text" name="email">
                            </p>
                            <p>
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="password">
                            </p>
                            <div class="login_submit">
                                <a href="#">Lost your password?</a>
                                <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Remember me
                                </label>
                                <button type="submit">login</button>

                            </div>

                        </form>
                    </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Register</h2>
                        <form action="{{route('user-registration')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <p>
                                <label>Name  <span>*</span></label>
                                <input type="text" name="name">
                            </p>
                            <p>
                                <label>Email address  <span>*</span></label>
                                <input type="email" name="email">
                            </p>
                            <p>
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="password">
                            </p>
                            <p>
                                <label>Confirm Passwords <span>*</span></label>
                                <input type="password" name="password_confirmation">
                            </p>
                            <div class="login_submit">
                                <button type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>
@endsection
