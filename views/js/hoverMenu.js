$(document).ready(function() {
	$('.container-header-ul-item').hover(function() {
			$('.overlay').addClass("overlay__visible");
	},function(){
			$('.overlay').removeClass("overlay__visible");
	});
});


$(document).ready(function() {
				$('.menu-child').hover(function() {
					$('.overlay').addClass("overlay__visible");
		},function(){
					$('.overlay').removeClass("overlay__visible");
		});
	});