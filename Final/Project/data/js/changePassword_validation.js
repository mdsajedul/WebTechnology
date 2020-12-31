function validation(){
	var currentPassword=document.getElementById('currentPassword').value;
	var newPassword=document.getElementById('newPassword').value;
	var reNewPassword=document.getElementById('reNewPassword').value;

	if(currentPassword==""){
		document.getElementById('currentPasswordErr').innerHTML="Please enter your current password";
		return false;
	}
	if(newPassword==""){
		document.getElementById('newPasswordErr').innerHTML="Please enter your new password ";
		return false;
	}
	if(reNewPassword==""){
		document.getElementById('reNewPasswordErr').innerHTML="Please re-enter your new password";
		return false;
	}
	return true;
}