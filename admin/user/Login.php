<link rel="stylesheet" href="../css/Login.css">
<div class="wrapper">
	<form action="" class="form-login">
		<h1 class="form-heading">Form Đăng nhập</h1><br>
		<div class="form-group">
			<i class="far fa-user"></i>
			<input class="form-input" type="text" name="_Username" value="" placeholder="Tên Email hoặc tài khoản">
		</div>
		<div class="form-group">
			<i class="fas fa-lock"></i>
			<input class="form-input" type="password" name="_Password" value="" placeholder="Mật khẩu">
			<div id="eye">
				<i class="far fa-eye"></i>
			</div>
		</div>
		<input type="submit" name="_Submit" class="form-submit" value= "Đăng nhập">
		<div class="form-link">
			<span>Bạn chưa có tài khoản? Đăng ký<a href="index.php?act=register" title="">Tại đây</a></span>
		</div>
	</form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script type="text/javascript" src="../js/Login.js"></script>
</html>