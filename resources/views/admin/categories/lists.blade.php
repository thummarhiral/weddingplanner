@extends('layouts.master')

@section('content')
<div class="row">
	<a href="{{ url('admin/users/create') }}">Add User</a>
			</div>	        
<div class="row">
	<div class="col-lg-12" style="margin-top: 15px;">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            User Lists
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	        	@if(session()->get('success'))
             	<div class="alert alert-success">
               		{{ session()->get('success') }}  
               	</div><br />
              	@endif
	            <div class="table-responsive">
	                <table class="table">
	                    <thead>
	                        <tr>
	                            <th>#</th>
	                            <th>Name</th>
	                            <th>Description</th>
	                            <th>Image_Name</th>
	                            <th>Status</th>
	                            <th>Actions</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	@forelse ($categories as $category)
	                    		<tr>
		                            <td>{{ $categories->id }}</td>
		                            <td>{{ $categories->name }}</td>
		                            <td>{{ $categories->description }}</td>
		                            <td>{{ $categories->image_name }}</td>
		                            
		                            <td>{{ $category->status=="1"?'Active':'Inactive' }}</td>
		                            <td><a href="{{ url('admin/categories/'.$category->id.'/edit') }}">Edit</a></td>
		                            <td><form action="{{ url('admin/categories/'.$category->id.'') }}" method="post">
          									@csrf
	                                        @method('DELETE')
	                                        <button class="btn btn-danger" type="submit">Delete</button>
	                                    </form>
                                    </td>
                        		</tr>
							@empty
							    <tr class="text-danger">
		                            <td colspan="4">No User Found!</td>
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