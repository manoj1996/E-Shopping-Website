<?php
extract($_GET);
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname='E Shopping';
// Create connection
$conn = mysqli_connect($servername, $username, $dbpassword,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="select uname,password from customer";
$result=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
	$name=$row["uname"];
	$pass=$row["password"];
	
	if($name==$uname && $pass==$oldpassword)
	{
		$upd = "UPDATE customer SET password='$newpassword' WHERE uname = '$uname' and password = '$oldpassword'";
		if($conn->query($upd) === TRUE)
		{
			echo "<script type = 'text/javascript'>alert('Password Updated Successfully!!')</script>";
			header("Refresh:0; url=Shop@_Login.php");
			mysqli_close($conn); die("correct Format");
		}

	}
}
echo "<script type = 'text/javascript'>alert('Check Username or Password!')</script>";
header("Refresh:0; url=Shop@_Login.php");
mysqli_close($conn); die("correct Format");			
?>
				
		

