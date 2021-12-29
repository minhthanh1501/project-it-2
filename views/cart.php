<div class="banner-black"></div>
<div class="container">
	<div class="">
		<form method="POST" action="index.php?act=bill">
			<h1 class="">Giỏ hàng</h1>
			<table class="table table-bordered">
				<tr>
					<th>STT</th>
					<th>Tên sản phẩm</th>
					<th>Ảnh sản phẩm</th>
					<th>Số lượng</th>
					<th>Đơn giá</th>
					<th>Size</th>
					<th>Thành tiền</th>
				</tr>
				<?php
					if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
						$tong = 0;
						for ($i=0; $i < sizeof($_SESSION['cart']); $i++) {
							$tt = $_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][4];
						$tong+=$tt;
						$format_price = number_format(($_SESSION['cart'][$i][4]),0,',','.');
						$format_tong = number_format($tong,0,',','.');
						$format_tt = number_format($tt,0,',','.');
						
				?>
				<tr>
					<td><?= ($i+1) ?></td>
					<td><?= $_SESSION['cart'][$i][1] ?></td>
					<td><img src="<?= $_SESSION['cart'][$i][2] ?>" alt="" style = "width: 100px"></td>
					<td><?= $_SESSION['cart'][$i][3] ?></td>
					<td><?= $format_price ?>VNĐ</td>
					<td><?= $_SESSION['cart'][$i][5] ?></td>
					<td><?= $format_tt ?>VNĐ</td>
					<td><a href="index.php?act=deletecart&STT=<?= $i ?>" title="" class="btn btn-outline-danger">Xóa</a></td>
				</tr>
				<?php } ?>
				<tr class="bg-warning">
					<td>&nbsp</td>
					<td>Tổng tiền</td>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td><?= isset($format_tong)? $format_tong :'0' ?>VNĐ</td>
					<td>&nbsp</td>
				</tr>
				<?php } ?>
			</table>
			<input type="submit" class="btn btn-success" name="dathang" value="Đặt hàng">
			<td><a href="index.php?act=deletecart" title="" class="btn btn-danger">Xóa giỏ hàng</a></td>
			<td><a href="index.php" title="" class="btn btn-info">Tiếp tục đặt hàng</a></td>
		</form>
	</div>
</div>