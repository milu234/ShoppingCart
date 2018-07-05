$(document).ready(function(){
	cat();
	brand();
	product();
	function cat(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data: {category:1},
			success : function(data){
				$("#get_category").html(data);
			}
		})
	}
	function brand(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data: {brand:1},
			success : function(data){
				$("#get_brand").html(data);
			}
		})
	}
	function product(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data: {getProduct:1},
			success : function(data){
				$("#get_product").html(data);
			}
		})
	}
	$("body").delegate(".category","click",function(event){
		event.preventDefault();
		var cid = $(this).attr('cid');
		alert(cid);
	})	



})