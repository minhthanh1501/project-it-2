	<div class="banner">
		<div class="find">
			<input type="text" name="" placeholder="   Tìm kiếm trên Modern Fashion...">
			<button type="submit"></button>
		</div>
	</div>
<?php 
	$query = "SELECT * FROM product ORDER BY ID DESC";
	$new_product = pdo_query($query);
 ?>
	<div class="container-content">
		<h1 class="content-title">Sản phẩm mới nhất</h1>
		<div class="list">
		<?php  foreach ($new_product as  $row) {
			extract($row);?>
			<div class="list-item">
				<div class="list-item-image">
					<img class="item-image" src="<?php echo $thumbnail ?>" alt="">
				</div>
				<div class="list-item-description">
					<span class="name"><?php echo $title ?></span>
					<div class="price">
						<span class="ins"><?php echo $price ?>$</span>
						<span class="del"><del><?php echo $price_del ?></del></span>
					</div>
				</div>
			</div>
		<?php }?>
		</div>
		<h1 class="content-title">Sản phẩm sale</h1>
		<div class="list">
			<div class="list-item">
				<div class="list-item-image">
					<img class="item-image" src="https://static.dosi-in.com/images/detailed/42/CDL10_1.jpg" alt="">
				</div>
				<div class="list-item-description">
					<span class="name">hahahaahah</span>
					<div class="price">
						<span class="ins">150000$</span>
						<span class="del"><del>200000$</del></span>
					</div>
				</div>
			</div>
		</div>
	</div>