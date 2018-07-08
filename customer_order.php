<?php
session_start();
if (!isset($_SESSION["uid"])) {
	# code...
	header("location:index.php");
}

?>

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
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>Customer Order Details</h1>
						<hr>
						<div class="row">
							<div class="col-md-6">
								<img style="float: right;"  src="product_images/camera.jpeg" class="thumbnail-img" />
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Prduct Name</td><td><b>Sony Camera</b> </td></tr>
									<tr><td>Prduct Price</td><td><b>Rs.10000</b> </td></tr>
									<tr><td>Quantity</td><td><b>3</b> </td></tr>
									<tr><td>Payment</td><td><b>Completed</b> </td></tr>
									<tr><td>Transaction Id</td><td><b>RT4567hjkl</b> </td></tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>		

</body>
</html>