<?php
include "db.php";

$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
$email  = $_POST['email'];
$password =$_POST['password'];
$repassword =$_POST['repassword'];
$mobile = $_POST["mobile"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$name = "/^[A-Z][a-zA-Z]+$/";
$emailValidation="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
$number="/^[0-9]$/";


if ( empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) || empty($mobile) || empty($address1) || empty($address2) ) {
	# code...
	echo "
	<div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert'  aria-label='close'>&times;</a><b>Please Fill all the Fields..</b>
	</div>

	";
	exit();
}else{
	if(!preg_match($name, $f_name)){
	echo " <div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert'  aria-label='close'>&times;</a>
		<b>this $f_name is not valid</b>
	</div>";
	exit();
	}

	if(!preg_match($name, $l_name)){
		echo " <div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert'  aria-label='close'>&times;</a>
		<b>this $l_name is not valid</b>
	</div>";
		exit();
	}

	if(!preg_match($emailValidation, $email)){
		echo " <div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert'  aria-label='close'>&times;</a>
		<b>this $email address is not valid</b>
	</div>";
		exit();
	}

	if (strlen($password)  < 9) {
		# code...
		echo " <div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert'  aria-label='close'>&times;</a>
		<b>Password is too weak</b>
	</div>";
		exit();
	}


	if (strlen($repassword)  < 9) {
		# code...
		echo " <div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert'  aria-label='close'>&times;</a>
		<b>password is too weak</b>
	</div>";
		exit();
	}

	if ($password != $repassword) {
		# code...
		echo " <div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert'  aria-label='close'>&times;</a>
		<b>password didn't match</b>
	</div>";
		exit();
	}

	// if (!preg_match($number, $mobile)) {
	// 	# code...
	// 	echo "Mobile Number $mobile is not valid";
	// 	exit();
	// }

	if (!(strlen($mobile) == 10)) {
		# code...
		echo " <div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert'  aria-label='close'>&times;</a>
		<b>Mobile number should be of 10 digits</b>
	</div>";
		exit();
	}

	$sql = "SELECT user_id 	FROM user_info WHERE email = '$email' LIMIT 1";
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if ($count_email > 0) {
		# code...
		echo " <div class='alert alert-danger'>
		<a href='#' class='close' data-dismiss='alert'  aria-label='close'>&times;</a>
		<b>Email Already Exists. Please try another Email</b>
	</div>";
		exit();
	} else {
		$password = md5($password);
		$sql = "INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES (NULL, '$f_name', '$l_name', '$email', '$password', '$mobile', '$address1', '$address2');";
		$run_query = mysqli_query($con,$sql);
		if ($run_query) {
			# code...
			echo " <div class='alert alert-success'>
		<a href='#' class='close' data-dismiss='alert'  aria-label='close'>&times;</a>
		<b>Registered Succesfully </b>
	</div>";
		}

	}

	}


?>