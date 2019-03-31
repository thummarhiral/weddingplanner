@extends('layouts.master')
@section('title', 'Create Event')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create Event
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="POST" action="{{ route('users.store') }}">
                            @csrf
                        	
        					<div class="form-group row">
        						<div class="form-group">
                                <label>Name:</label>
                                <input class="form-control" type="text" placeholder="Enter text" name="name"/>
                           
                            </div>

                            <div class="form-group">
                                <label>Location:</label>
                                <input class="form-control" type="text" placeholder="Enter text"  name="location">
                            </div>
                            <div class="form-group">
                                <label>Description:</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Address:</label>
                                <label><input type="text" name="address"></label>
                                </div>
                                <div class="form-group">
                                <label>City:</label>
                                <label><input type="text" name="city"></label>
                                </div>
                                <div class="form-group">
                                <label>state:</label>
                                <label><input type="text" name="state"></label>
                                </div> 
                                <div class="form-group">
                                <label>Contact:</label>
                                <label><input type="number" name="contact"></label>
                                </div> 
                                <div class="form-group">
                                <label>Price:</label>
                                <label><input type="number" name="price"></label>
                                </div>  
                            <div class="form-group">
                            	<div class="form-group">
                                <label>Image Upload:</label>
                                <label><input type="text" name="image upload"></label>
                                </div>
                                
                            </div>
                            <!--div class="form-group">
                                <label>Gender: </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="m" name="gender">Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="f" name="gender">Female
                                    </label>
                                </div>
                               
                            </div>

                            <button type="submit" class="btn btn-default">Save User</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@endsection