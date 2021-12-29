	const account = document.querySelector('.js-account');
	const modal = document.querySelector('.js-modal-container');
	const close = document.querySelector('.js-close');
	const form__login = document.querySelector('.js-form__login');
	// hàm hiển thị phần modal(thêm class open vào modal-container)
	function showModal(){
		modal.classList.add('open');
	}
	// hàm ẩn phần modal(xóa class open vào modal-container)
	function hideModal(){
		modal.classList.remove('open');
	}

	// nghe hành vi click 
	account.addEventListener('click', showModal);

	close.addEventListener('click', hideModal);

	modal.addEventListener('click', hideModal);

	form__login.addEventListener('click', function(event){
		event.stopPropagation();
	});