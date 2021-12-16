
function login() {
    var e = $("username").value;
	var p = $("password").value;
	var showInfo = $("show_some_message");
	var waite = $("waite");
	var btnlogin = $("loginbtn");
    if (e == "" || p == ""){
        showInfo.innerHTML = "Please fill all form";
    } else {
        showInfo.style.display = "none";
        btnlogin.style.display = "none";
        waite.style.display = "block";
		var ajax = ajaxObj("POST", "../main/login.php");
		ajax.onreadystatechange = function() {
		    if (ajaxReturn(ajax) == true) {
		        if (ajax.responseText == "success") {
		            window.location="../user/profile.php?maika="+ajax.responseText;
				} else {
		            showInfo.style.display = "block";
		            showInfo.innerHTML = ajax.responseText;
		            $("loginbtn").style.display = "block";
		            $("waite").style.display = "none";
				}
			}
		}
		ajax.send("username="+e+"&password="+p);
    }
}