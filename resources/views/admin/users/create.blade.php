@extends('layouts.master')
@section('title', 'Create User')

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
                Create User
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="POST" action="{{ route('users.store') }}">
                            @csrf
                        	
        					
        						<div class="form-group">
                                <label>First_Name:</label>
                                <input class="form-control" type="text" placeholder="Enter text" name="first_name"/>
                           
                            </div>

                            <div class="form-group">
                                <label>Last_Name:</label>
                                <input class="form-control" type="text" placeholder="Enter text"  name="last_name">
                            </div>
                            <div class="form-group">
                                <label>Address:</label>
                                <textarea class="form-control" rows="3" name="address"></textarea>
                            </div>
                            <div class="form-group">
                                <label>City:</label>
                                <input type="text" name="city">
                                </div>
                                <div class="form-group">
                                <label>Pincode:</label>
                                <input type="number" name="pincode">
                                </div>
                                <div class="form-group">
                                <label>state:</label>
                                <input type="text" name="state">
                                </div> 
                                <div class="form-group">
                                <label>email:</label>
                                <input type="email" name="email">
                                </div>  
                            <div class="form-group">
                            	<div class="form-group">
                                <label>Password:</label>
                                <input type="Password" name="password">
                                </div>
                                
                            </div>
                            <div class="form-group">
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
                            <div class='form-group pull-right'>
                            <button type="submit" class="btn btn-default">Save User</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>dib
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