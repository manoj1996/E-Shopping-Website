<?php
?><html>
<head>
<title>Sports & Fitness
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
.heading{
	font-size:36px;
	position:absolute;
	top:0px;
	padding-top:20px;
	padding-bottom:20px;
	left:0px;
	background-color:orange;
	color:white;
	padding-left:780px;
	padding-right:809px;
}
.home{
	position:absolute;
	top:920px;
	left:1700px;
	font-size:20px;
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

<span class="heading"><strong>Sports and Fitness</strong>
</span>
<span class="pos1">
<table>
<thead>
<th colspan="2">
<img src="Basketball.jpeg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr>
<td colspan = "2" style="text-align:center"><span style="font-size:32px;color:green">Rs. 1,000.00</span></td>
</tr>
<tr>
<td>Brand</td>
<td>Spalding</td>
</tr>
<tr>
<td>Ideal for</td>
<td>Senior</td>
</tr>
<tr>
<td>Designed For</td>
<td>Traning</td>
</td>
<tr>
<td>Outer Material</td>
<td>Rubber Moulded</td>
</tr>
<tr>
<td>Bladder Type</td>
<td>Butyl</td>
</tr>
</table>
</span>
<span class="pos2">
<table>
<thead>
<th colspan="2">
<img src="gym.jpeg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr>
<td colspan = "2" style="text-align:center"><span style="font-size:32px;color:green">Rs. 525.00</span></td>
</tr>
<tr>
<td>Brand</td>
<td>Nivea</td>
</tr>
<tr>
<td>Size</td>
<td>M</td>
</tr>
<tr>
<td>Designed For</td>
<td>beginners</td>
</td>
<tr>
<td>Outer Material</td>
<td>Leather</td>
</tr>
<tr>
<td>Colour</td>
<td>Grey	</td>
</tr>
</table>
</span>
<span class="pos3">
<table>
<thead>
<th colspan="2">
<img src="Cricket.jpeg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr>
<td colspan = "2" style="text-align:center"><span style="font-size:32px;color:green">OUT OF STOCK</span></td>
</tr>
<tr>
<td>Brand</td>
<td>GM</td>
</tr>
<tr>
<td>Playing Level</td>
<td>Advanced</td>
</tr>
<tr>
<td>Designed For</td>
<td>Club matches</td>
</td>
<tr>
<td>Blade Material</td>
<td>English Willow</td>
</tr>
<tr>
<td>Suitable for</td>
<td>Leather ball,Tennis ball</td>
</tr>
</table>
</span><span class="pos4">
<table>
<thead>
<th colspan="2">
<img src="Tennis.jpeg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr>
<td colspan ="2" style="text-align:center"><span style="font-size:32px;color:green;">OUT OF STOCK</span></td>
</tr>
<tr>
<td>Brand</td>
<td>Babolat</td>
</tr>
<tr>
<td>Technology</td>
<td>X Sider,EvoBeam</td>
</tr>
<tr>
<td>Body Material</td>
<td>Graphite</td>
</td>
<tr>
<td>Balance</td>
<td>315mm</td>
</tr>
<tr>
<td>Grip Material</td>
<td>Syntec Feel</td>
</tr>
</table>
</span>
<script>
var cart=JSON.parse(localStorage.getItem("cart"));
function s1()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[0]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
function s2()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[1]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
function s3()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[2]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
function s4()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[3]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
</script>
<a class="home" href="main page.php">Back to main page</a>
<img class="tops" style="position:absolute;left:180" src="buynow.png" onclick="s1()">
<img class="tops" style="position:absolute;left:610" src="buynow.png" onclick="s2()">
<img class="tops" style="position:absolute;left:1020" src="" onclick="s3()">
<img class="tops" style="position:absolute;left:1450" src="" onclick="s4()">
</body>
</html>
