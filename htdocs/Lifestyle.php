<?php
?>
<html>
<head>
<title>Lifestyle
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
	background-color:purple;
	color:white;
	padding-left:880px;
	padding-right:880px;
}
.tops{
	position:absolute;
	top:760px;
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

<span class="heading"><strong>Lifestyle</strong>
</span>
<span class="pos1">
<table>
<thead>
<th colspan="2">
<img src="suit.png" width="400" height="400"/>
</th>
</thead>
<tbody>
<tr>
<td style = "text-align:center; font-size:32px"colspan = "2"><span style="color:green">Rs. 6720.00</span></td>
</tr>
<td style = "text-align:center; font-size:22px">Make</td>
<td style = "text-align:center; font-size:22px">Raymond</td>
<tr>
<td style = "text-align:center; font-size:22px">Materials</td>
<td style = "text-align:center; font-size:22px">100% wool</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Size</td>
<td style = "text-align:center; font-size:22px">Medium</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Sleeve</td>
<td style = "text-align:center; font-size:22px">Full Sleeve</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Occasion</td>
<td style = "text-align:center; font-size:22px">Formal</td>
</tr>
</tbody>
</table>
</span>
<span class="pos2">
<table>
<thead>
<th colspan="2">
<img src="l2.jpg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr>
<td style = "text-align:center; font-size:32px"colspan = "2"><span style="color:green">OUT OF STOCK</span></td>
</tr>
<td style = "text-align:center; font-size:22px">Make</td>
<td style = "text-align:center; font-size:22px">Armani</td>
<tr>
<td style = "text-align:center; font-size:22px">Container</td>
<td style = "text-align:center; font-size:22px">Tin</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Volume</td>
<td style = "text-align:center; font-size:22px">200 ml</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Smell</td>
<td style = "text-align:center; font-size:22px">Irresistable</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Occasion</td>
<td style = "text-align:center; font-size:22px">All occasions</td>
</tr>
</table>
</span>
<span class="pos3">
<table>
<thead>
<th colspan="2">
<img src="l3.jpg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr>
<td style = "text-align:center; font-size:32px"colspan = "2"><span style="color:green">Rs. 4,100.00</span></td>
</tr>
<td style = "text-align:center; font-size:22px">Make</td>
<td style = "text-align:center; font-size:22px">Arrow</td>
<tr>
<td style = "text-align:center; font-size:22px">Materials</td>
<td style = "text-align:center; font-size:22px">Cotton</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Size</td>
<td style = "text-align:center; font-size:22px">Large</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Sleeve</td>
<td style = "text-align:center; font-size:22px">Full Sleeve</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Occasion</td>
<td style = "text-align:center; font-size:22px">Formal</td>
</tr>
</table>
</span>
<span class="pos4">
<table>
<thead>
<th colspan="2">
<img src="l4.jpg" width="400" height="400" />
</th>
</thead>
<tbody>
<tr>
<td style = "text-align:center; font-size:32px"colspan = "2"><span style="color:green">OUT OF STOCK</span></td>
</tr>
<td style = "text-align:center; font-size:22px">Make</td>
<td style = "text-align:center; font-size:22px">Nike</td>
<tr>
<td style = "text-align:center; font-size:22px">Materials</td>
<td style = "text-align:center; font-size:22px">Canvas</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Size</td>
<td style = "text-align:center; font-size:22px">9 (European)</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Colour</td>
<td style = "text-align:center; font-size:22px">Blue</td>
</tr>
<tr>
<td style = "text-align:center; font-size:22px">Occasion</td>
<td style = "text-align:center; font-size:22px">Informal</td>
</tr>
</table>
</span>
<a class="home" href="main page.php">Back to main page</a>
<script>
var cart=JSON.parse(localStorage.getItem("cart"));
function s1()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[12]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
function s2()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[13]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
function s3()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[14]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
function s4()
{
	var q = parseInt(prompt("Enter the quantity of the required item:"));
	cart[15]=q;
	localStorage["cart"] = JSON.stringify(cart);
}
</script>
<img class="tops" style="position:absolute;left:180" src="buynow.png" onclick="s1()">
<img class="tops" style="position:absolute;left:610" src="" onclick="s2()">
<img class="tops" style="position:absolute;left:1020" src="buynow.png" onclick="s3()">
<img class="tops" style="position:absolute;left:1450" src="" onclick="s4()">
</body>
</html>
