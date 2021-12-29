
		const slideValue = document.querySelector(".range-sliderValue__span");
		const inputSlider = document.querySelector(".range-field__input");
		inputSlider.oninput = (()=>{
			let value = inputSlider.value;
			slideValue.textContent = value;
			slideValue.style.left = (value/20) + "%";
			slideValue.classList.add("show");
		});
		inputSlider.onblur = (()=>{
			slideValue.classList.remove("show");
		});