@extends('layouts.master')
@section('title', 'Edit User')

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
                Edit User
            </div>
            <div class="panel-body">
                <div class="row">
            		@if ($errors->any())
				      	<div class="alert alert-danger">
				        	<ul>
				            	@foreach ($errors->all() as $error)
				              	<li>{{ $error }}</li>
				            	@endforeach
				        	</ul>
				      	</div><br />
				    @endif
                    <div class="col-lg-6">
                        <form role="form" method="POST" action="{{ route('users.update', $user->id) }}">
                        	@method('PATCH')
        					@csrf
        					<div class="form-group row">
        						<div class="form-group">
                                <label>First_Name:</label>
                                <input class="form-control" type="text" placeholder="Enter text" name="first_name" value="{{ $user->first_name }}" />
                           
                            </div>

                            <div class="form-group">
                                <label>Last_Name:</label>
                                <input class="form-control" type="text" placeholder="Enter text"  name="last_name"value="{{ $user->last_name }}">
                            </div>
                            <div class="form-group">
                                <label>Address:</label>
                                <textarea class="form-control" rows="3" name="address"value="{{ $user->address}}"></textarea>
                            </div>
                            <div class="form-group">
                                <label>City:</label>
                                <label><input type="text" name="city"value="{{ $user->city }}"></label>
                                </div>
                                <div class="form-group">
                                <label>Pincode:</label>
                                <label><input type="number" name="pincode"value="{{ $user->pincode }}"></label>
                                </div>
                                <div class="form-group">
                                <label>state:</label>
                                <label><input type="text" name="state"value="{{ $user->state }}"></label>
                                </div> 
                                <div class="form-group">
                                <label>email:</label>
                                <label><input type="email" name="email"value="{{ $user->email }}"></label>
                                </div>  
                            <div class="form-group">
                            	<div class="form-group">
                                <label>Password:</label>
                                <label><input type="password" name="password"value="{{ $user->password }}"></label>
                                </div>
                                
                            </div>
                                
                            </div>
                            <div class="form-group">
                                <label>Gender: </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="m" name="gender" {{ $user->gender=="m"?'checked':'' }}>Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="f" name="gender" {{ $user->gender=="f"?'checked':'' }}>Female
                                    </label>
                                </div>
                               
                            </div>
                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                    <!--div class="col-lg-6">
                        <!-h1>Disabled Form States</h1>
                        <form role="form">
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="disabledSelect">Disabled input</label>
                                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="disabledSelect">Disabled select menu</label>
                                    <select id="disabledSelect" class="form-control">
                                        <option>Disabled select</option>
                                    </select>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Disabled Checkbox
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Disabled Button</button>
                            </fieldset>
                        </form>
                        <h1>Form Validation States</h1>
                        <form role="form">
                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess">Input with success</label>
                                <input type="text" class="form-control" id="inputSuccess">
                            </div>
                            <div class="form-group has-warning">
                                <label class="control-label" for="inputWarning">Input with warning</label>
                                <input type="text" class="form-control" id="inputWarning">
                            </div>
                            <div class="form-group has-error">
                                <label class="control-label" for="inputError">Input with error</label>
                                <input type="text" class="form-control" id="inputError">
                            </div>
                        </form>
                        <h1>Input Groups</h1>
                        <form role="form">
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-eur"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Font Awesome Icon">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>
                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!- /.col-lg-6 (nested) -->
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