<div class="banner">
	<div class="find">
		<form method="POST" action="index.php?act=search">
			<input class="find__text" type="text" name="timkiem" placeholder="   Tìm kiếm trên Modern Fashion...">
			<input class="find__submit" type="submit" name="search" value=""></input>
		</form>
	</div>
</div>
<div class="container-content">
	<!-- product new -->
	<h1 class="content-title">Sản phẩm mới nhất</h1>
	<?php
	$query = "SELECT * FROM product ORDER BY ID DESC limit 8";
	$new_product = pdo_query($query);
	?>
	<div class="list">
		<?php  foreach ($new_product as  $new) {
		extract($new);
		$format_price = number_format($price,0,',','.');
		$format_del = number_format($price_del,0,',','.');
		$hinhpath = "../upload/".$thumbnail;
                    if (is_file($hinhpath)) {
                      $hinh =  $hinhpath;
                    }
                    else{
                      $hinh = $thumbnail;
                    }
		?>
		<a href="index.php?act=spdetail&id=<?= $id ?>" title="" class="click__act">
			<div class="list-item">
				<!-- khung sản phẩm -->
				<div class="list-item-image">
					<img class="item-image" src="<?php echo $hinh ?>" alt="">
				</div>
				<div class="list-item-description">
					<span class="description-name"><?php echo $name ?></span>
					<div class="description-price">
						<span class="description-price__ins"><?php echo $format_price ?>VNĐ</span>
						<del class="description-price__del"><?php echo $format_del ?>VNĐ</del>
					</div>
				</div>
				<!-- thẻ sản phẩm mới -->
				<div class="list-item__new">
					<span>New</span>
					<i class="fas fa-tags"></i>
				</div>
			</div>
		</a>
		<?php }?>
	</div>
</div>
<!-- end product new -->

<!-- slideshow -->
<div class="container-fluid slideshow" style="padding: 0;margin: 0">
	<div class="intro">
		<img src="https://aristino.com/Data/upload/images/Adv/slide-home-1/bst-thu-dong-2021-1903x930.jpg" alt="" class="slideshow-img">
		<img src="https://aristino.com/Data/upload/images/Adv/slide-home-1/bst-thu-dong-2021-1903x915.jpg" alt="" class="slideshow-img">
		<img src="https://aristino.com/Data/upload/images/Adv/slide-home-1/bst-thu-dong-2021-1903x915_2.jpg" alt="" class="slideshow-img">
	</div>
</div>
<div class="container-slider">
	<div class="slider">
		
	<div class="slides1">
		<!-- radio button start -->
		<input type="radio" name="radio-btn" id="radio1">
		<input type="radio" name="radio-btn" id="radio2">
		<input type="radio" name="radio-btn" id="radio3">
		<input type="radio" name="radio-btn" id="radio4">
		<!-- radio button end -->
		<!-- slide images start -->
		<div class="slide first">
			<img src="https://oldsailor.com.vn/vnt_upload/weblink/f68d728b3f33f76dae22.jpg" alt="">
		</div>
		<div class="slide">
			<img src="https://bizweb.dktcdn.net/100/438/408/themes/843441/assets/b1.jpg?1637993925815" alt="">
		</div>
		<div class="slide">
			<img src="https://wallpaperaccess.com/full/33161.jpg" alt="">
		</div>
		<div class="slide">
			<img src="https://wallpaperaccess.com/full/2489626.jpg" alt="">
		</div>
		<!-- slide images end -->
		<!-- automatic navigation start -->
		<div class="navigation-auto">
			<div class="auto-btn1"></div>
			<div class="auto-btn2"></div>
			<div class="auto-btn3"></div>
			<div class="auto-btn4"></div>
		</div>
		<!-- automatic navigation end -->
		<!-- manual navigation start -->
		<div class="navigation-manual">
			<label for="radio1" class="manual-btn"></label>
			<label for="radio2" class="manual-btn"></label>
			<label for="radio3" class="manual-btn"></label>
			<label for="radio4" class="manual-btn"></label>
		</div>
		<!-- manual navigation end -->
	</div>
	</div>
</div>
<!-- end slideshow -->

<!-- product sale -->
<div class="container-content">
	<h1 class="content-title">Sản phẩm sale</h1>
	<?php
	$query = "SELECT * FROM product WHERE sale = 1 limit 8";
	$sale_product = pdo_query($query);
	?>
	<div class="list">
		<?php  foreach ($sale_product as  $sale) {
			extract($sale);
			$format_price = number_format($price,0,',','.');
			$format_del = number_format($price_del,0,',','.');
			$hinhpath = "../upload/".$thumbnail;
                    if (is_file($hinhpath)) {
                      $hinh =  $hinhpath;
                    }
                    else{
                      $hinh = $thumbnail;
                    }
		?>
		<a href="index.php?act=spdetail&id=<?= $id ?>" title="" class="click__act">
			<div class="list-item">
				<!-- khung sản phẩm -->
				<div class="list-item-image">
					<img class="item-image" src="<?php echo $hinh ?>" alt="">
				</div>
				<div class="list-item-description">
					<span class="description-name"><?php echo $name ?></span>
					<div class="description-price">
						<span class="description-price__ins"><?php echo $format_price ?>VNĐ</span>
						<del class="description-price__del"><?php echo $format_del ?>VNĐ</del>
					</div>
				</div>
				<!-- thẻ sản phẩm sale -->
				<div class="list-item__sale">
					<span>Big <br>Sale</span>
					<i class="fas fa-percent"></i>
				</div>
			</div>
		</a>
		<?php }?>
	</div>
</div>
<!-- end product sale -->