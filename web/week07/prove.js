function signinCheck() {
  if (document.getElementById('password1').value ==
    document.getElementById('password2').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
	 document.getElementById('message1').style.color = 'green';
    document.getElementById('message1').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
	document.getElementById('message1').style.color = 'red';
    document.getElementById('message1').innerHTML = 'not matching';
  }
}
function passwordCheck {
	var pattern = new RegExp('/^(?=\D*\d)[^ ]{6,}$/');
	if (pattern.test(password)) {
		document.getElementById('passwordText').style.visibility="hidden";
	}
	else {
	    document.getElementById('passwordText').innerHTML = 'Password must have one number and be at least 7 characters';
	}
  
	
}
function check() {
  if (document.getElementById('password').value ==
    document.getElementById('1password').value) {
    document.getElementById('message2').style.color = 'green';
    document.getElementById('message2').innerHTML = 'matching';
	 document.getElementById('message3').style.color = 'green';
    document.getElementById('message3').innerHTML = 'matching';
  } else {
    document.getElementById('message2').style.color = 'red';
    document.getElementById('message2').innerHTML = 'not matching';
	document.getElementById('message3').style.color = 'red';
    document.getElementById('message3').innerHTML = 'not matching';
  }
}
function test() {
	if(document.getElementById('password').value == "" ||
	document.getElementById('name').value == "" ||
	document.getElementById('username').value == "" ||
	document.getElementById('email').value == "" ||
	document.getElementById('address').value == "") {
	document.getElementById('create').style.color = 'red';
	document.getElementById('create').disabled = true;
	document.getElementById('submitWarning').innerHTML = "You must fill in all the fields";
	
	}
	else {
		document.getElementById('create').style.color = 'white';
	document.getElementById('create').disabled = false;
	document.getElementById('submitWarning').innerHTML = "";
	}
}

