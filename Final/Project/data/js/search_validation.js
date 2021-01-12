function validation(){


var search =document.getElementById('search').value;

if(search==""){
	document.getElementById('searchErr').innerHTML="Fill the Search box";
	return false;
}

return true;




}