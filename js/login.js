const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

// Al presionar Enter en el campo user, pasar al campo pass
const userInput = document.querySelector('input[name="user"]');
const passInput = document.querySelector('input[name="pass"]');

userInput.addEventListener("keydown", function(e) {
	if (e.key === "Enter") {
		e.preventDefault();
		passInput.focus();
	}
});
