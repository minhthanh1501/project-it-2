<div class="banner-black"></div>
<div class="container">
	<div class="">
		<h1 class="">ĐƠN HÀNG CỦA BẠN</h1>
		<table class="table table-bordered">
			<tr>
				<th>MÃ ĐƠN HÀNG</th>
				<th>THÔNG TIN</th>
				<th>SỐ LƯỢNG MẶT HÀNG</th>
				<th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
				<th>TÌNH TRẠNG ĐƠN HÀNG</th>
				
			</tr>
			<?php
				function cart_count($id){
					$query = 'SELECT * FROM order_details where id_the_order ='.$id;
					$bill = pdo_query($query);
					return sizeof($bill);
				}
				function get_ttdh($n){
					switch ($n) {
						case '0':
							$stt = 'Đơn hàng mới';
							break;
						case '1':
							$stt = 'Đang xử lý';
							break;
						case '2':
							$stt = 'Đang giao hàng';
							break;
						case '3':
							$stt = 'Hoàn tất';
							break;
						default:
							$stt = 'Đơn hàng mới';
							break;
					}
					return $stt;
				}
				if (is_array($listbill)) {
					foreach ($listbill as $listbill) {
						extract($listbill);	
						$ttdh = get_ttdh($status);	
						$count = cart_count($id);
						$format_total = number_format($total,0,',','.');
			?>
			<tr>
				<td>MODERN-<?= $id ?></td>
				<td><?= $fullname ?><br><?= $address ?><br><?= $created_at ?></td>
				<td><?= $count ?></td>
				<td><?= $format_total ?>VNĐ</td>
				<td><?= $ttdh ?></td>
			</tr>
			<?php }} ?>

		</table>
	</div>
</div>