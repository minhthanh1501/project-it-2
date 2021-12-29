<div class="banner-black"></div>
<div class="wrapper">
	<form action="index.php?act=register" class="form-register" method="post">
		<h1 class="form__register-heading">Form Đăng Ký</h1><br>
		<div class="form__register-group">
			<i class="far fa-user"></i>
			<input class="group__input" type="text" name="fullname" placeholder="Nhập họ và tên" >
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
			<input class="group__input" type="text" name="address" placeholder="Nhập địa chỉ nhà" >
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
			<input class="group__input" type="text" name="tel"  placeholder="Nhập số điện thoại" >
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
			<input class="group__input" type="email" name="email" placeholder="Nhập email" >
		</div>
		<span style="color: red">
				<?php
					if (isset($thongbao['email']) && ($thongbao['email']!='')) {
						echo $thongbao['email'];
					}
				?>
			</span>
		<div class="form__register-group">
			<i class="fas fa-lock"></i>
			<input class="group__input" type="password" name="password"placeholder="Nhập mật khẩu" >
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
			<input class="group__input" type="password" name="repassword" placeholder="Nhập lại mật khẩu" >
		</div>
		<span style="color: red">
				<?php
					if (isset($thongbao['repassword']) && ($thongbao['repassword']!='')) {
						echo $thongbao['repassword'];
					}
				?>
			</span>
		<div class="form__register-group" style="border : none">
			<i class="far fa-user"></i><span class="role-padding">Đăng ký với vai trò :</span>
			<input class="role-padding" type="radio" name="role" id="rolecustomer" value="customer" checked >
			<label for="rolecustomer" class="role-padding">Customer</label>
			<input class="role-padding" type="radio" name="role" id="roleadmin" value="admin" >
			<label for="roleadmin" class="role-padding">Admin</label>
			<input class="role-padding" type="radio" name="role" id="roleaseller" value="seller" >
			<label for="roleadmin" class="role-padding">seller</label>
		</div>
		<span style="color: red">
				<?php
					if (isset($thongbao['role']) && ($thongbao['role']!='')) {
						echo $thongbao['role'];
					}
				?>
		</span>
		<input type="submit" id="submit" name="dangky" class="form__register-submit" value= "Đăng Ký">
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