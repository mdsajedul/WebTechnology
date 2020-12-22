
	function validation(){
		var firstName=document.getElementById('firstname').value;
		var lastName=document.getElementById('lastname').value;
		var email=document.getElementById('email').value;
		var username=document.getElementById('username').value;
		var psw=document.getElementById('psw').value;
		var pswRepeat=document.getElementById('psw_repeat').value;

		if(firstName == ""){
			document.getElementById('firstnameErr').innerHTML="First Name is empty";
			return false;
		}
		else if(lastName==""){
			document.getElementById('lastnameErr').innerHTML="Last Name is empty";
			return false;
		}
		else if(email==""){
			document.getElementById('emailErr').innerHTML="Email is empty";
			return false;
		}
		else if(username==""){
			document.getElementById('usernameErr').innerHTML="Username is empty";
			return false;
		}
		else if(psw==""){
			document.getElementById('pswErr').innerHTML="Password is empty";
			return false;
		}
		else if(psw_repeat==""){
			document.getElementById('psw_repeatErr').innerHTML="Repeat Password is empty";
			return false;
		}
		return true;
	}