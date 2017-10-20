<?php
?>
<html>
<head>
<style>
.posi{
	position:absolute;
	top:0px;
	left:800px;
}
.posi2{
	position:absolute;
	top:300px;
	width:700px;
	left:565px;
}
table,th,td{
	border:solid;
	border-width:2px;
}
th{
	font-size:36px;
}
td{
	font-size:22px;
	text-align:center;
}
.pose{
	position:absolute;
	top:10px;
	width:100px;
	font-size:24px;
	border-radius:13px;
	background-color:darkblue;
	color:white;
	height:50px;
	left:1800;
}

.img1{
	position:absolute;
	width:400px;
	height:300px;
	-webkit-animation-name:adidas;
	-webkit-animation-duration:4s;
	-webkit-animation-iteration-count:infinite;
	animation-timing-function:ease-in-out;
}

@-webkit-keyframes adidas
{
		0%{left:20px;top:100px;}
		50%{left:20px;top:400px;}
		100%{left:20px;top:600px;}
}
.img2{
	position:absolute;
	width:400px;
	height:300px;
	-webkit-animation-name:nike;
	-webkit-animation-duration:4s;
	-webkit-animation-iteration-count:infinite;
	animation-timing-function:ease-in-out;
}

@-webkit-keyframes nike
{
		0%{right:20px;top:100px;}
		50%{right:20px;top:400px;}
		100%{right:20px;top:600px;}
}
.home{
	position:absolute;
	top:920px;
	left:1700px;
	font-size:20px;
}
</style>
</head>
<body>

<img src="Cart.png" width="300" height="300" class="posi" />
<table class="posi2">
<thead>
<th>
Items
</th>
<th>
Quantity
</th>
<th>
Price
</th>
</thead>
<tbody id="tb">
<script>
var finalprice=0;
var cart=JSON.parse(localStorage.getItem("cart"));
var images=JSON.parse(localStorage.getItem("images"));
var price=JSON.parse(localStorage.getItem("price"));
for(var i=0;i<cart.length;i++)
{
	var c=parseInt(cart[i]);
	var d=images[i];
	if(c!=0)
	{
		var w=document.createElement("tr");
		var x=document.createElement("td");
		var y=document.createElement("IMG");
		y.setAttribute("src",d);
		y.setAttribute("width", "200");
		y.setAttribute("height", "200");
		x.appendChild(y);
		w.appendChild(x);

		
		var z=document.createElement("td");
		z.textContent = cart[i];
		w.appendChild(z);
		
		var a=document.createElement("td");
		var b=parseInt(cart[i])*parseInt(price[i]);
		finalprice+=b;
		a.textContent="Rs. "+b;
		w.appendChild(a);
		document.getElementById("tb").appendChild(w);
	}
}
var e = document.createElement("tr");
var f = document.createElement("td");
f.setAttribute("colspan","3");
f.setAttribute("text-align","right");
f.textContent="Total amount payable : Rs. "+finalprice;
e.appendChild(f);
document.getElementById("tb").appendChild(e);
	
</script>
</table>
<a href="shopthank.html">
<input type="button" value="Checkout" class="pose" style="left:1690px;font-size:20px">
</a>
<a href="Shop@_Login.php">
<input type="button" value="Logout" class="pose">
</a>
<a class="home" href="main page.php">Back to main page</a>
<img src="Animation-1.jpg" class = "img1"/>
<img src="Animation-2.jpg" class = "img2"/>
</body>
</html>
