<?php
?>
<html>
<head>
<title>Home appliances
</title>
<style type="text/CSS">
.pos1{
	position:absolute;
	top:100px;
	left:110px;
}
.pos2{
	position:absolute;
	top:100px;
	left:535px;
}
.pos3{
	position:absolute;
	top:100px;
	left:960px;
}
.pos4{
	position:absolute;
	top:100px;
	left:1385px;
}
table,th,td{
	border:solid;
	border-width:2px;
}
td{
	font-size:22px;
	text-align:center;
}
.home{
	position:absolute;
	top:930px;
	left:1700px;
	font-size:20px;
}
.heading{
	font-size:36px;
	position:absolute;
	top:0px;
	padding-top:20px;
	padding-bottom:20px;
	left:0px;
	background-color:purple;
	color:white;
	padding-left:812px;
	padding-right:815px;
}
.tops{
	position:absolute;
	top:800px;
}
.pos5{
		position:absolute;
		left:1700px;
		top:870px;
		border-width:3px;
		border-style:solid;
		text-decoration:none;
		border-color:green;
		font-size:25px;
}
</style>
</head>
<body>
<a href="cart.php" class="pos5">
<img src="Cart.png" width="43px" height="43px"><span>CART</span>
</a>

<span class="heading"><strong>Home Appliances</strong>
</span>
<span class="pos1">
<table>
<thead>
<th colspan="2">
<img src="tv.jpg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr >
<td colspan="2" style="font-size:32px;text-align:center;"><span style="color:green">OUT OF STOCK</span></td>
</tr>
<tr>
<td>Size</td>
<td>32'</td>
</tr>
<tr>
<td>Resolution</td>
<td>1920x1080</td>
</tr>
<tr>
<td>Brand</td>
<td>Samsung</td>
</tr>
<tr>
<td>3D</td>
<td>No</td>
</tr>
<tr>
<td>Wcartanty</td>
<td>1 year</td>
</tr>
<tr>
<td>Usb</td>
<td>2 ports</td>
</tr>
</table>
</span>
<span class="pos2">
<table>
<thead>
<th colspan="2">
<img src="washing.jpg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr>
<td colspan="2" style="font-size:32px;text-align:center;"><span style="color:green">OUT OF STOCK</span></td>
</tr>
<tr>
<td>Control</td>
<td>Fully automatic</td>
</tr>
<tr>
<td>Digital display</td>
<td>yes</td>
</tr>
<tr>
<td>Brand</td>
<td>Samsung</td>
</tr>
<tr>
<td>Wcartanty</td>
<td>2 years</td>
</tr>
<tr>
<td>Heater</td>
<td>Built-in</td>
</tr>
<tr>
<td>Washing capacity</td>
<td>6kgs</td>
</tr>
</table>
</span>
<span class="pos3">
<table>
<thead>
<th colspan="2">
<img src="micro.jpg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr >
<td colspan="2" style="font-size:32px;text-align:center;"><span style="color:green">Rs. 9,900.00</span></td>
</tr>
<tr>
<td>Size</td>
<td>20L</td>
</tr>
<tr>
<td>Defrost</td>
<td>yes</td>
</tr>
<tr>
<td>Brand</td>
<td>Samsung</td>
</tr>
<tr>
<td>Control type</td>
<td>Touch</td>
</tr>
<tr>
<td>Power requirement</td>
<td>ac 230V , 50hz</td>
</tr>
<tr>
<td>Wcartanty</td>
<td>2 years</td>
</tr>
</table>
</span><span class="pos4">
<table>
<thead>
<th colspan="2">
<img src="fridge.jpg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr >
<td colspan="2" style="font-size:32px;text-align:center;"><span style="color:green">Rs. 56,500.00</span></td>
</tr>
<tr>
<td>Water dispenser</td>
<td>Yes</td>
</tr>
<tr>
<td>Display type</td>
<td>LED</td>
</tr>
<tr>
<td>Brand</td>
<td>Samsung</td>
</tr>
<tr>
<td>Door type</td>
<td>Side by side</td>
</tr>
<tr>
<td>Capacity</td>
<td>585L</td>
</tr>
<tr>
<td>Number of doors</td>
<td>2</td>
</tr>
</table>
</span>
<script>
var cart=JSON.parse(localStorage.getItem("cart"));
function s1()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[4]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
function s2()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[5]=q;
	localStorage["cart"] = JSON.stringify(cart);	
}
function s3()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[6]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
function s4()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[7]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
</script>
<a class="home" href="main page.php">Back to main page</a>

<img class="tops" style="position:absolute;left:180" src="" onclick="s1()">
<img class="tops" style="position:absolute;left:610" src="" onclick="s2()">
<img class="tops" style="position:absolute;left:1020" src="buynow.png" onclick="s3()">
<img class="tops" style="position:absolute;left:1450" src="buynow.png" onclick="s4()">
</body>
</html>
