<div class="banner-black"></div>
<div class="container">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<?php 
			if ($_SESSION['user']['role'] == 'seller') {	
		?>
		<ul class="navbar-nav">
			<li class="nav-item ">
				<a class="nav-link" href="index.php?act=listProduct">Quản lý Sản phẩm</a>
			</li>
		</ul>
		<?php }else if ($_SESSION['user']['role'] == 'admin') {
			# code...
		 ?>
		<ul class="navbar-nav">
			<li class="nav-item ">
				<a class="nav-link" href="index.php?act=listCategory">Quản lý danh mục</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="index.php?act=listProduct">Quản lý Sản phẩm</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="index.php?act=listUsers">Quản lý khách hàng</a>
			</li>
		</ul>
		<?php } ?>
	</nav>
</div>