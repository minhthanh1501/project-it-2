<div class="banner-black"></div>
<div class="container">
	<div class="information-order">
		<h1 class="" style="color: #00ae00">Cảm ơn quý khách đã đặt hàng.<i class="far fa-check-circle"></i></h1>
	</div>
	<?php 
		if (isset($theorder)&&(is_array($theorder))) {
			extract($theorder);
			$format_tong = number_format($total,0,',','.');
		
	?>
	<div class="information-order">
		<div>
			<li>MÃ ĐƠN HÀNG : MODERN-<?= $id ?></li>
			<li>Ngày đặt hàng : <?= $created_at ?></li>
			<li>Tổng Đơn Hàng : <?= $format_tong ?> VNĐ</li>
		</div>
	</div>


	<div class="">
		<div class="">
			THÔNG TIN ĐẶT HÀNG
		</div>
		<div class="information-order">
			<table class="">
				<tr>
					<td>Người đặt hàng :</td>
					<td><?= $fullname ?></td>
				</tr>
				<tr>
					<td>Địa chỉ :</td>
					<td><?= $address ?></td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><?= $email ?></td>
				</tr>
				<tr>
					<td>tel :</td>
					<td><?= $tel ?></td>
				</tr>
			</table>		
		</div>
	</div>
	<?php } ?>
	<?php 
		if (isset($order_details)&&(is_array($order_details))) {

			foreach ($order_details as $order_details) {
				extract($order_details);
				$format_price = number_format($price,0,',','.');
				$format_tt = number_format($thanhtien,0,',','.');
				$query = 'SELECT * FROM product where id = '.$id_product;
				$row = pdo_query_one($query);
			
		
	?>
	<div class="">
		<div class="">
			THÔNG TIN GIỎ HÀNG
		</div>
		<div class="information-order">
			<table class="table table-bordered">
				<tr>
					<th>Tên sản phẩm</th>
					<th>Ảnh sản phẩm</th>
					<th>Số lượng</th>
					<th>Đơn giá</th>
					<th>Size</th>
					<th>Thành tiền</th>
				</tr>
				<tr>
					<td><?= $row['name'] ?></td>
					<td><img src="<?= $row['thumbnail'] ?>" alt="" style = "width: 100px"></td>
					<td><?= $quantity ?></td>
					<td><?= $format_price ?>VNĐ</td>
					<td><?= $size ?></td>
					<td><?= $format_tt ?>VNĐ</td>
				</tr>
			</table>
		</div>
	</div>
	<?php }} ?>





			
</div>