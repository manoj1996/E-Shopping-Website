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
$sqlTrans="select tid,did,cid,d_pay,cost_price,sell_price,profit from transaction";
$conn = mysqli_connect($servername, $username, $dbpassword,$dbname);
$result=mysqli_query($conn,$sqlTrans);
while($row1 = mysqli_fetch_assoc($result))
{
	$tid = $row1["tid"];
	$did = $row1["did"];
	$cid = $row1["cid"];
	$d_pay = $row1["d_pay"];
	$cost_price = $row1["cost_price"];
	$sell_price = $row1["sell_price"];
	$profit = $row1["profit"];
	echo "Transction ID : $tid <br/>";
	echo "Dealer ID: $did <br/>";
	echo "Customer ID : $cid <br/>";
	echo "Dealer Pay : $d_pay<br/>";
	echo "Cost Price : $cost_price<br/>";
	echo "Selling Price : $sell_price<br/>";
	echo "Profit : $profit<br/>";
	echo "<br/><br/>";
}
mysqli_close($conn);
?>
<html>
<head>
<body>
<a href = "main page.php">Go back to main page</a>
</body>
</html>
