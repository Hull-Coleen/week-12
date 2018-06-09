function check(pass, pass2, mess, mess1) {
  if (document.getElementById('pass').value ==
    document.getElementById('pass2').value) {
    document.getElementById('mess').style.color = 'green';
    document.getElementById('mess').innerHTML = 'matching';
	 document.getElementById('mess1').style.color = 'green';
    document.getElementById('mess1').innerHTML = 'matching';
  } else {
    document.getElementById('mess').style.color = 'red';
    document.getElementById('mess').innerHTML = 'not matching';
	document.getElementById('mess1').style.color = 'red';
    document.getElementById('mess1').innerHTML = 'not matching';
  }
}