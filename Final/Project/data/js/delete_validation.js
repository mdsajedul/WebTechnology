function validation(){

		var deletez=document.getElementById("deletez").value;
		if(deletez==""){
			document.getElementById('deleteErr').innerHTML="Text box is blank";
			return false;
		}
		return true;
	}