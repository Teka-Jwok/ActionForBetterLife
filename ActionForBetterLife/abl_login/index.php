<?php include("../main/main.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Login | abl</title>
	<link rel="icon" type="image/png" href="../icon/logo.png">
<?php
    include("../header.html");
?>
    <link rel="stylesheet" type="text/css" href="../styles/login.css">
    <script type="text/javascript" src="../js/login.js"></script>
</head>
<body>
	<div id="header" class="header">
<?php 
    include("../header.php"); 
?>
	</div>
	<div id="main" class="main">
	    <div id="login" class="login">
	    	<center><h3>ABL Login</h3></center><br><br>
	      	<div id="abl_icon"></div>
	      	<div id="show_some_message"></div>
		        <form id="loginform" onsubmit="return false;">
		        <label id="Username">Username or E_mail</label>
		        <input type="text" id="username" onfocus="emptyElement('status')" maxlength="88" title="username or email">
		        <label id="Password">Password <a href = "" style = "float: right;">forget password ?</a></label>
		        <input type="password" id="password" onfocus="emptyElement('status')" maxlength="100" title="password">
		        <button id="loginbtn" onclick="login()" title="Login">Login</button>
		        <button id="waite" style="display: none; font-size: 20px;" title="please waite....">Please waite....</button>
	        </form>
	    </div>
	</div>
	<div id="footer">
<?php
    include("../footer.php") 
?>
	</div>
</body>
</html>