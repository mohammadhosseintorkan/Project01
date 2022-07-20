//var list = document.querySelectorAll('.replyButton');
var toggleButtonpassword = document.querySelector('#toggleButtonpassword');
var toggleButtonrepass = document.querySelector('#toggleButtonrepass');

if( toggleButtonpassword )
	toggleButtonpassword.addEventListener('click', toggleVisibility);

if( toggleButtonrepass )
	toggleButtonrepass.addEventListener('click', toggleVisibility);

	function toggleVisibility(){
		//var password = this.parentNode.querySelector('[name = "password"]');
		var password = document.querySelector('[name = "password"]');
		var repass = document.querySelector('[name = "repass"]');
		if( ((password.type) || (repass.type)) === 'password' ){
			password.type = 'text';
			repass.type = 'text';

			toggleButtonpassword.classList.remove('fa-eye');
			toggleButtonpassword.classList.add('fa-eye-slash');
			toggleButtonrepass.classList.remove('fa-eye');
			toggleButtonrepass.classList.add('fa-eye-slash');
		}
		else if( ((password.type) || (repass.type)) === 'text' ){
			password.type = 'password';
			repass.type = 'password';

			toggleButtonpassword.classList.remove('fa-eye-slash');
			toggleButtonpassword.classList.add('fa-eye');
			toggleButtonrepass.classList.remove('fa-eye-slash');
			toggleButtonrepass.classList.add('fa-eye');
		}

	}

var likeButtonList = document.querySelectorAll('.fa-heart');
//for(i = 0; i < likeButtonList.length; i++)
for(item of likeButtonList)
	item.addEventListener('click', toggleLike);

function toggleLike(){
	if( this.classList.contains('far') ) {
		this.classList.remove('far');
		this.classList.add('fas');
	}
	else if( this.classList.contains('fas') ){
		this.classList.remove('fas');
		this.classList.add('far');

	}
}

var numberList = document.querySelectorAll('[type = "number"]');
for(item of numberList)
	item.addEventListener('blur', Validation.number );




var requiredList = document.querySelectorAll(':required');
for(item of requiredList)
	item.addEventListener('blur', Validation.required );

