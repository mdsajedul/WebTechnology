
		function validation(){
			var id = document.getElementById('id').value;
			var username=document.getElementByUsername('username').value;
			var password=document.getElementByPassword('password').value;
			var email=document.getElementByEmail('email').value;
			var dob =document.getElementByDob('dob').value;

			if(id==""){
				document.getElementById('errorMsg').innerHTML="ID is empty";
				document.getElementById('errorMsg').style.color = "red";
					return false;	
			}
			else if(username == ""){
                    document.getElementById('errorMsg').innerHTML = "Name is empty";
                    document.getElementById('errorMsg').style.color = "red";
					return false;	
			}
			 else if(password == ""){
                    document.getElementById('errorMsg').innerHTML = "Password is empty";
                    document.getElementById('errorMsg').style.color = "red";
					return false;
			}
			 else if(email == ""){
                    document.getElementById('errorMsg').innerHTML = "Email is empty";
                    document.getElementById('errorMsg').style.color = "red";
					return false;	
             }
                else if(dob == ""){
                    document.getElementById('errorMsg').innerHTML = "DOB is empty";
                    document.getElementById('errorMsg').style.color = "red";
					return false;	
				}
			return true;

		}
