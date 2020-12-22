
function validation(){
	var username=document.getElementById('username').value;
	var psw=document.getElementById('password').value;

	if(username==""){
			document.getElementById('usernameErr').innerHTML="Username is empty";
			return false;
		}
	else if(psw==""){
			document.getElementById('pswErr').innerHTML="Password is empty";
			return false;
		}
		return true;
	}