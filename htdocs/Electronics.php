<?php
?>
<html>
<head>
<title>Electronics
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
	top:920px;
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
	padding-left:865px;
	padding-right:861px;
}
.tops{
	position:absolute;
	top:785px;
}
.pos5{
		position:absolute;
		left:1700px;
		top:860px;
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

<span class="heading"><strong>Electronics</strong>
</span>
<span class="pos1">
<table>
<thead>
<th colspan="2">
<img src="jbl.jpg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr >
<td colspan="2" style="font-size:32px;text-align:center;"><span style="color:green">Rs. 1650.00</span></td>
</tr>
<tr>
<td>Power</td>
<td>30mW</td>
</tr>
<tr>
<td>Microphone</td>
<td>Yes</td>
</tr>
<tr>
<td>Brand</td>
<td>JBL</td>
</tr>
<tr>
<td>Bluetooth/wireless</td>
<td>Yes</td>	
</tr>
<tr>
<td>Graphics</td>
<td>Nvidia GeForce</td>
</tr>
<tr>
<td>Warranty</td>
<td>1 year</td>
</tr>
</table>
</span>
<span class="pos2">
<table>
<thead>
<th colspan="2">
<img src="mobile.jpg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr>
<td colspan="2" style="font-size:32px;text-align:center;"><span style="color:green">Rs. 22,500.00</span></td>
</tr>
<tr>
<td>Size</td>
<td>5.5in</td>
</tr>
<tr>
<td>Processor</td>
<td>octa-core </td>
</tr>
<tr>
<td>Brand</td>
<td>Samsung</td>
</tr>
<tr>
<td>Warranty</td>
<td>2 years</td>
</tr>
<tr>
<td>Camera</td>
<td>12M </td>
</tr>
<tr>
<td>Usb</td>
<td>2.0</td>
</tr>
</table>
</span>
<span class="pos3">
<table>
<thead>
<th colspan="2">
<img src="printer.jpg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr >
<td colspan="2" style="font-size:32px;text-align:center;"><span style="color:green">OUT OF STOCK</span></td>
</tr>
<tr>
<td>Scanner</td>
<td>yes</td>
</tr>
<tr>
<td>Resolution</td>
<td>1200dpi</td>
</tr>
<tr>
<td>Brand</td>
<td>HP</td>
</tr>
<tr>
<td>Scan type</td>
<td>Flatbed</td>
</tr>
<tr>
<td>Usb support</td>
<td>2.0</td>
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
<img src="desktop.jpg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr >
<td colspan="2" style="font-size:32px;text-align:center;"><span style="color:green">OUT OF STOCK</span></td>
</tr>
<tr>
<td>Ram</td>
<td>8gb</td>
</tr>
<tr>
<td>Display type</td>
<td>LED</td>
</tr>
<tr>
<td>Brand</td>
<td>HP</td>
</tr>
<tr>
<td>Speakers</td>
<td>not included</td>
</tr>
<tr>
<td>Processor</td>
<td>intel i5</td>
</tr>
<tr>
<td>O.S</td>
<td>Windows 10</td>
</tr>
</table>
</span>
<a class="home" href="main page.php">Back to main page</a>
<script>
var cart=JSON.parse(localStorage.getItem("cart"));
function s1()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[20]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
function s2()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[21]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
function s3()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[22]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
function s4()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[23]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
</script>
<img class="tops" style="position:absolute;left:180" src="buynow.png" onclick="s1()">
<img class="tops" style="position:absolute;left:610" src="buynow.png" onclick="s2()">
<img class="tops" style="position:absolute;left:1020" src="" onclick="s3()">
<img class="tops" style="position:absolute;left:1450" src="" onclick="s4()">
</body>
</html>
