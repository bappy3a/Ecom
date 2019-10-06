@extends('seller.master_seller')
@section('title','Add New Product')
@section('css')
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
@endsection
@section('js')
  <!-- jQuery -->
  <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
  <!-- Sparkline -->
  <script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>
  <!-- JQVMap -->
  <script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.world.js') }}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
  <!-- daterangepicker -->
  <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  <!-- Summernote -->
  <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
  <script src="{{ asset('seller/seller.js') }}"></script>
  <script src="{{ asset('seller/dropzone.js') }}"></script>
  <script src="{{ asset('admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>

  <script type="text/javascript">
    Dropzone.options.imageUpload = {
          maxFilesize:1,
          acceptedFiles: ".jpeg,.jpg,.png,.gif"
      };
  </script>
  <script>
    $(function () {
      // Summernote
      $('.textarea').summernote()
    })
    </script>
    <script>
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      });
  </script>

@endsection

@section('content')
   <div class="container-fluid">
     <div class="row">
       <div class="col-md-12">
         <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Input Addon</h3>
              </div>


              <form class="form-horizontal" action="{{route('addproduct')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
                    <div class="col-sm-10">
                      <input type="text" value="{{ Request::old('productname') }}"  name="productname" class="form-control {{ $errors->has('productname')? 'is-invalid':'' }}" id="inputEmail3" placeholder="Product Name">
                      <span class="text-danger errormessage">{{ $errors->has('productname')? $errors->first('productname'):'' }}</span>
                    </div>
                  </div>

                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
                    <div class="col-sm-10">
                      <select class="form-control {{ $errors->has('categoryname')? 'is-invalid':'' }}" onchange="selectcategory(this.value);"   name="categoryname" id="">
                        <option value="" selected="">--Select Category--</option>
                        @foreach ($categorys as $catname)
                          <option value="{{$catname->id}}">{{$catname->name}}</option>
                        @endforeach
                      </select>
                      <span class="text-danger errormessage">{{ $errors->has('categoryname')? $errors->first('categoryname'):'' }}</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Sub Category Name</label>
                    <div class="col-sm-10">
                    
                    <input type="hidden" id="catid">
                      <select onchange="brandfind($('#catid').val(),this.value);" class="form-control {{ $errors->has('subcategory')? 'is-invalid':'' }}" name="subcategory" id="subcategory">
                      </select>

                      <span class="text-danger errormessage">{{ $errors->has('subcategory')? $errors->first('subcategory'):'' }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Brand Name</label>
                    <div class="col-sm-10">

                      <select class="form-control"  name="brandname" id="brand">
                      </select>
                      

                      <span class="text-danger errormessage">{{ $errors->has('brandname')? $errors->first('brandname'):'' }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Product Price</label>
                    <div class="col-sm-10">
                      <input type="number" value="{{ Request::old('productprice') }}" min=0 oninput="validity.valid||(value='');" name="productprice" placeholder="Product Price" class="form-control {{$errors->has('productprice')? 'is-invalid':'' }}">

                      <span class="text-danger errormessage">{{ $errors->has('productprice')? $errors->first('productprice'):'' }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Quantity</label>
                    <div class="col-sm-10">
                      <input type="number" value="{{ Request::old('quantity') }}" min=0 oninput="validity.valid||(value='');" name="quantity" placeholder="Quantity" class="form-control {{$errors->has('quantity')? 'is-invalid':'' }}">
                      <span class="text-danger errormessage"></span>
                      <span class="text-danger errormessage">{{ $errors->has('quantity')? $errors->first('quantity'):'' }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Colors</label>
                    <div class="col-sm-10">
                      <div class="input-group my-colorpicker2">
                        <input type="text" name="color" value="{{ Request::old('color') }}" placeholder="Choose Color" class="form-control {{ $errors->has('color')? $errors->first('color'):'' }}">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fas fa-square"></i></span>
                        </div>
                      </div>
                      <span class="text-danger errormessage">{{ $errors->has('color')? $errors->first('color'):'' }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Descount</label>
                    <div class="col-sm-6">
                      <input type="number" name="descount" value="{{ Request::old('descount') }}" class="form-control" id="inputEmail3" placeholder="Descount">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Short Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" value="{{ Request::old('short_description') }}" name="short_description" rows="3" cols="50" placeholder="Place some text here"></textarea>
                      <span class="text-danger errormessage">{{ $errors->has('short_description')? $errors->first('short_description'):'' }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Long Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control textarea" value="{{ Request::old('long_description') }}" name="long_description" rows="3" cols="50" placeholder="Place some text here"></textarea>
                      <span class="text-danger errormessage">{{ $errors->has('long_description')? $errors->first('long_description'):'' }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Compositions</label>
                    <div class="col-sm-2">
                      <input type="number" value="{{ Request::old('compostitons') }}" min="0" oninput="validity.valid||(value='');" name="compostitons" placeholder="Product Price" class="form-control">
                      <span class="text-danger errormessage">{{$errors->has('compostitons')? $errors->first('compostitons'):''}}</span>
                    </div>
                    <label for="inputEmail3" class="col-sm-1 control-label">Style</label>
                    <div class="col-sm-3">
                      <input type="number" value="{{ Request::old('style') }}" min="0" oninput="validity.valid||(value='');" name="style" placeholder="Product Price" class="form-control">
                      <span class="text-danger errormessage">{{$errors->has('style')? $errors->first('style'):''}}</span>

                    </div>
                    <label for="inputEmail3" class="col-sm-2 control-label">Properties</label>
                    <div class="col-sm-2">
                      <input type="number" value="{{ Request::old('properties') }}" min="0" oninput="validity.valid||(value='');" placeholder="Product Price" name="properties" class="form-control">
                      <span class="text-danger errormessage">{{$errors->has('properties')? $errors->first('properties'):''}}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Specification</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" value="{{ Request::old('specification') }}" name="specification" rows="3" cols="50" placeholder="Place some text here"></textarea>
                      <span class="text-danger errormessage">{{$errors->has('specification')? $errors->first('specification'):''}}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
                      <input type="file" value="{{ Request::old('images') }}" class="form-control {{$errors->has('images')? $errors->has('images'):''}}" name="images[]" multiple="">
                      <span class="text-danger errormessage">{{$errors->has('images')? $errors->first('images'):''}}</span>
                    </div>
                  </div>
                
                  @if (Auth::guard('admin')->check())
                   <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 control-label">Product Status</label>
                      <div class="col-sm-10">
                        <select name="activestatus" id="" class="form-control">
                          <option selected="" value="1">Active</option>
                          <option value="0">Inactive</option>
                        </select>
                      </div>
                    </div>
                  @endif
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info btn-block"> <i class="fab fa-telegram-plane"></i> Add Product</button>
                </div>
                <!-- /.card-footer -->
              </form>



              <!-- /.card-body -->
            </div>
       </div>
     </div>
   </div>
    <!-- /.content -->
@endsection

