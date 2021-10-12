<div class="footer">
	<div class="footer-item">
		<h1 class="footer-heading">Về chúng tôi</h1>
		<div class="footer-content">
			<ul class="footer-content-ul">
				<li><a href="#" title="">Câu chuyện thương hiệu</a></li>
				<li><a href="#" title="">Tin tức</a></li>
				<li><a href="#" title="">Liên hệ</a></li>
				<li><a href="#" title="">Đôi cánh yêu thương</a></li>
			</ul>
		</div>
	</div>
	<div class="footer-item">
		<h1 class="footer-heading">Chính sách bán hàng</h1>
		<div class="footer-content">
			<ul class="footer-content-ul">
				<li><a href="#" title="">Chính sách đổi hàng</a></li>
				<li><a href="#" title="">Chính sách bảo hành</a></li>
				<li><a href="#" title="">Chính sách hội viên</a></li>
				<li><a href="#" title="">Chính sách giao nhận</a></li>
				<li><a href="#" title="">Hướng dẫn mua hàng</a></li>
				<li><a href="#" title="">Chính sách bảo mật</a></li>
			</ul>
		</div>
	</div>
	<div class="footer-item">
		<h1 class="footer-heading">Tư vấn</h1>
		<div class="footer-content">
			<ul class="footer-content-ul">
				<li><a href="#" title="">Tư vấn phong cách</a></li>
				<li><a href="#" title="">Tư vấn chọn size</a></li>
				<li><a href="#" title="">Hỏi đáp</a></li>
			</ul>
		</div>
	</div>
	<div class="footer-item">
		<h1 class="footer-heading">Kết nối với chúng tôi</h1>
		<div class="footer-content">
			<ul class="footer-content-ul">
				<li><a href="#" title="">Câu chuyện thương hiệu</a></li>
			</ul>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(window).scroll(function() {
			if ($(this).scrollTop()) {
				$('header').addClass('sticky')
			} else {
				$('header').removeClass('sticky')
			}
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.container-header-ul-item').hover(function() {		
			$('.overlay').addClass("overlay__visible");		
		},function(){
			$('.overlay').removeClass("overlay__visible");		
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.menu-child').hover(function() {		
			$('.overlay').addClass("overlay__visible");		
		},function(){
			$('.overlay').removeClass("overlay__visible");		
		});
	});
</script>
</body>

</html>