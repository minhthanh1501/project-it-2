<div class="banner-black"></div>
<div class="container">
	<div class="">
		<form method="POST" action="index.php?act=billconfirm">
			<div class="information-order">
				<?php 
					if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
						
				?>
				<div class="">
					<h1 class="content-title">Thông tin người nhận</h1>
				</div>
				<div class="form-group">
					<label for="name">Tên người nhận:</label>
					<input type="text"  name="name" value="<?= $_SESSION['user']['fullname'] ?>" class="form-control" placeholder="Enter name" id="name">
				</div>
				<div class="form-group">
					<label for="email">Email address:</label>
					<input type="email"  name="email" value="<?= $_SESSION['user']['email'] ?>" class="form-control" placeholder="Enter email" id="email">
				</div>
				<div class="form-group">
					<label for="address">Địa chỉ người nhận:</label>
					<input type="text"  name="address" value="<?= $_SESSION['user']['address'] ?>" class="form-control" placeholder="Enter address" id="address">
				</div>
				<div class="form-group">
					<label for="tel">Số điện thoại:</label>
					<input type="text" name="tel" value="<?= $_SESSION['user']['tel'] ?>" class="form-control" placeholder="Enter phone number" id="tel">
				</div>
				<div class="form-group">
					<label for="note">Ghi chú:</label>
					<input type="text" name="note" class="form-control" placeholder="Enter note" id="note">
				</div>
				<?php }else{ ?>
				<div class="">
					<h1 class="content-title">Thông tin người nhận</h1>
				</div>
				<div class="form-group">
					<label for="name">Tên người nhận:</label>
					<input type="text" name="name" class="form-control" placeholder="Enter name" id="name">
				</div>
				<div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
				</div>
				<div class="form-group">
					<label for="address">Địa chỉ người nhận:</label>
					<input type="text" name="address" class="form-control" placeholder="Enter address" id="address">
				</div>
				<div class="form-group">
					<label for="tel">Số điện thoại:</label>
					<input type="text" name="tel" class="form-control" placeholder="Enter phone number" id="tel">
				</div>
				<div class="form-group">
					<label for="note">Ghi chú:</label>
					<input type="text" name="note" class="form-control" placeholder="Enter note" id="note">
				</div>
				<?php } ?>	
			</div>
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
				</tr>
				<?php } ?>
			</table>
			<input type="submit" class="btn btn-success" name="xacnhan" value="Xác nhận đơn hàng">
			<td><a href="index.php" title="" class="btn btn-info">Tiếp tục đặt hàng</a></td>
		</form>
	</div>
</div>