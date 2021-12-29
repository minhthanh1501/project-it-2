<div class="banner-black"></div>
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="text-center">Thêm Sản Phẩm</h2>
		</div>
		<form class="panel-body" method="POST" action="index.php?act=addsp" enctype = "multipart/form-data">
			<div class="form-group">
				<label for="tp">Danh mục:</label>
				<select name="id_category" class="form-select " aria-label="Default select example">
					<option selected>chọn Danh mục</option>
					<?php
						foreach ($category as $category) {
							extract($category);
					?>
					<option value="<?php echo $id ?>"><?php echo $name ?></option>
					<?php	}?>
				</select>
				<?php
					if (isset($_SESSION['user'])) {
						extract($_SESSION['user'])
				?>
				<input  type="hidden" name="id_users" value="<?php echo $id ?>"><br>
				<?php } ?>
				<label for="usr">Tên sản phẩm:</label>
				<input name="namePro" type="text" class="form-control bg-info bg-gradient" id="usr">
				<label for="tp">Giá:</label>
				<input name="pricePro" type="text" class="form-control bg-info bg-gradient" id="tp">
				<label for="tp">Giá discount:</label>
				<input name="discountPro" type="text" class="form-control bg-info bg-gradient" id="tp">
				<label for="tp">Ảnh sản phẩm:</label><br>
				<input type="file" name="imagePro" class="" id="tp" style="outline: none;"><br>
				<label for="tp">Mô tả sản phẩm:</label>
				<textarea name="descriptionPro" class="form-control bg-info bg-gradient" id="tp"></textarea>
				<label for="tp">Thương hiệu:</label>
				<select name="id_brand" class="form-select " aria-label="Default select example">
					<option selected>Chọn thương hiệu</option>
					<?php
						foreach ($brand as $brand) {
							extract($brand);
					?>
					<option value="<?php echo $id ?>"><?php echo $name ?></option>
					<?php	}?>
				</select>
			</div>
			<input type="submit" class="btn btn-success" style="margin-top: 10px;" name="themmoi" value="Thêm"></input>
			<p style="color: red">
				<?php
					if (isset($thongbao['mes']) && ($thongbao['mes']!='')) {
						echo $thongbao['mes'];
					}
				?>
			</p>
		</form>
	</div>
	<a href="index.php?act=listProduct" title=""><button class="btn btn-warning">Quay về danh sách sản phẩm</button></a>
</div>