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

