<?php
?>
<html>
<head>
<title>Books
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
	padding-left:900px;
	padding-right:920px;
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

<span class="heading"><strong>Books</strong>
</span>
<span class="pos1">
<table>
<thead>
<th colspan="2">
<img src="b1.jpg" width="400" height="500"/>
</th>
</thead>
<tbody>
<tr>
<td style = "text-align:center; font-size:32px"colspan = "2"><span style="color:green">OUT OF STOCK</span></td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Author</td>
<td style = "text-align:center; font-size:22px">D.V. Gundappa</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Language</td>
<td style = "text-align:center; font-size:22px">Kannada</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Publication Year</td>
<td style = "text-align:center; font-size:22px">2014</td>
</tr>
</tbody>
</table>
</span>
<span class="pos2">
<table>
<thead>
<th colspan="2">
<img src="b2.jpg" width="400" height="500" />
</th>
</thead>
<tbody>
<tr>
<td style = "text-align:center; font-size:32px"colspan = "2"><span style="color:green">OUT OF STOCK</span></td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Author</td>
<td style = "text-align:center; font-size:22px">Jeffrey C.J.</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Language</td>
<td style = "text-align:center; font-size:22px">English</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Publication Year</td>
<td style = "text-align:center; font-size:22px">2010</td>
</tr>
</table>
</span>
<span class="pos3">
<table>
<thead>
<th colspan="2">
<img src="b3.jpeg" width="400" height="500" />
</th>
</thead>
<tbody>
<tr>
<td style = "text-align:center; font-size:32px"colspan = "2"><span style="color:green">OUT OF STOCK</span></td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Author</td>
<td style = "text-align:center; font-size:22px">Paulo Coelho</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Language</td>
<td style = "text-align:center; font-size:22px">English</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Publication Year</td>
<td style = "text-align:center; font-size:22px">2012</td>
</tr>
</table>
</span>
<span class="pos4">
<table>
<thead>
<th colspan="2">
<img src="b4.jpeg" width="400" height="500" />
</th>
</thead>
<tbody>
<tr>
<td style = "text-align:center; font-size:32px"colspan = "2"><span style="color:green">Rs. 1250.00</span></td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Author</td>
<td style = "text-align:center; font-size:22px">Robin Sharma</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Language</td>
<td style = "text-align:center; font-size:22px">English</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Publication Year</td>
<td style = "text-align:center; font-size:22px">2009</td>
</tr>
</table>
</span>
<a class="home" href="main page.php">Back to main page</a>
<script>
var cart=JSON.parse(localStorage.getItem("cart"));
function s1()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[8]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
function s2()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[9]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
function s3()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[10]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
function s4()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[11]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
</script>
<img class="tops" style="position:absolute;left:180" src="" onclick="s1()">
<img class="tops" style="position:absolute;left:610" src="" onclick="s2()">
<img class="tops" style="position:absolute;left:1020" src="" onclick="s3()">
<img class="tops" style="position:absolute;left:1450" src="buynow.png" onclick="s4()">
</body>
</html>
