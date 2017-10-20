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
$sql="select uname,cid from customer";
$result=mysqli_query($conn,$sql);
$cidls = "";
while($row = mysqli_fetch_assoc($result))
{
	$name=$row["uname"];
	if($name==$logged)
		{
			$cidls = $row["cid"];
		}
	
}
$sqlOrder="select iid,qty,city,cid from Order_details";
$conn = mysqli_connect($servername, $username, $dbpassword,$dbname);
$resultOrder=mysqli_query($conn,$sqlOrder);
while($row1 = mysqli_fetch_assoc($resultOrder))
{
	$cidNew = $row1["cid"];
	if($cidNew == $cidls)
	{
		$iidOrder = $row1["iid"];
		$item="select iid,name,rate from items";
		$conn = mysqli_connect($servername, $username, $dbpassword,$dbname);
		$resultItems = mysqli_query($conn,$item);
		while($resultName = mysqli_fetch_assoc($resultItems))
		{
			if($iidOrder == $resultName["iid"])
			{
				$itemName = $resultName["name"];
				$tcost = $resultName["rate"]*$row1["qty"];
				echo "<font size = 7/>Item : $itemName <br/>";
				echo "Quantity: ".$row1["qty"]."<br/>";
				echo "Total Cost : $tcost <br/>";
				echo "City : ".$row1["city"]."<br/>";
			}
		}
	}
	
}
mysqli_close($conn);
?>
<html>
<head>
<body>
<a href = "main page.php">Go back to main page</a>
</body>
</html>
