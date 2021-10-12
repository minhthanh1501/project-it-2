<?php 
	include("../model/pdo.php");
	include("header.php");
	//controller 
	if (isset($_GET['act'])) {
		$act  = $_GET['act'];
		switch ($act) {
			case 'dmsp':
				include("products/listProducts.php");
				break;
			case 'spdetail':
				include("products/productDetail.php");
				break;
			case 'login':
				include("user/Login.php");
				break;
			case 'register':
				include("user/register.php");
				break;
			default:
				include("home.php");
				break;
		}
	}else{
		include("home.php");
	}
	include("footer.php");

 ?>