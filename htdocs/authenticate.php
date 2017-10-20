<html>
<style type="text/css">
.back{
	background-image:url("new.jpg");	
	background-repeat:no-repeat;
	background-size:100% 100%
}
</style>
<body class="back">
<?php
extract ($_GET);
if(isset($Submit))
{
	foreach($_COOKIE as $key => $value)
	{
		if($username == $key && $Password == $value)
		{	
			echo "<div style='position:absolute;top:460px;left:850px;font-size:22px;border-style:solid;border-width:3px;background-color:whitesmoke;padding:20px 20px 20px 20px;text-align:center;border-radius:10px;'>";
			echo "<b>";
			echo "</b><form action='main page.php' method='get'>";
			echo "<p>Welcome <input type='hidden' value='$username' name='username' checked = 'checked'>$username<p>";
			echo "<br/><input type='submit' name='logged' value='continue shopping'></form></div>"; 
				
		}
		else
		{
			echo "<div style='position:absolute;top:460px;left:780px;font-size:22px;border-style:solid;border-width:3px;background-color:whitesmoke;padding:20px 20px 20px 20px;text-align:center;border-radius:10px'>";
			echo "<b>username or password is wrong</b><br/>";
			echo "<a href='Shop@_Login.php'><input type='button' value='login again'></a></span>";
		}
	}
}

?>
</body>
</html>
