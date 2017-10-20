<html>
<head>
<title>Shop@Shop_Login</title>
<link rel="stylesheet" type = " text/css" href="ShopCSS.css"/>
<script type = "text/javascript">
localStorage.setItem("count",0);
</script>
</head>
<body class = "disp">
<div class = "division">
<h1 class = "login"> SHOP@SHOP</h1>

<img src = "logo.jpeg" alt = "Shop@Shop_logo" width = "300px" height = "250px"/>
<div class = "disp">
<form method="get" action="Login.php">
<br/>
<label> Username:<input type = "text" id = "uname" name = "uname" placeholder = "Username/Email" ></label><br/><br/>
<script type = "text/javascript">
function unamels()
{
	localStorage.setItem("uname",document.getElementById("uname").value);
}
</script>
<label> Password :<input type = "password" id = "password" name = "password" placeholder = "Password" ></label><br/><br/>
<input type = "submit" name = "Submit" value = "Submit" onclick = "unamels()"/>
</form>
<form method = "get" action = "pass_change.php">
<input type = "submit" name = "Change" value = "Change Password"/><br/>
</form>

<form method = "get" action = "del_account.php">
<input type = "submit" name = "Del_Account" value = "Deactivate Account"/><br/>
</form>

<a href="signUp.php"><h4>Sign Up</h4><a>
</body>
</html>
