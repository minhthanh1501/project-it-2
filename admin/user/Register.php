<link rel="stylesheet" href="../css/Login.css">
<div class="wrapper">
	<form action="Function.php" class="form-login" method="post">
		<h1 class="form-heading">Form Đăng Ký</h1><br>
		<div class="form-group">
			<i class="far fa-user"></i>
			<input class="form-input" type="text" name="_fullname" placeholder="Nhập họ và tên" required>
		</div>
		<div class="form-group">
			<i class="far fa-user"></i>
			<input class="form-input" type="date" name="_birthday"  placeholder="Nhập ngày sinh" required>
		</div>
		<div class="form-group">
			<i class="far fa-user"></i>
			<input class="form-input" type="email" name="_email" placeholder="Nhập email" required>
		</div>
		<div class="form-group">
			<i class="fas fa-lock"></i>
			<input class="form-input" type="password" name="_password"placeholder="Nhập mật khẩu" required>
			<div id="eye">
				<i class="far fa-eye"></i>
			</div>
		</div>
		<div class="form-group">
			<i class="fas fa-lock"></i>
			<input class="form-input" type="password" name="_repassword" placeholder="Nhập lại mật khẩu" required>
		</div>
		<input type="submit" id="_submit" name="_submit" class="form-submit" value= "Đăng Ký">
		<div class="form-link">
			<a href="index.php?act=login" title="">Quay về trang đăng nhập</a>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/Login.js"></script>
</html>