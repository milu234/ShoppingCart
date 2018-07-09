<?php
session_start();
include "db.php";
	if (isset($_POST["category"])) {
		$category_query = "SELECT * FROM categories";
		$run_query = mysqli_query($con,$category_query);
		echo "<div class='nav nav-pills nav-stacked' >
					<li class='active'><a href='#'><h4>Categories</h4></a></li>";
		if (mysqli_num_rows($run_query) > 0) {
			while ($row = mysqli_fetch_array($run_query)) {
				$cid = $row["cat_id"];
				$cat_name = $row["cat_title"];
				echo "<li><a href='#' class='category' cid = '$cid'>$cat_name</a></li>";
			}
			echo "</div>";
			
		}
	}




	if (isset($_POST["brand"])) {
		$brand_query = "SELECT * FROM brands";
		$run_query = mysqli_query($con,$brand_query);
		echo "<div class='nav nav-pills nav-stacked' >
					<li class='active'><a href='#'><h4>Brands</h4></a></li>";
		if (mysqli_num_rows($run_query) > 0) {
			while ($row = mysqli_fetch_array($run_query)) {
				$bid = $row["brand_id"];
				$brand_name = $row["brand_title"];
				echo "<li><a href='#' class='brand' bid='$bid' >$brand_name</a></li>";
			}
			echo "</div>";
			
		}
	}
	if (isset($_POST["page"])) {
		$sql = "SELECT * FROM products";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		$pageno = ceil($count/9);
		for ($i=1; $i<=$pageno ; $i++) {
			echo "<li><a href='#' page='$i' id='page'  >$i</a></li>";

		}
		# code...
	}

	if (isset($_POST["getProduct"])) {
		$limit = 9;
		if (isset($_POST["setPage"])) {
			$pageno = $_POST["pageNumber"];
			$start = ($pageno*$limit)-$limit;
			# code...
		} else {
			$start = 0;
		}
		$product_query = "SELECT * FROM products  LIMIT $start,$limit";
		$run_query = mysqli_query($con,$product_query);
		if (mysqli_num_rows($run_query) > 0) {
			while ($row = mysqli_fetch_array($run_query)) {
				$pro_id =     $row['product_id'];
				$pro_cat= 	$row['product_cat'];
				$pro_brand =$row['product_brand'];
				$pro_title = $row['product_title'];
				$pro_price = $row['product_price'];
				$pro_image = $row['product_img'];
				echo "<div class='col-md-4'>
						<div class='panel panel-info'>
							<div class='panel-heading'><h4>$pro_title</h4></div>
							<div class='panel-body'>
								<img  class='img-responsive' src='product_images/$pro_image' style='width:160px;height:250px;'/>
							</div>
							<div class='panel-heading'>
								Rs.$pro_price.00
								<button pid='$pro_id' id='product' style='float: right;' class='btn btn-success btn-xs'>AddToCart</button>
							</div>
						</div>
						</div>";
			}
		}
	}



	// if (isset($_POST["get_selected_Category"])) {
	// 	$cid=$_POST["cat_id"];
	// 	$sql="SELECT * FROM products WHERE product_cat = '$cid'";
	// 	$run_query = mysqli_query($con,$sql);
	// 	while ($row = mysqli_fetch_array($run_query)) {
	// 		$pro_id =     $row['product_id'];
	// 			$pro_cat= 	$row['product_cat'];
	// 			$pro_brand =$row['product_brand'];
	// 			$pro_title = $row['product_title'];
	// 			$pro_price = $row['product_price'];
	// 			$pro_image = $row['product_img'];
	// 			echo "<div class='col-md-4'>
	// 					<div class='panel panel-info'>
	// 						<div class='panel-heading'><h4>$pro_title</h4></div>
	// 						<div class='panel-body'>
	// 							<img  class='img-res src='product_images/$pro_image' style='width:160px;height:250px;'/>
	// 						</div>
	// 						<div class='panel-heading'>
	// 							Rs.$pro_price.00
	// 							<button pid='$pro_id' style='float: right;' class='btn btn-success btn-xs'>AddToCart</button>
	// 						</div>
	// 					</div>
	// 					</div>";
	// 	}
		
	// }



	if (isset($_POST["get_selected_Category"]) || isset($_POST["get_selected_Brand"]) || isset($_POST["search"])) {

		if (isset($_POST["get_selected_Category"])){
			$id=$_POST["cat_id"];
			$sql="SELECT * FROM products WHERE product_cat = '$id'";	
		}else if(isset($_POST["get_selected_Brand"])){
			$id=$_POST["brand_id"];
			$sql="SELECT * FROM products WHERE product_brand = '$id'";
		}else {
			$keyword = $_POST["keyword"];
			$sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%' ";
		}		
		
		$run_query = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($run_query)) {
			$pro_id =     $row['product_id'];
				$pro_cat= 	$row['product_cat'];
				$pro_brand =$row['product_brand'];
				$pro_title = $row['product_title'];
				$pro_price = $row['product_price'];
				$pro_image = $row['product_img'];
				echo "<div class='col-md-4'>
						<div class='panel panel-info'>
							<div class='panel-heading'><h4>$pro_title</h4></div>
							<div class='panel-body'>
								<img   src='product_images/$pro_image' style='width:160px;height:250px;'/>
							</div>
							<div class='panel-heading'>
								Rs.$pro_price.00
								<button pid='$pro_id' id='product'  style='float: right;' class='btn btn-success btn-xs'>AddToCart</button>
							</div>
						</div>
						</div>";
		}
		
	}


	if (isset($_POST["addToProduct"])) {



		if (isset($_SESSION["uid"])) {

			$p_id = $_POST["proId"];

			$user_id = $_SESSION["uid"];
			$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'  ";
			$run_query = mysqli_query($con,$sql);
			$count = mysqli_num_rows($run_query);
			if ($count > 0) {
			# code...
					echo " <div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert'  aria-label='close'>&times;</a>
					<b>Product Already in the Cart ...Continue Shopping </b>
					</div>";
			} else {
				$sql = "SELECT * FROM products WHERE product_id = '$p_id'";
				$run_query = mysqli_query($con,$sql);
				$row  = mysqli_fetch_array($run_query);
					$id = $row["product_id"];
					$pro_name = $row["product_title"];
					$pro_image = $row["product_img"];
					$pro_price = $row["product_price"];
				$sql = "INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES (NULL, '$p_id', '0', '$user_id', '$pro_name', '$pro_image', '1', '$pro_price', '$pro_price');";
					if (mysqli_query($con,$sql)) {
								echo " <div class='alert alert-success'>
								<a href='#' class='close' data-dismiss='alert'  aria-label='close'>&times;</a>
								<b>Product Added to the cart </b>
								</div>";
				# code...
			}
		}

			# code...
		} else {
			echo " <div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert'  aria-label='close'>&times;</a>
						<b>First you have to Sign up  </b>
						</div>";
		}
		# code...
	}

	if (isset($_POST["get_cart_product"]) || isset($_POST["cart_checkout"]) ) {
		$uid = $_SESSION["uid"];
		$sql = "SELECT * FROM cart WHERE user_id = '$uid'  ";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if ($count > 0) {
			$no = 1;
			$total_amt = 0;
			while ($row = mysqli_fetch_array($run_query)) {
				$id = $row["id"];
				$pro_id = $row["p_id"];
				$pro_name = $row["product_title"];
				$pro_image = $row["product_image"];
				$qty = $row["qty"];
				$pro_price = $row["price"];
				$total = $row["total_amount"];
				$price_array = array($total);
				$total_sum = array_sum($price_array);
				$total_amt = $total_amt+$total_sum;
				if (isset($_POST["get_cart_product"])) {

				echo "<div class='row'>
									<div class='col-md-3'>$no</div>
									<div class='col-md-3'><img class='img-responsive' src = 'product_images/$pro_image' style='width:60px;height:50px;'> </div>
									<div class='col-md-3'>$pro_name</div>
									<div class='col-md-3'>Rs.$pro_price.00</div>
								</div>";

								$no = $no+1;
					# code...
				} else {
					echo "<div class='row'>
							<div class='col-md-2'>
								<div class='btn-group'>
									<a href='#'  remove_id='$pro_id' class='btn btn-danger remove'><span class='glyphicon glyphicon-trash'></span></a>
									<a href='#' update_id='$pro_id'   class='btn btn-success update'><span class='glyphicon glyphicon-ok-sign'></span></a>
								</div>
							</div>
							
							<div class='col-md-2'><img style='width:50px; height:60px;' src='product_images/$pro_image'></div>
							<div class='col-md-2'> $pro_name</div>
							<div class='col-md-2'><input type='text' class='form-control qty' pid='$pro_id' id='qty-$pro_id' value='$qty' ></div>
							<div class='col-md-2'><input type='text' class='form-control price' pid='$pro_id' id='price-$pro_id'  value='$pro_price' disabled></div>
							<div class='col-md-2'><input type='text' class='form-control total' pid='$pro_id' id='total-$pro_id'  value='$total' disabled></div>
						</div>";
					# code...
				}
				



				
				# code...
			}

			if (isset($_POST["cart_checkout"])) {
				echo "	<div class='row'>
							<div class='col-md-8'></div>
							<div class='col-md-4'>
								<b>Total Rs. $total_amt.00</b>
							</div>
						</div>";
			}

			echo '
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				  <input type="hidden" name="cmd" value="_cart">
				  <input type="hidden" name="business" value="2016.milan.hazra@ves.ac.in">
				  <input type="hidden" name="upload" value="1">';

				  $x=0;
				  $uid = $_SESSION["uid"];
				  $sql = "SELECT * FROM cart WHERE user_id =  '$uid' ";
				  $run_query = mysqli_query($con,$sql);
				  while ($row = mysqli_fetch_array($run_query)) {
				  	$x++;
				  	# code...
				  


				 echo '<input type="hidden" name="item_name_'.$x.'" value="'.$row["product_title"].'">
				  <input type="hidden" name="item_number_'.$x.'" value="'.$x.'">
				  <input type="hidden" name="amount_'.$x.'" value="'.$row["price"].'">
				  <input type="hidden" name="quantity_'.$x.'" value="'.$row["qty"].'">';
				  
				  }

				 echo '<input style="float:right;margin-right:80px;" type="image" name="submit"
				    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
				    alt="PayPal - The safer, easier way to pay online">
				</form>';

			# code...
		}
		# code...
	}

	if (isset($_POST["cart_count"]) AND isset($_SESSION["uid"])) {
		$uid = $_SESSION["uid"];
		$sql = "SELECT * FROM cart WHERE user_id = '$uid'  ";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		echo $count;
	}


	if (isset($_POST["removeFromCart"])) {
		$pid = $_POST["removeId"];
		$uid = $_SESSION["uid"];
		$sql = "DELETE FROM cart WHERE user_id = '$uid' AND p_id= '$pid' ";
		$run_query = mysqli_query($con,$sql);
		if ($run_query) {
			echo " <div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert'  aria-label='close'>&times;</a>
						<b>Product Removed From the Cart .. Continue Shopping </b>
						</div>";
		}
		# code...
	}


	if (isset($_POST["updateProduct"])) {
		# code...
		$uid = $_SESSION["uid"];
		$pid = $_POST["updateId"];
		$qty = $_POST["qty"];
		$price = $_POST["price"];
		$total = $_POST["total"];

		$sql = "UPDATE cart SET qty = '$qty' ,price = '$price', total_amount = '$total' WHERE user_id = '$uid' AND p_id = '$pid' ";
		$run_query = mysqli_query($con,$sql);
		if ($run_query) {
			# code...
			echo " <div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert'  aria-label='close'>&times;</a>
						<b>Product Updated .. Continue Shopping </b>
						</div>";
		}
	}



	
?>