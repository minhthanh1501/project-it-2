<div class="banner-black"></div>
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="text-center">Update Danh Mục</h2>
		</div>
		<?php 
			if (is_array($load__danhmuc__update)) {
				extract($load__danhmuc__update);
			}
		 ?>
		<form class="panel-body" method="POST" action="index.php?act=updatedm">
			<div class="form-group">
				<input type="hidden" name="idCate" value="<?=(isset($id) && $id > 0)? $id:"" ?>">
				<label for="usr">Tên danh mục:</label>
				<input name="nameCate" type="text" class="form-control bg-info bg-gradient" id="usr" value="<?=(isset($name) && $name != "")? $name:"" ?>">
				<label for="tp">Types:</label>
				<input name="typesCate" type="text" class="form-control bg-info bg-gradient" id="tp" value="<?=(isset($types) && $types != "")? $types:"" ?>">
			</div>
			<input type="submit" class="btn btn-success" style="margin-top: 10px" name="capnhat" value="Lưu"></input>
			<p><?= (isset($thongbao['mes']))? $thongbao['mes']:"" ?></p>
		</form>
	</div>
	<a href="index.php?act=listCategory" title=""><button class="btn btn-warning">Quay về danh sách danh mục</button></a>
</div>