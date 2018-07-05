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
				<li style="width: 300px;left: 10px;top: 10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top: 10px;left: 20px;"><button  class="btn btn-primary" id="search_btn" >Search</button></li>
			</ul>
			<ul class="nav navbar-nav navbar-right" class="nav navbar-responsive">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width: 400px;" >
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sr No.</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in Rs.</div>
								</div>
							</div>
							<div class="panel-body"></div>
							<div class="panel-footer"></div>
						</div>
					</div>		


				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Login</a>
					<ul class="dropdown-menu">
						<div style="width: 300px;">
							<div class="panel panel-primary">
							<div class="panel-heading">Login</div>
							<div class="panel-heading">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" required/>
								<label for="email">Password</label>
								<input type="password" class="form-control" id="password" required/>
								<p><br></p>
								<a href="#" style="color: white; list-style: none;">Forgotten Password?..</a><input type="submit" class="btn btn-success" style="float: right;" id="Login" value="Login" >
							</div>
							<div class="panel-footer" id="e_msg"></div>
						</div>
					</div>
					</ul>
				</li>
				<li><a href="#"><span class="glyphicon glyphicon-user"></span>Register</a></li>
			</ul>
		</div>
		 
	</div>
	<p><br></p>
	<p><br></p>
	<p><br></p>
	<div class="container-fluid" class="container container-responsive">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id ="get_category">
					
				</div>
<!-- 				<div class="nav nav-pills nav-stacked" >

					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div>


 -->
 				<div id ="get_brand">
					
				</div>
				<!-- <div class="nav nav-pills nav-stacked" >
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
				
		<div class="col-md-8">
			<div class="panel panel-info">
				<div class="panel-heading">Products</div>
				<div class="panel-body">
					<div id="get_product">
						
					</div>
					<!-- <div class="col-md-4">
						<div class="panel panel-info">
							<div class="panel-heading"><h4>One +6</h4></div>
							<div class="panel-body">
								<img  class="img-responsive" src="product_images/hplaptop.jpeg"/>
							</div>
							<div class="panel-heading">
								Rs.12000
								<button style="float: right;" class="btn btn-danger btn-xs">AddToCart</button>
							</div>
						</div> -->
					</div>
				</div>
				<div class="panel-footer">&copy; 2018</div>
			</div>
			
		</div>
		<div class="col-md-1">
			
		</div>	
		</div>

	</div>

</body>
</html>