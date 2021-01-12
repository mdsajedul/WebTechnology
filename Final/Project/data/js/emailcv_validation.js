function validation(){

var myEmail=document.getElementById('myemail').value;
var companyEmail=document.getElementById('companyemail').value;

if(myEmail==""){
	document.getElementById('myemailErr').innerHTML="Please insert your email";
	return false;
}

if(companyEmail==""){

	document.getElementById('companyemailErr').innerHTML="Please insert comapny email";

	return false;
}


return true;









}