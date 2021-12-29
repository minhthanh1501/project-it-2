<div class="banner-black"></div>
<div class="container">
	<div class="content">
		<div class="select-choose">
			<h1>Bộ lọc tìm kiếm</h1>
			<!-- <form method="POST" action="index.php?act=checkresult" class="select-choose__form"> -->
				<label for="giatien">Tìm kiếm theo giá tiền</label>
				<div>
					<div class="range">
						<div class="range-sliderValue">
							<span class="range-sliderValue__span">100</span>
						</div>
						<div class="range-field">
							<div class="field-value left">0</div>
							<input class="range-field__input" name="rangePrice" type="range" id="rangePrice" min="0" max="2000" value="1000" steps="1">
							<div class="field-value right">2 triệu</div>
						</div>
					</div>
				</div>
			<form method="POST" action="index.php?act=findresult" class="select-choose__form">	
				<label for="cb1"><input type="checkbox" id="cb1" name="cb[]" value="quần" > QUẦN</label>

				<label for="cb2"><input type="checkbox" id="cb2" name="cb[]" value="áo"> ÁO</label>

				<label for="cb3"><input type="checkbox" id="cb3" name="cb[]" value="giày"> GIÀY</label>

				<label for="cb4"><input type="checkbox" id="cb4" name="cb[]" value="ví"> VÍ</label>

				<label for="cb5"><input type="checkbox" id="cb5" name="cb[]" value="vali"> VALI</label>

				<input type="submit" name="checkresult" value="Lọc" class="btn btn-success">
			</form>
		</div>
		<div class="select-view">
			<div class="sort-view">
				<ul class="sort-view-ul">
					<li><span>sắp xếp theo</span></li>
					<li>
						<a href="index.php?act=danhmuc-sale&id=<?php echo $id?>" title="">
						<button class="btn btn-danger bigger">Giảm giá</button></li>
					</a>
					<li>
						<a href="index.php?act=danhmuc-new&id=<?php echo $id?>" title="">
						<button class="btn btn-primary bigger">Mới nhất</button></li>
					</a>
					<li>
						<a href="index.php?act=danhmuc-bestseller&id=<?php echo $id?>" title="">
							<button class="btn btn-default bigger">bán chạy</button>
						</a>
					</li>
					<li>
						<div class="dropdown">
							<button class="btn btn-primary dropdown-toggle bigger" type="button" data-toggle="dropdown">Giá
							</button>
							<ul class="dropdown-menu">
								<li><a href="index.php?act=danhmuc-asc&id=<?php echo $id?>">Giá: từ thấp đến cao</a></li>
								<li><a href="index.php?act=danhmuc-desc&id=<?php echo $id?>">Giá: từ cao đến thấp</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<div class="list-view" id="a">
				<?php
				if (!isset($a)) {
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
				?>
				<div class="item-list-view" >
					<a href="index.php?act=spdetail&id=<?= $id ?>" title="">
						<div class="information-image">
							<img src="<?php echo $hinh ?>" alt="">
						</div>
						<div id="price_range">
							
						</div>
						<div class="information-span">
							<span><?php echo $name ?></span><br>
							<span>Giá : <?php echo $format_price ?>VNĐ</span>
							<del><?php echo $format_del ?>VNĐ</del>
						</div>
					</a>
				</div>
				<?php } }?>
			</div>
			<div class="page">
				<ul class="pagination">
					<?php 
						if (isset($idCompare)) {
							$act  = $_GET['act'];
							switch ($act){
								case 'danhmuc':									
									for ($i=1; $i <= $pages; $i++) { 
							
									?>
									<li class=""><a href="index.php?act=danhmuc&id=<?= $idCompare ?>&trang=<?= $i ?>"><?php echo $i ?></a></li>
									<?php }
									break;
								case 'danhmuc-asc':
									for ($i=1; $i <= $pages; $i++) { 
							
									?>
									<li class=""><a href="index.php?act=danhmuc-asc&id=<?= $idCompare ?>&trang=<?= $i ?>"><?php echo $i ?></a></li>
									<?php }
									break;
								case 'danhmuc-desc':
									for ($i=1; $i <= $pages; $i++) { 
							
									?>
									<li class=""><a href="index.php?act=danhmuc-desc&id=<?= $idCompare ?>&trang=<?= $i ?>"><?php echo $i ?></a></li>
									<?php }
									break;
								case 'danhmuc-bestseller':
									for ($i=1; $i <= $pages; $i++) { 
							
									?>
									<li class=""><a href="index.php?act=danhmuc-bestseller&id=<?= $idCompare ?>&trang=<?= $i ?>"><?php echo $i ?></a></li>
									<?php }
									break;
								case 'danhmuc-new':
									for ($i=1; $i <= $pages; $i++) { 
							
									?>
									<li class=""><a href="index.php?act=danhmuc-new&id=<?= $idCompare ?>&trang=<?= $i ?>"><?php echo $i ?></a></li>
									<?php }
									break;
								case 'danhmuc-sale':
									for ($i=1; $i <= $pages; $i++) { 
							
									?>
									<li class=""><a href="index.php?act=danhmuc-sale&id=<?= $idCompare ?>&trang=<?= $i ?>"><?php echo $i ?></a></li>
									<?php }
									break;
								case 'default':
									break;
							}
							
						}
						
					?>
				</ul>
			</div>
		</div>
	</div>
</div>