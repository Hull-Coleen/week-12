function check(password1, password2) {
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