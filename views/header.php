<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Trang Chủ</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/Index.css">
		<link rel="stylesheet" href="css/home.css">
		<link rel="stylesheet" href="css/listProducts.css">
		<link rel="stylesheet" href="css/productDetail.css">
		<link rel="stylesheet" href="css/Login.css">
		<link rel="stylesheet" href="css/listCate.css">
		<link rel="stylesheet" href="css/range.css">
		<link rel="stylesheet" href="css/checkbox.css">
		<link rel="stylesheet" href="css/slider.css">
		<link rel="stylesheet" href="css/slideshow.css">
		<link rel="stylesheet" href="css/cart.css">
		<link rel="stylesheet" href="css/rs.css">
		
		<!-- bootstrap 4 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<!-- bootstrap 3 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
		<style type="text/css">
			.dropbtn {
		background-color: #3498DB;
		color: white;
		padding: 16px;
		font-size: 16px;
		border: none;
		cursor: pointer;
		}
		.dropbtn:hover, .dropbtn:focus {
		background-color: #333;
		}
		.dropdown {
		position: relative;
		display: inline-block;
		}
		.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f1f1f1;
		min-width: 160px;
		overflow: auto;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		}
		.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
		}
		.dropdown a:hover {background-color: #ddd;}
		.show {display: block;}
		</style>
		
	</head>
	<body>
		<div class="main">
			<header class="container-header">
				<div class="container-header-child">
					<div class="container-header-logo">
						<span>Modern fashion</span>
					</div>
					<ul class="menu">
						<li><a href="Index.php" class="container-header-ul-item">TRANG CHỦ</a></li>
						<li class="menu-item">
							<a id="over" href="#" class="container-header-ul-item">SẢN PHẨM</a>
							<div class="menu-child">
								<div  class="menu-child-item">
									<h4>Áo</h4>
									<?php
										$query = 'SELECT * FROM category WHERE types = 1';
										$itemao = pdo_query($query);
										foreach ($itemao as $ao) {
											extract($ao);
									?>
									
									<ul class="menu-list-item">
										<li><a href="index.php?act=danhmuc&id=<?php echo $id ?>"><?php echo $name ?></a></li>
									</ul>
									<?php } ?>
								</div>
								<div  class="menu-child-item">
									<h4>Quần</h4>
									<?php
										$query = 'SELECT * FROM category WHERE types = 2';
										$itemquan = pdo_query($query);
										foreach ($itemquan as $quan) {
											extract($quan);
									?>
									
									<ul class="menu-list-item">
										<li><a href="index.php?act=danhmuc&id=<?php echo $id ?>"><?php echo $name ?></a></li>
									</ul>
									<?php } ?>
								</div>
								<div  class="menu-child-item">
									<h4>Phụ Kiện</h4>
									<?php
										$query = 'SELECT * FROM category WHERE types = 3';
										$itemphukien = pdo_query($query);
										foreach ($itemphukien as $phukien) {
											extract($phukien);
									?>
									
									<ul class="menu-list-item">
										<li><a href="index.php?act=danhmuc&id=<?php echo $id ?>"><?php echo $name ?></a></li>
									</ul>
									<?php } ?>
								</div>
								<div  class="menu-child-item">
									<h4>Đồ Lót</h4>
									<?php
										$query = 'SELECT * FROM category WHERE types = 4';
										$itemdolot = pdo_query($query);
										foreach ($itemdolot as $dolot) {
											extract($dolot);
									?>
									
									<ul class="menu-list-item">
										<li><a href="index.php?act=danhmuc&id=<?php echo $id ?>"><?php echo $name ?></a></li>
									</ul>
									<?php } ?>
								</div>
								<div class="menu-child-item">
									<img class="menu-child-item__img" src="https://media.istockphoto.com/photos/young-handsome-man-in-classic-suit-over-the-lake-background-picture-id1300966679?b=1&k=20&m=1300966679&s=170667a&w=0&h=KbwGRDDRdBsjKJdifA80Ak3ZtpWvufsY_RTn_JVl73A=" alt="">
									<div class="menu-child-item__text">
										<span>Fashion thời thượng</span>
									</div>
									
								</div>
							</div>
						</li>
						<li class="menu-item">
							<a id="over" href="#" class="container-header-ul-item">THƯƠNG HIỆU</a>
							<div class="menu-child">
								<div class="menu-child-item">
									<h4>Thương hiệu</h4>
									<?php
										$query = 'SELECT * FROM brand';
										$thuonghieu = pdo_query($query);
										foreach ($thuonghieu as $thuonghieu) {
											extract($thuonghieu);
									?>
									<ul class="menu-list-item">
										<li><a href="index.php?act=thuonghieu&id=<?php echo $id ?>"><?php echo $name ?></a></li>
									</ul>
									<?php } ?>
								</div>
							</div>
						</li>
						<li><a href="#" class="container-header-ul-item">HOT DEAL</a></li>
					</ul>
					<div class="container-header-login">
						<?php
							if (isset($_SESSION['user'])) {
								extract($_SESSION['user']);
								$hinhpath = "../upload/".$avatar;
						if (is_file($hinhpath)) {
						$hinh =  $hinhpath;
						}
						else{
						$hinh = $avatar;
						}
						?>
						<div class="login-user js-user">
							<img class="login-user__avatar" src="<?php echo $hinh ?>" alt="">
							<span class="login-user__name"><?php echo $fullname ?></span>
							<a href="index.php?act=cart" class="cart" title="">
								<i class="fas fa-cart-plus"></i>
								<span>Giỏ hàng</span>
								<span>1</span>
							</a>
						</div>
						<div class="login-user__setting js-login-user__setting">
							<i class="fas fa-times js-user-close"></i>
							<ul>
								<?php if ($role == 'admin'){ ?>
								<li><a href="../admin/index.php" title="">Admin</a></li>
								<?php } ?>
								<?php if ($role == 'seller'){ ?>
								<li><a href="../admin/index.php" title="">Quản lý bán hàng</a></li>
								<?php } ?>
								<li><a href="index.php?act=mybill" title="">Đơn hàng của tôi</a></li>
								<li><a href="index.php?act=edit_account" title="">Cập nhật thông tin</a></li>
								<li><a href="index.php?act=edit_password" title="">Đổi mật khẩu</a></li>
								<li><a href="index.php?act=logout" title="">đăng xuất</a></li>
							</ul>
						</div>
					</div>
					<?php }else{ ?>
					<div class="container-header-login">
						<a href="#" class="account js-account">
							<i class="fas fa-user"></i>
							<span>Đăng nhập</span>
						</a>
						<a href="index.php?act=cart" class="cart" title="">
							<i class="fas fa-cart-plus"></i>
							<span>Giỏ hàng</span>
						</a>
					</div>
					<?php } ?>
				</header>
				<!-- nav mobile -->
				<div class="header-mobile">
					<div class="container-header-logo">
						<span>Modern fashion</span>
					</div>
					<div class="find">
						<form method="POST" action="index.php?act=search">
							<input class="find__text" type="text" name="timkiem" placeholder="   Tìm kiếm trên Modern Fashion...">
							<input class="find__submit" type="submit" name="search" value=""></input>
						</form>
					</div>
					<div class="container-header-login">
						<a href="#" class="account js-account">
							<i class="fas fa-user a"></i>
						</a>
					</div>
				</div>
				<div class="overlay"></div>