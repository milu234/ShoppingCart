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
	<style >
		table tr td {padding: 10px;}
	</style>
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
						<h1>Thank you</h1>
						<hr>
						<p>Hello <?php echo $_SESSION["name"]; ?>,Your payment process is successfully completed and your transaction id is xxxxxx-xxx-xx-x-x<br>You can continue your shopping <br></p>
						<a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>		

</body>
</html>