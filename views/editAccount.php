<div class="banner-black"></div>
<div class="wrapper">
	<?php  
		if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
			extract($_SESSION['user']);
			$hinhpath = "../upload/".$avatar;
                    if (is_file($hinhpath)) {
                      $hinh =  $hinhpath;
                    }
                    else{
                      $hinh = $avatar;
                    }
	?>
	<form action="index.php?act=edit_account" class="form-register" method="post" enctype = "multipart/form-data">
		<h1 class="form__register-heading">Sửa thông tin tài khoản</h1><br>
		<input type="hidden" name="id" value="<?= $id ?>">
		<div class="form__register-group">
			<i class="far fa-user"></i>
			<input class="group__input" type="text" name="fullname" placeholder="Nhập họ và tên" value = "<?= $fullname?>">
		</div>
		<span style="color: red">
			<?php
				if (isset($thongbao['fullname']) && ($thongbao['fullname']!='')) {
					echo $thongbao['fullname'];
					}
			?>
		</span>
		<div class="form__register-group">
			<i class="far fa-user"></i>
			<input class="group__input" type="text" name="address" placeholder="Nhập địa chỉ nhà" value = "<?= $address?>">
		</div>
		<span style="color: red">
			<?php
				if (isset($thongbao['address']) && ($thongbao['address']!='')) {
					echo $thongbao['address'];
					}
			?>
		</span>
		<div class="form__register-group">
			<i class="far fa-user"></i>
			<input class="group__input" type="text" name="tel"  placeholder="Nhập số điện thoại" value = "<?= $tel?>">
		</div>
			<span style="color: red">
				<?php
					if (isset($thongbao['tel']) && ($thongbao['tel']!='')) {
						echo $thongbao['tel'];
					}
				?>
			</span>
		<div class="form__register-group">
			<i class="far fa-user"></i>
			<input class="group__input" type="email" name="email" placeholder="Nhập email" value = "<?= $email?>">
		</div>
		<span style="color: red">
				<?php
					if (isset($thongbao['email']) && ($thongbao['email']!='')) {
						echo $thongbao['email'];
					}
				?>
		</span>
		<div class="">
			<i class="fas fa-photo-video"></i>
			<input class="group__input" type="file" style="outline: none;" name="avatar">
			<img class="group__img" src="<?= $hinh ?>" alt="">
		</div>
		<span style="color: red">
			<?php
				if (isset($thongbao['avatar']) && ($thongbao['avatar']!='')) {
					echo $thongbao['avatar'];
					}
			?>
		</span>
		<input type="submit" id="submit" name="capnhat" class="form__register-submit" value= "Cập nhật">
		<span style="color: red">
			<?php
				if (isset($thongbao['mes']) && ($thongbao['mes']!='')) {
					echo $thongbao['mes'];
				}
			?>
		</span>
	</form>
	<?php } ?>	
</div>
</html>