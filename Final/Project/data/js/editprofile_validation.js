function validation(){

	var firstname=document.getElementById('firstname').value;
	var lastname=document.getElementById('lastname').value;
	var fathername=document.getElementById('fathername').value;
	var mothername=document.getElementById('mothername').value;
	var religion=document.getElementById('religion').value;
	var postoffice=document.getElementById('postoffice').value;
	var road=document.getElementById('road').value;
	var email=document.getElementById('email').value;


	if(firstname==""){
		document.getElementById('firstnameErr').innerHTML="Please insert your firstname";
		return false;
	}
	if(lastname==""){
		document.getElementById('lastnameErr').innerHTML="Please insert your lastname";
		return false;
	}
	if(fathername==""){
		document.getElementById('fathernameErr').innerHTML="Please insert your fathername";
		return false;
	}
	if(mothername==""){
		document.getElementById('mothernameErr').innerHTML="Please insert your mothername";
		return false;
	}
	if(religion==""){
		document.getElementById('religionErr').innerHTML="Please insert your religion";
		return false;
	}
	if(postoffice==""){
		document.getElementById('postofficeErr').innerHTML="Please insert your post office";
		return false;
	}
	if(road==""){
		document.getElementById('roadErr').innerHTML="Please insert your road";
		return false;
	}
	if(email==""){
		document.getElementById('emailErr').innerHTML="Please insert your email";
		return false;
	}

return true;



}