	const user = document.querySelector('.js-user');
	const user__setting = document.querySelector('.js-login-user__setting');
	const user__setting__close = document.querySelector('.js-user-close');
	function showUserSetting(){
		user__setting.classList.add('open-user');
	}
	function hideUserSetting(){
		user__setting.classList.remove('open-user');
	}

	user.addEventListener('click', showUserSetting);
	user__setting__close.addEventListener('click', hideUserSetting);