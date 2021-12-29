<div class="banner-black"></div>
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="text-center">Update Danh Mục</h2>
		</div>
		<?php 
			if (is_array($load__sanpham__update)) {
				extract($load__sanpham__update);
				$hinhpath = "../upload/".$thumbnail;
				if (is_file($hinhpath)) {
                      $hinh = $hinhpath;
                    }
                    else{
                      $hinh = $thumbnail;
                    }
			}
		 ?>
		<form class="panel-body" method="POST" action="index.php?act=updatesp" enctype = "multipart/form-data">
			<div class="form-group">
				<input type="hidden" name="id" value="<?=(isset($id) && $id > 0)? $id:"" ?>">

				<label for="name">Tên sản phẩm:</label>
				<input name="name" type="text" class="form-control bg-info bg-gradient" id="name" value="<?=(isset($name) && $name != "")? $name:"" ?>">

				<label for="price">Giá sản phẩm:</label>
				<input name="price" type="text" class="form-control bg-info bg-gradient" id="price" value="<?=(isset($price) && $price != "")? $price:"" ?>">

				<label for="price_del">Giá discount:</label>
				<input name="price_del" type="text" class="form-control bg-info bg-gradient" id="price_del" value="<?=(isset($price_del) && $price_del != "")? $price_del:"" ?>">

				<label for="image">Ảnh sản phẩm:</label>
				<input name="image" type="file" class="" id="image">
				<img src="<?=(isset($hinh) && $hinh != "")? $hinh:""?>" class="group__img" alt="" ><br>

				<label for="descritation">Mô tả:</label>
				<textarea name="descritation" class = "form-control" id="descritation"><?=(isset($content) && $content != "")? $content:"" ?></textarea>

			<input type="submit" class="btn btn-success" style="margin-top: 10px" name="capnhat" value="Lưu"></input>
			<p><?= (isset($thongbao['mes']))? $thongbao['mes']:"" ?></p>
		</form>
	</div>
	<a href="index.php?act=listProduct" title=""><button class="btn btn-warning">Quay về danh sách sản phẩm</button></a>
</div>