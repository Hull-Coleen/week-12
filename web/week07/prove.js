function check(pass, pass2, mess, mess1) {
	var a = pass;
	var b= pass1;
	
	var c= mess;
	var d=mess1;
  if (document.getElementById(a).value ==
    document.getElementById(b).value) {
    document.getElementById(c).style.color = 'green';
    document.getElementById(c).innerHTML = 'matching';
	 document.getElementById(d).style.color = 'green';
    document.getElementById(d).innerHTML = 'matching';
  } else {
    document.getElementById('mess').style.color = 'red';
    document.getElementById('mess').innerHTML = 'not matching';
	document.getElementById('mess1').style.color = 'red';
    document.getElementById('mess1').innerHTML = 'not matching';
  }
}