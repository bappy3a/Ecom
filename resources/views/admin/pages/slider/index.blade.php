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
                            <a class="btn btn-primary" href="{{route('slider')}}">Add Slider</a>
                        </div>
                    </div>
                    <div class="bst-block-content">
                        <div class="dataTables_wrapper">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <td>Item Number</td>
                                        <td>Heading1</td>
                                        <td>Heading2</td>
                                        <td>Description</td>
                                        <td>Image</td>
                                        <td>Action</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
$serial=0
@endphp
                                    @foreach($slider as $slider)
                                    <tr>
                                        <td class="text-dark weight-600">{{++$serial}}</td>
                                        <td class="text-dark weight-600">{{$slider->heading_1}} </td>
                                        <td>{{$slider->heading_2}}</td>
                                        <td>{{$slider->description}}</td>
                                        <td><img src="/image/slider/{{$slider->slider_image}}" width="60px" height="auto"></td>
                                        <td class="text-center">
                                            <a href="{{route('editslider',['id'=>$slider->id])}}"><i class="fas fa-pencil-alt">Edit</i></a>
                                            &nbsp;
                                            <a href="{{route('deleteslider',['id'=>$slider->id])}}" onclick="return confirm('Confirm Delete?')"><i class="mdi mdi-delete font-18">Delete</i></a>
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
