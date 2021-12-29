<div class="banner-black"></div>
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="text-center">Thêm Danh Mục</h2>
		</div>
		<form class="panel-body" method="POST" action="index.php?act=adddm">
			<div class="form-group">
				<label for="usr">Tên danh mục:</label>
				<input name="nameCate" type="text" class="form-control bg-info bg-gradient" id="usr">
				<label for="tp">Types:</label>
				<input name="typesCate" type="text" class="form-control bg-info bg-gradient" id="tp">
			</div>
			<input type="submit" class="btn btn-success" style="margin-top: 10px" name="themmoi" value="Thêm"></input>
			<p style="color: red">
				<?php
					if (isset($thongbao['mes']) && ($thongbao['mes']!='')) {
						echo $thongbao['mes'];
					}
				?>
			</p>
		</form>
	</div>
	<a href="index.php?act=listCategory" title=""><button class="btn btn-warning">Quay về danh sách danh mục</button></a>
</div>