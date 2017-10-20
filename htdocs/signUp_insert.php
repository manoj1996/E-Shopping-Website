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
$count = rand(1000, 9999);
$cidNew = "CID".$city.$count;
while(check($cidNew) == -1)
{
	$count = rand(1000, 9999);	
	$cidNew = "CID".$city.$count;
}

function check($cidNew)
{
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
	$sql="select cid from customer";
	$result=mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result))
	{
		$cid=$row["cid"];

		if($cid == $cidNew)
		{	
			return -1;	
		}
		
	}
	return 0;
}


echo "Count : $count";
$tot_salesNew = 0;
echo "<br/>";
echo "$uname <br/>";
echo "$fname <br/>";
echo "$lname <br/>";
echo "$password <br/>";
echo "$cidNew <br/>";
echo "$city <br/>";
echo "$state <br/>";
echo "$email <br/>";
echo "$phone <br/>";
echo "$gender <br/>";
echo "$tot_salesNew <br/>";
$sql="insert into customer(uname,fname,lname,password,cid,email,phone,gender,tot_sales) values ('$uname','$fname','$lname','$password','$cidNew','$email','$phone','$gender','$tot_salesNew')";
$addr = "insert into address(house_no,street_name,pincode,landmark,state,city) values ('$house','$street','$pincode','$landmark','$state','$city')";
if ($conn->query($sql) === TRUE && $conn->query($addr) === TRUE) {
$cust_stays = "insert into customer_stays(cid,house_no,street_name,pincode,city) values ('$cidNew','$house','$street','$pincode','$city')";
	if($conn->query($cust_stays) === TRUE)
	{
	header("Refresh:0; url=Shop@_Login.php"); 
	mysqli_close($conn);
	}
header("Refresh:0; url=Shop@_Login.php");
} 
else {
header("Refresh:0; url=signUp.php"); 
    mysqli_close($conn);

}

$conn->close(); 
?>

<!--manoj129
Manoj@pesu-->
