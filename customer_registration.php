<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Milan Store</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery2.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="main.js"></script>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" class="nav navbar-responsive">
		<div class="container-fluid">
			<div class=" navbar-header">
				<a href="#" class="navbar-brand">Milan</a>
			</div>
			<ul class="nav navbar-nav" id="dropdown-menu">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-briefcase"></span>Product</a></li>
			</ul>
		</div>
	</div>
	<p><br></p>
	<p><br></p>
	<p><br></p>
	<div class="container-fluid">

			<div class="row">
				<div class="col-md-2"></div>
					<div class="col-md-8" id="signup_msg">
								<!--Alert From Sign up form-->
					</div>
					<div class="col-md-2"></div>
			</div>

		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="panel panel-primary">
					<div class="panel-heading">Customer Registration</div>
					<div class="panel-body">

					

						<form method="post">
						<div class="row">


							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" class="form-control" name="f_name" id="f_name">
							</div>
							<div class="col-md-6">
								<label for="l_name">Last Name</label>
								<input type="text" class="form-control" name="l_name" id="l_name" >
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" id="email" >
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" id="password" >
							</div>
						</div>


						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Re-enter Password</label>
								<input type="password" class="form-control" name="repassword" id="repassword" >
							</div>
						</div>



						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Mobile</label>
								<input type="text" class="form-control" name="mobile" id="mobile" >
							</div>
						</div>



						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address Line 1</label>
								<input type="text" class="form-control" name="address1" id="address1" >
							</div>
						</div>



						<div class="row">
							<div class="col-md-12">
								<label for="address2">Address Line 2</label>
								<input type="text" class="form-control" name="address2" id="address2" >
							</div>
						</div>

						<p><br></p>


						<div class="row">
							<div class="col-md-12">
								
								<input style="float: right;" value="Register" type="button" class="btn btn-success btn-lg" name="signup_button" id="signup_button" >
							</div>
						</div>



					</div>
				</form>
					<div class="panel-footer"></div>
					</div>

				
			</div>
		</div>
	</div>
</body>
</html>