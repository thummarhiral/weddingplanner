@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-lg-12" style="margin-top: 15px;">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            User Lists
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table">
	                    <thead>
	                        <tr>
	                            <th>#</th>
	                            <th>First Name</th>
	                            <th>Last Name</th>
	                            <th>Status</th>
	                            <th>Actions</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	@forelse ($users as $user)
							    <tr>
		                            <td>{{ $user->id }}</td>
		                            <td>{{ $user->first_name }}</td>
		                            <td>{{ $user->last_name }}</td>
		                            <td>{{ $user->status=="1"?'Active':'Inactive' }}</td>
		                            <td><a href="{{ url('admin/users/'.$user->id.'/edit') }}">Edit</a></td>
		                        </tr>
							@empty
							    <tr class="text-danger">
		                            <td colspan="4">No Users Found!</td>
		                        </tr>
							@endforelse
	                        
	                    </tbody>
	                </table>
	            </div>
	            <!-- /.table-responsive -->
	        </div>
	        <!-- /.panel-body -->
	    </div>
	    <!-- /.panel -->
	</div>
    <!-- /.panel -->
</div>
@endsection

@section('add_js')
<!-- DataTables JavaScript -->
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-responsive/dataTables.responsive.js') }}"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
@endsection