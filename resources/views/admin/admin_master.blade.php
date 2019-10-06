<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name') }} - @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('css')
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="{{route('admin-logout')}}">
          <i class="fas fa-sign-out-alt"></i>
          Log Out
        </a>
      </li>
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link {{ (request()->routeIs('dashboard')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{ (request()->routeIs('categories','brands','products')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Catalog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('categories')}}" class="nav-link {{ (request()->routeIs('categories')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('brands')}}" class="nav-link {{ (request()->routeIs('brands')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manufacturers</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{ (request()->routeIs('product')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tshirt"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin-add-product')}}" class="nav-link {{ (request()->routeIs('admin-add-product')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
                <a href="{{route('admin-all-product')}}" class="nav-link {{ (request()->routeIs('admin-all-product')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Product</p>
                </a>
                <a href="{{route('admin-admin-product')}}" class="nav-link {{ (request()->routeIs('admin-admin-product')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Product</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{ (request()->routeIs('logo','slider-index')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('logo')}}" class="nav-link {{ (request()->routeIs('logo')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('slider-index')}}" class="nav-link {{ (request()->routeIs('slider-index')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('adminseller.index') }}" class="nav-link {{ (request()->routeIs('adminseller*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-shield"></i>
              <p>
                Sellers
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-rc.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


@yield('js')
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
<script>
  $('#productTable').DataTable();
function selectcategory(catid){
  $.ajax({
    url:"/findcategory",
    method:"GET",
    data:{'catid':catid},
    success:function(mess){
      // console.log(mess.count);
      if(mess.count>0){
        $('#subcategory').html('');
        $('#subcategory').append('<option selected="" value="">--Select Subcategory--</option>');
        $('#catid').val(catid);
        for (var i=0; i < mess.count; i++) {
          $('#subcategory').append('<option  value="'+mess.subid[i]+'">'+mess.subcat[i]+'</option>');
        }
      }else{
        $('#subcategory').html('');
        $('#subcategory').append('<option value="">--Select Subcategory--</option>');
      }
      
    }
  })
}

function brandfind(catid,subcatid){
  $.ajax({
    url:'findbrand',
    method:"GET",
    data:{'catid':catid,'subcatid':subcatid},
    success:function(mess){
      console.log(mess.count);
      $('#brand').html('');
      for (var i = 0; i < mess.count; i++) {
        $('#brand').append('<option value="'+mess.brands[i].id+'">'+mess.brands[i].name+'</option>');
      }
    }
  });
  
}


</script>

</body>
</html>
