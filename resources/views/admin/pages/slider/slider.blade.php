@extends('admin.admin_master')
@section('title','Slider')
@section('content')
    <section class="content">
      <div class="row">
        <div class="col-12">
            <div class="caption">
    <div class="bst-content-wrapper">
        <div class="bst-content">
            <div class="form-validation-style">
                <div class="bst-block">
                    <div class="bst-block-title mrgn-b-lg">
                        <h3>Slider Information</h3>
                    </div>
                    <div class="bst-block-content">
                        <form action="{{ route('storeslider')}}" method="post" id="bst_demo_form1" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4 col-12">Heading 1<span class="required"> * </span> </label>
                                    <div class="col-md-6 col-sm-8 col-12">
                                        <input type="text" name="heading_1" class="form-control" /> </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4 col-12">Heading 2<span class="required"> * </span> </label>
                                    <div class="col-md-6 col-sm-8 col-12">
                                        <input type="text" name="heading_2" class="form-control" /> </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4 col-12">Description <span class="required"> * </span> </label>
                                    <div class="col-md-6 col-sm-8 col-12">
                                        <textarea class="form-control" name="description"  rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4 col-12">Image <span class="required"> * </span> </label>
                                    <div class="col-md-6 col-sm-8 col-12">
                                        <input type="file" name="slider_image" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection
@section('js')
@endsection
@section('css')
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
   <link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection



