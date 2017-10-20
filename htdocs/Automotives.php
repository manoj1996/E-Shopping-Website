<?php
?>
<html>
<head>
<title>Automotives
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
	background-color:orange;
	color:white;
	padding-left:855px;
	padding-right:855px;
}
.tops{
	position:absolute;
	top:770px;
}
.pos5{
		position:absolute;
		left:1700px;
		top:850px;
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

<span class="heading"><strong>Automotives</strong>
</span>
<span class="pos1">
<table>
<thead>
<th colspan="2">
<img src="JBL.gif" width="400" height="400" />
</th>
</thead>
<tbody>
<tr>
<td colspan = "2" style="text-align:center"><span style="font-size:32px;color:green">Rs. 4250.00</span></td>
</tr>
<tr>
<td>Brand</td>
<td>JBL(JVC)</td>
</tr>
<tr>
<td>Built-in Memory</td>
<td>512 MB</td>
</tr>
<tr>
<td>Number of Speakers</td>
<td>2</td>
</td>
<tr>
<td>Supported audio formats</td>
<td>MP3</td>
</tr>
<tr>
<td>Maximum power output</td>
<td>150W</td>
</tr>
</table>
</span>
<span class="pos2">
<table>
<thead>
<th colspan="2">
<img src="seat_cover.jpeg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr>
<td colspan = "2" style="text-align:center"><span style="font-size:32px;color:green">OUT OF STOCK</span></td>
</tr>
<tr>
<td>Brand</td>
<td>Team-BHP</td>
</tr>
<tr>
<td>Colour</td>
<td>Silver-Black</td>
</tr>
<tr>
<td>Material</td>
<td>Leatherite</td>
</td>
<tr>
<td>Model Number</td>
<td>CZ-113-200</td>
</tr>
<tr>
<td>Sales Package</td>
<td>2 front 1 back cover</td>
</tr>
</table>
</span>
<span class="pos3">
<table>
<thead>
<th colspan="2">
<img src="tyre.jpeg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr>
<td colspan = "2" style="text-align:center"><span style="font-size:32px;color:green">OUT OF STOCK</span></td>
</tr>
<tr>
<td>Brand</td>
<td>Bridgestone</td>
</tr>
<tr>
<td>Material</td>
<td>Rubber</td>
</tr>
<tr>
<td>Design Type</td>
<td>Tube less</td>
</td>
<tr>
<td>Maximum load</td>
<td>560 kg</td>
</tr>
<tr>
<td>Construction type</td>
<td>Radial</td>
</tr>
</table>
</span><span class="pos4">
<table>
<thead>
<th colspan="2">
<img src="freshener.jpeg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr>
<td colspan ="2" style="text-align:center"><span style="font-size:32px;color:green;">OUT OF STOCK</span></td>
</tr>
<tr>
<td>Brand</td>
<td>Ambi Pur</td>
</tr>
<tr>
<td>Type</td>
<td>Fan</td>
</tr>
<tr>
<td>Quantity</td>
<td>14ml</td>
</td>
<tr>
<td>Designed for</td>
<td>Car</td>
</tr>
<tr>
<td>Fragrance</td>
<td>Lavender Spa</td>
</tr>
</table>
</span>
<a class="home" href="main page.php">Back to main page</a>
<script>
var cart=JSON.parse(localStorage.getItem("cart"));
function s1()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[16]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
function s2()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[17]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
function s3()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[18]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
function s4()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[19]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
</script>
<img class="tops" style="position:absolute;left:180" src="buynow.png" onclick="s1()">
<img class="tops" style="position:absolute;left:610" src="" onclick="s2()">
<img class="tops" style="position:absolute;left:1020" src="" onclick="s3()">
<img class="tops" style="position:absolute;left:1450" src="" onclick="s4()">
</body>
</html>
