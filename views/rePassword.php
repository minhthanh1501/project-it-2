<div class="banner-black"></div>
<div class="wrapper">
	<form action="index.php?act=edit_password" class="form-register" method="post">
		<input type="hidden" name="id" value="<?= $_SESSION['user']['id'] ?>">
		<h1 class="form__register-heading">Đổi mật khẩu</h1><br>
		<div class="form__register-group">
			<i class="fas fa-lock"></i>
			<input class="group__input" type="password" name="oldpassword" placeholder="Nhập mật khẩu cũ" >
		</div>
		<span style="color: red">
				<?php
					if (isset($thongbao['oldpassword']) && ($thongbao['oldpassword']!='')) {
						echo $thongbao['oldpassword'];
					}
				?>
			</span>
		<div class="form__register-group">
			<i class="fas fa-lock"></i>
			<input class="group__input" type="password" name="password"placeholder="Nhập mật khẩu mới" >
			<div id="eye">
				<i class="far fa-eye"></i>
			</div>
		</div>
		<span style="color: red">
				<?php
					if (isset($thongbao['password']) && ($thongbao['password']!='')) {
						echo $thongbao['password'];
					}
				?>
		</span>
		<div class="form__register-group">
			<i class="fas fa-lock"></i>
			<input class="group__input" type="password" name="repassword" placeholder="Xác nhận mật khẩu mới" >
		</div>
		<span style="color: red">
				<?php
					if (isset($thongbao['repassword']) && ($thongbao['repassword']!='')) {
						echo $thongbao['repassword'];
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
</div>
</html>