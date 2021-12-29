<?php
	include("../model/pdo.php");
	$a = "aaa";
	if (isset($_POST['price'])&&($_POST['price'])>=0) {
		$rangePrice = $_POST['price'];
		$rangeAfter = $rangePrice * 1000;
		$query = 'SELECT * FROM product WHERE price <= '.$rangeAfter.' order by price DESC';
		$danhmuc = pdo_query($query);

				foreach ($danhmuc as $dm) {
					extract($dm);
					$format_price = number_format($price,0,',','.');
					$format_del = number_format($price_del,0,',','.');
					$hinhpath = "../upload/".$thumbnail;
					if (is_file($hinhpath)) {
						$hinh =  $hinhpath;
					}
					else{
						$hinh = $thumbnail;
					}
				
		echo '
				<div class="item-list-view" >
					<a href="index.php?act=spdetail&id=<?= '.$id.' ?>" title="">
						<div class="information-image">
							<img src="'.$hinh.'" alt="">
						</div>
						<div id="price_range">
							
						</div>
						<div class="information-span">
							<span>'.$name.'</span><br>
							<span>Giá : '.$format_price.' VNĐ</span>
							<del>'.$format_del.'VNĐ</del>
						</div>
					</a>
				</div>
				<?php } ?>';
	}
}
	
?>
