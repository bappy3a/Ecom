@extends('admin.admin_master')
@section('title','Seller List')
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
<section class="content-header">
	<div class="container-fluid">
	  <div class="row mb-2">
	    <div class="col-sm-6">
	      <h1>Sellert</h1>
	    </div>
	    <div class="col-sm-6">
	      <a href="{{ route('adminseller.create') }}" class="btn btn-primary btn-sm float-right">
	      	<i class="fa fa-user-plus"></i> 
	      	Add New Seller
	      </a>
	    </div>
	  </div>
	</div><!-- /.container-fluid -->
</section>

 <!-- Main content -->
 <section class="content">
   <div class="row">
     <div class="col-12">
       <div class="card">
         <div class="card-header">
           <h3 class="card-title">All Seller List</h3>
         </div>
         <!-- /.card-header -->
         <div class="card-body">
           <table id="example1" class="table table-bordered table-striped">
             <thead>
             <tr>
               <th width="5%">Sl</th>
               <th width="15%">Image</th>
               <th width="20%">Name</th>
               <th width="25%">Email</th>
               <th width="10%">Porducts</th>
               <th width="10%">State</th>
               <th width="5%">Action</th>
             </tr>
             </thead>
             <tbody>
             <tr>
               @foreach($sellers as $key=>$seller)
						<tr>
							<td>{{ $key+1 }}</td>
							<td><img width="60px" height="60px" src="{{ asset($seller->image) }}" alt="{{ $seller->name }}"></td>
							<td>{{ $seller->name }}</td>
							<td>{{ $seller->email }}</td>
							<td>63</td>
							<td>
								@if($seller->state == 'active')
									<spne class="btn btn-success btn-sm">{{ ucfirst($seller->state) }}</spne>
								@elseif($seller->state == 'suspend')
									<spne class="btn btn-warning btn-sm">{{ ucfirst($seller->state) }}</spne>
								@else
									<spne class="btn btn-danger btn-sm">{{ ucfirst($seller->state) }}</spne>
								@endif
							</td>
							<td>
								<div class="btn-group dropleft">
								  <a class="btn btn-secondary btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    <i class="fas fa-ellipsis-h"></i>
								  </a>

								  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									

                            <button type="button" class="dropdown-item" onclick="approveSeller({{ $seller->id }})">
                                <i class="fas fa-check-circle"></i> Active
                            </button>
                            <form method="post" action="{{ route('approveSeller',$seller->id) }}" id="approval-form-{{ $seller->id }}" style="display: none">
                                @csrf
                                @method('PUT')
                            </form>

                            <button type="button" class="dropdown-item" onclick="suspendSeller({{ $seller->id }})">
                                <i class="fas fa-hourglass-start"></i> Suspend
                            </button>
                            <form method="post" action="{{ route('suspendSeller',$seller->id) }}" id="susspend-form-{{ $seller->id }}" style="display: none">
                                @csrf
                                @method('PUT')
                            </form>

                            <button type="button" class="dropdown-item" onclick="deactiveSeller({{ $seller->id }})">
                                <i class="fas fa-ban"></i> Deactive
                            </button>
                            <form method="post" action="{{ route('deactiveSeller',$seller->id) }}" id="deactive-form-{{ $seller->id }}" style="display: none">
                                @csrf
                                @method('PUT')
                            </form>

									<button class="dropdown-item" type="button" onclick="deleteSeller({{ $seller->id }})">

										<i class="fas fa-trash-alt"></i> Delete
                           </button>

                           <form id="delete-form-{{ $seller->id }}" action="{{ route('adminseller.destroy',$seller->id) }}" method="POST" style="display: none;">
                               @csrf
                               @method('DELETE')
                           </form>

								  </div>
								</div>
							</td>
						</tr>
               @endforeach
             </tr>
             </tbody>
           </table>
         </div>
         <!-- /.card-body -->
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

    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function deleteSeller(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }

      function approveSeller(id) {
            swal({
                title: 'Are you sure?',
                text: "You went to approve this Seller ",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Approve it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('approval-form-'+ id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'The post remain pending :)',
                        'info'
                    )
                }
            })
        }

      function suspendSeller(id) {
            swal({
                title: 'Are you sure?',
                text: "You went to Suspend this Seller ",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Suspend it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('susspend-form-'+ id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'The post remain pending :)',
                        'info'
                    )
                }
            })
        }

              function deactiveSeller(id) {
            swal({
                title: 'Are you sure?',
                text: "You went to Deactive this Seller ",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Deactive it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('deactive-form-'+ id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'The post remain pending :)',
                        'info'
                    )
                }
            })
        }
    </script>
@endsection