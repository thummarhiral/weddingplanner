<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.front.head')
</head>

<body>
<!-- header -->
@include('includes.front.header')
<!-- //header -->

@yield('content')

@include('includes.front.subscribe')

<!-- footer -->	
@include('includes.front.footer')
<!-- footer -->

<!-- popup for login -->
<div id="login-popup" class="popup-effect">
	<div class="popup">
		<h5 class="modal-title text-uppercase">Login</h5>
		<div class="login-form">
			<form action="#" method="post" class="px-3 pt-3 pb-0">
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">User Name</label>
					<input type="email" class="form-control" placeholder="" name="Name" id="recipient-name" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name1" class="col-form-label">Password</label>
					<input type="password" class="form-control" placeholder="" name="Name" id="recipient-name1" required="">
				</div>
				<div class="right-w3l">
					<input type="submit" class="form-control" value="Login">
				</div>
			</form>

		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>
<!-- popup for login -->

<!-- popup for register -->
<div id="register-popup" class="popup-effect">
	<div class="popup">
		<h5 class="modal-title text-uppercase">Register</h5>
		<div class="lregister-form">
			<form action="#" method="post" class="px-3 pt-3 pb-0">
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">First Name</label>
					<input type="text" class="form-control" placeholder="" name="Name" id="recipient-name2" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Last Name</label>
					<input type="text" class="form-control" placeholder="" name="Name" id="recipient-name3" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Email id</label>
					<input type="email" class="form-control" placeholder="" name="Name" id="recipient-name4" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Mobile Number</label>
					<input type="text" class="form-control" placeholder="" name="Name" id="recipient-name5" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name1" class="col-form-label">Password</label>
					<input type="password" class="form-control" placeholder="" name="Name" id="recipient-name6" required="">
				</div>
				<div class="right-w3l">
					<input type="submit" class="form-control" value="Get Started">
				</div>
			</form>
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>
<!-- popup for register -->

</body>
</html>