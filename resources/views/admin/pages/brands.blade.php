@extends('admin.admin_master')
@section('title','Categories')
@section('css')
  <!-- Font Awesome -->
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
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<section class="content">
  <div class="row">
    <div class="col-12">
        <div class="caption">
    <div class="bst-content-wrapper">
        <div class="bst-content">
            <div class="data-table-style">
                <div class="bst-block pos-relative">
                    <div class="bst-block-title mrgn-b-lg">
                        <div class="caption">
                            <a href="#stack1" class="btn btn btn-success" data-toggle="modal">Create Manufacturer</a>
                            <div id="stack1" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">New Manufacturer</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form action="{{route('brand_store')}}" method="post" id="bst_demo_form1" class="form-horizontal" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-body">

                                                            <div class="col-xs-12 col-sm-12 col-md-6 input_margin_bottom input_margin_mobile">
                                                                <div class="form-group">
                                                                    <label for="selcat">Select Category</label>
                                                                    <div class="select_label">
                                                                        <select class="form-control selcat" name="category_id" id="selcat" required="required">
                                                                            <option value="">Select Category</option>
                                                                            @foreach($categories as $category)
                                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-6 input_margin_bottom input_margin_mobile">
                                                                <div class="form-group">
                                                                    <label for="selsubcat">Select Subcategory</label>
                                                                    <div class="select_label">
                                                                        <select class="form-control selsubcat" name="subcategory_id" id="selsubcat" required="required">
                                                                            <option value="">Select Subcategory</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4 col-sm-4 col-12">Name <span class="required"> * </span> </label>
                                                                <div class="col-md-6 col-sm-8 col-12">
                                                                    <input type="text" name="name" class="form-control" /> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row mrgn-all-none">
                                                                    <div class="col-sm-offset-2 col-sm-10">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox" name="publication_status" value="1" checked><span class="text-capitalize mrgn-l-xs">Publication status</span> </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-9">
                                                                    <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o fa-lg"></i> Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" class="btn btn-outline-inverse" href="#/">Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="bst-block-content">
                        <div class="dataTables_wrapper">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Brand</th>
                                        <th>Category</th>
                                        <th>Subcategory</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $serial = 0;
                                    @endphp
                                    @foreach($brands as $brand)
                                    <tr>
                                        <td>{{++$serial}}</td>
                                        <td>{{$brand->name}}</td>
                                        @if (is_null($brand->category))
                                            <td> </td>
                                        @else
                                        <td>{{$brand->category->name}}</td>
                                        @endif
                                        @if (is_null($brand->subcategory))
                                            <td> </td>
                                        @else
                                        <td>{{$brand->subcategory->name}}</td>
                                        @endif
                                        <td>
                                            @if($brand->publication_status==1)
                                                <span class="btn btn-success btn-xs"><i class="fa fa-envelope-open" aria-hidden="true"></i> Active</span>
                                            @else
                                                <span class="btn btn-warning btn-xs"><i class="fa fa-window-close-o" aria-hidden="true"></i> Deactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($brand->publication_status==1)
                                                <a class="btn btn-outline-warning btn-xs" href="{{route('brand_deactive',['id'=>$brand->id])}}">
                                                    <i class="fa fa-close" aria-hidden="true"></i>
                                                    Deactive
                                                </a>
                                            @else
                                                <a class="btn btn-outline-success btn-xs" href="{{route('brand_active',['id'=>$brand->id])}}">
                                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                                    Active
                                                </a>
                                            @endif

                                            <a href="#edit{{$brand->id}}" class="btn btn-outline-dark btn-xs" data-toggle="modal"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>

                                                <div id="edit{{$brand->id}}" class="modal fade">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edite Category</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <form action="{{ route('brand_update',['id'=>$brand->id])}}" method="post" id="bst_demo_form1" class="form-horizontal" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <div class="form-body">
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-4 col-sm-4 col-12">Name <span class="required"> * </span> </label>
                                                                                    <div class="col-md-6 col-sm-8 col-12">
                                                                                        <input type="text" name="name" value="{{$brand->name}}" data-required="1" class="form-control" /> </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <div class="row mrgn-all-none">
                                                                                        <div class="col-sm-offset-2 col-sm-10">
                                                                                    <div class="checkbox">
                                                                                       </div>
                                                                                </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-actions">
                                                                                <div class="row">
                                                                                    <div class="col-md-offset-3 col-md-9">
                                                                                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o fa-lg"></i> Save</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a data-dismiss="modal" class="btn btn-outline-inverse" href="#/">Close</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            <a href="{{route('brand_destroy',['id'=>$brand->id])}}" class="btn btn-outline-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Delete <i class="fa fa-remove" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
    <!-- /.content -->
@endsection
@section('js')
    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
        });
      });
    </script>
    <script>
        $('#selcat').on('change',function(){
            var category = $(this).val();
            if(category){
                console.log(category);
                $.ajax({
                    type:"GET",
                    url:"{{url('admin/get-class-list')}}?category_id="+category,
                    success:function(res){
                        if(res){
                            console.log(res);
                            $("#selsubcat").empty();
                            $("#selsubcat").append('<option value="">Select</option>');
                            $.each(res,function(key,value){
                                $("#selsubcat").append('<option value="'+key+'">'+value+'</option>');
                            });
                        }else{
                            $("#selsubcat").empty();
                        }
                    }
                });
            }else{
                $("#selsubcat").empty();
            }
        });
    </script>
@endsection
