function $(x){
	return document.getElementById(x);
}
function toggleElement(x){
	var x= $(x);
	if(x.style.display=='block'){
		x.style.display='none';
	}else{
	x.style.display='block';
	}
}
function ajaxObj( meth, url ) {
	var x = new XMLHttpRequest();
	x.open( meth, url, true );
	x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	return x;
}
function ajaxReturn(x){
	if(x.readyState == 4 && x.status == 200){
   		return true;	
	}
}