function validation(){

var message=document.getElementById('message').value;

if(message==""){
	document.getElementById('messageErr').innerHTML="Fill the message box first";
	return false;
}

return true;



}