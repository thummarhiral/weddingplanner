@extends('layouts.master')

@section('content')
<div class="row">
	<a href="{{ url('admin/event/create') }}">Add Event</a>
			</div>	        
<div class="row">
	<div class="col-lg-12" style="margin-top: 15px;">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            Event Lists
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
	                            <th>Location</th>
	                            <th>Description</th>
	                            <th>Address</th>
	                            <th>City</th>
	                            <th>State</th>
	                            <th>Contact</th>
	                            <th>Price</th>
	                            <th>Image Upload</th>
	                            <th>Status</th>
	                            <th>Actions</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	@forelse ($events as $event)
	                    		 <tr>
		                            <td>{{ $event->id }}</td>
		                            <td>{{ $event->name }}</td>
		                            <td>{{ $event->location }}</td>
		                            <td>{{ $event->description }}</td>
		                            <td>{{ $event->address  }}</td> 
		                            <td>{{ $event->city}}</td>
		                            <td>{{ $event->state}}</td>
		                            <td>{{ $event->contact}}</td>
		                            <td>{{ $event->price}}</td>
		                            <td>{{ $event->image upload}}</td>
		                            

		                            <td>{{ $event->status=="1"?'Active':'Inactive' }}</td>
		                            <td><a href="{{ url('admin/events/'.$event->id.'/edit') }}">Edit</a></td>
		                            <td><form action="{{ url('admin/events/'.$event->id.'') }}" method="post">
          									@csrf
	                                        @method('DELETE')
	                                        <button class="btn btn-danger" type="submit">Delete</button>
	                                    </form>
                                    </td>
                        		</tr> -->
							@empty
							    <tr class="text-danger">
		                            <td colspan="4">No Events Found!</td>
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