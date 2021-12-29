<div class="banner-black"></div>
<div class="container">
	<div class="container-productDetail">
		<!-- slide sản phẩm -->
		<div class="detail-item-image">
			<div class="list-image">
				<h2>Product</h2>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<!-- <li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li> -->
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="<?php echo $spdetail['thumbnail'] ?>" alt="Los Angeles" style="width:100%;">
						</div>
						<!-- <div class="item">
							<img src="<?php echo $spdetail_images['file'] ?>" alt="Chicago" style="width:100%;">
						</div>
						<div class="item">
							<img src="https://4menshop.com/images/thumbs/2021/02/ao-so-mi-tron-asm046-mau-trang-kem-15987-slide-products-601b8d0d07b88.png" alt="New York" style="width:100%;">
						</div> -->
					</div>
					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<!-- end slide sản phẩm -->
		<!-- chi tiết sản phẩm -->
		<div class="detail-item-information">
			<div class="list-information">
				<form method="POST" action="index.php?act=addcart">
					<input type="hidden" name="id" value="<?php echo $spdetail['id']; ?>">
					<input type="hidden" name="name" value="<?php echo $spdetail['name']; ?>">
					<input type="hidden" name="image" value="<?php echo $spdetail['thumbnail']; ?>">

				<h3 class="list-information__h3-title"><?php echo $spdetail['name']; ?></h3>
				<div class="list-information__price padding__list">
					<div class="price__title">
						<u>Giá bán:</u>
						<?php 
							$format_price = number_format($spdetail['price'],0,',','.');
							$format_del = number_format($spdetail['price_del'],0,',','.');
						 ?>
					</div>
					<input type="hidden" name="price" value="<?php echo $spdetail['price'] ?>">
					<span class="price__ins"><?php echo $format_price ?>VNĐ</span>
					<del class="price__del"><?php echo $format_del ?>VNĐ</del>
				</div>
				<div class="list-information__color padding__list">
					<label for="">Màu sắc:</label>
					<input class="color__choose" type="radio" name="color" id="color1" require><label for="color1" class="color__after color1"></label>
					<input class="color__choose" type="radio" name="color" id="color2" require><label for="color2" class="color__after color2"></label>
				</div>
				<div class="list-information__size__quantity padding__list">
					<div class="size__title padding__item">
						<span>SIZE:</span>
					</div>
					<div class="size__choose padding__item">
						<select name="size" id="">
							<option value="S">S</option>
							<option value="M">M</option>
							<option value="XL">XL</option>
							<option value="XXL">XXL</option>
						</select>
					</div>
					<div class="quantity__title padding__item">
						<span>Số Lượng:</span>
					</div>
					<div class="quantity__choose padding__item">
						<select name="quantity" id="">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
						<!-- <input type="number" name="quantity" value="1" placeholder=""> -->
					</div>
				</div>
				<div class="list-information__description padding__list">
					<div class="description__title">
						<p>Mô tả sản phẩm :</p>
					</div>
					<div class="description__content">
						<p><?php echo $spdetail['content']; ?></p>
					</div>
				</div>
				<div class="list-information__add-cart padding__list">
					<input type="submit" class="btn btn-dark" name="addcart" value="ADD TO CART">
				</div>
				</form>
			</div>
		</div>
		<!-- end chi tiết sản phẩm -->
	</div>
	<div class="content-related">
		<h1 class="content-title">Sản phẩm cùng loại</h1>
		<div class="content-related__product">
			<?php
			foreach ($sprelated as $sprelated) {
				extract($sprelated);
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
			<!-- khung -->

			<div class="content-related__product-item">
				<img class="product-item__image" src="<?php echo $hinh ?>" alt="">
				<div class="content-related__product-description">
					<span class="product-description__name"><?php echo $name ?></span>
					<div class="product-description__price">
						<span class="product-description-price__ins"><?php echo $format_price?></span>
						<del class="product-description-price__del"><?php echo $format_del ?></del>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>