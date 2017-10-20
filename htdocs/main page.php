<html>
<head>
<title>main page</title>
<style type="text/css">

.heading{
		text-align:center;
		font-size:36pt;
		
		}
		
.pos{
		position:absolute;
		left:1650px;
		top:10px;
		font-size:20px;
		background-color:yellow;
		border-width:3px;
		border-style:solid;
		}

.pos2{
		position:absolute;
		left:1780px;
		top:10px;
		font-size:20px;
		background-color:yellow;
		border-width:3px;
		border-style:solid;
		}

.color{
		text-decoration:none;
		vertical-align:middle;
		text-align:center;
}
.pos3{
		position:absolute;
		left:1520px;
		top:10px;
		border-width:3px;
		border-style:solid;
		text-decoration:none;
		border-color:green;
		font-size:25px;
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
.img5{
	position:relative;
	width:300px;
	height:200px;
	-webkit-animation-name:winter;
	-webkit-animation-duration:4s;
	-webkit-animation-iteration-count:infinite;
	animation-timing-function:ease-in-out;
}

@-webkit-keyframes winter
{
		0%{left:5px;top:25px;}
		100%{left:5px;top:220px;}
}
.recommend
{
	position : absolute;
	left : 1670px;
	top : 400px;
	font-size:24px;
	border:solid 3px green;
	padding:20px 20px 20px 20px;
}
.recent0
{
	position : absolute;
	left : 1690px;
	top : 100px;
	font-size:24px;
	border:solid 3px green;
	padding:20px 20px 20px 20px;
}
.recent
{
	position : absolute;
	left : 1620px;
	top : 200px;
	font-size:24px;
	border:solid 3px green;
	padding:20px 20px 20px 20px;
}
.recent1
{
	position : absolute;
	left : 1670px;
	top : 280px;
	font-size:24px;
	border:solid 3px green;
	padding:20px 20px 20px 20px;
}
.img6{
	position:absolute;
	width:300px;
	height:200px;
	-webkit-animation-name:diwali;
	-webkit-animation-duration:4s;
	-webkit-animation-iteration-count:infinite;
	animation-timing-function:ease-in-out;
}

@-webkit-keyframes diwali
{
		0%{left:12px;top:742px;}
		100%{left:12px;top:542px;}
}

</style>
</head>
<body onload = "cart()">
<h3 style="position:absolute;top:20px;left:50px;" id = "username">welcome </h3>
<script type = "text/javascript">
var d = document.getElementById("username");
d.innerHTML += localStorage.getItem("uname");
var logged = localStorage.getItem("uname");
if(logged == "admin")
{
	document.writeln("<form method = 'get' action = 'recent_Orders.php'><input type = 'text' id = 'logged' name = 'logged' class = 'recent' placeholder = 'username'/><input type = 'submit' name = 'submit' value = 'Recent_Orders' class = 'recent1'/></form>");
	document.writeln("<form method = 'get' action = 'transaction.php'><input type = 'submit' name = 'submit' value = 'Transaction' class = 'recent0'/></form>");
}
</script>
<div class="heading"><img src="logo.jpeg" width="50" height="50"/><b>Shop@Shop</b></div>
<hr style="height:5px;border-width:0;background-color:orange">
<a href="Sports.php">
<img src="Sports.JPG" width="400" height="400"  onmouseover="bigImgS(this)" style="position:absolute;top:120;left:330" onmouseout="normalImgS(this)"/>
</a>

<a href="Home.php">
<img src="Appliances.JPG" width="400" height="400"  onmouseover="bigImgH(this)" style="position:absolute;top:120;left:740;"onmouseout="normalImgH(this)"/>
</a>

<a href="Books.php">
<img src="Books.JPG" width="400" height="400" onmouseover="bigImgB(this)" style="position:absolute;top:120;left:1150" onmouseout="normalImgB(this)"/>
</a>

<a href="Lifestyle.php">
<img src="Lifestyle.JPG" width="400" height="400" style="position:absolute;top:543;left:330" onmouseover="bigImgL(this)"	onmouseout="normalImgL(this)"/>
</a>

<a href="Automotives.php">
<img src="Automotives.JPG" width="400" height="400" style="position:absolute;top:543;left:740" onmouseover="bigImgA(this)"	onmouseout="normalImgA(this)"/>
</a>

<a href="Electronics.php">
<img src="Electronics.JPG" width="400" height="400" style="position:absolute;top:543;left:1150" onmouseover="bigImgE(this)" onmouseout="normalImgE(this)"/>
</a>
<a href="Shop@_Login.php">
<span class="color">
<span class="pos" style="height:40px;width:110px;padding-top:10px;padding-left:5px;padding-right:5px">	
Logout
</span>
</span>
</a>

<a href="signUp.php" class="color">
<span class="pos2" style="height:40px;width:80px;padding-top:10px;padding-left:5px;padding-right:5px">
Sign Up
</span>
</a>

<a href="cart.php" class="pos3">
<img src="Cart.png" width="53px" height="43px"><span>CART</span>
</a>
<img src="Animation-3.jpg" class = "img5"/>
<img src="Animation-4.jpg" class = "img6"/>
<div class = "recommend" id = "recom">
Recommendations
</div>
<script type = "text/javascript">
function cart()
{
	var c= parseInt(localStorage.getItem("count"));
	var x = localStorage.getItem("uname");
	if(c==0)
	{
		var images = ["Basketball.jpeg","gym.jpeg","Cricket.jpeg","Tennis.jpeg","tv.JPG","washing.JPG","micro.jpg","fridge.jpg","b1.jpg","b2.jpg","b3.jpeg","b4.jpeg","suit.png","l2.jpg","l3.jpg","l4.jpg","JBL.gif","seat_cover.jpeg","tyre.jpeg","freshener.jpeg","jbl.jpg","mobile.jpg","printer.JPG","desktop.JPG"];
		var price=[1000,525,3200,3500,23999,29999,9900,56500,350,550,225,1250,6720,2100,4100,3650,4250,5999,3200,350,1650,22500,9999,59990];
		var cart = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
		var names = ["Basketball","Gym Gloves","Cricket Bat","Tennis Racket","TV","Washing Machine","Microwave Oven","Refrigerator","Manku Timmana Kagga","Web Technologies","The Alchemist","The Monk Who Sold His Ferrari","Raymond Suit","Armani Deo","Men's Shirt","Sneakers","Car Stereo","Car Seat Cover","Bridgestone Tyres","Air Freshener","JBL Headphones","Smartphone","Printer","Desktop"];
		localStorage["cart"] = JSON.stringify(cart);
		localStorage["images"] = JSON.stringify(images);
		localStorage["price"] = JSON.stringify(price);
		localStorage["names"] = JSON.stringify(names);
		localStorage.setItem("count",1);
	}
	recommend();
}
function recommend()
{
	var cart=JSON.parse(localStorage.getItem("cart"));
	var names=JSON.parse(localStorage.getItem("names"));
	var j = 0;
	var str = "";
	var d = document.getElementById("recom");
	for(var i=0;i<(cart.length/4);i++)
	{
		var c = 0;
		if((parseInt(cart[j])!=0 || parseInt(cart[j+1]) != 0 || parseInt(cart[j+2])!= 0 || parseInt(cart[j+3]) != 0)&& c < 4)
		{
			
			 str += "<br/>-"+names[j]+"<br/>-"+names[j+1]+"<br/>-"+names[j+2]+"<br/>-"+names[j+3];
			c += 4;
		}
		j += 4;
	}
	d.innerHTML = "Recommendations"+str;
}
function bigImgE(x)
{
		x.style.height = "520px";
		x.style.width = "600px";
		x.style.top = "443px";
		x.style.left = "1050px";
}

function normalImgE(x) {
		x.style.height = "400px";
		x.style.width = "400px";
		x.style.top = "543px";
		x.style.left = "1150px";
}
function bigImgB(x)
{
		x.style.height = "520px";
		x.style.width = "600px";
		x.style.top = "100px";
		x.style.left = "1050px";
		x.style.zIndex = 1;
}

function normalImgB(x) {
		x.style.height = "400px";
		x.style.width = "400px";
		x.style.top = "120px";
		x.style.left = "1150px";
		x.style.zIndex = 0;
}
function bigImgA(x)
{
		x.style.height = "520px";
		x.style.width = "600px";
		x.style.top = "443px";
		x.style.left = "640px";
		x.style.zIndex = 1;
}

function normalImgA(x) {
		x.style.height = "400px";
		x.style.width = "400px";
		x.style.top = "543px";
		x.style.left = "740px";
		x.style.zIndex = 0;
}
function bigImgL(x)
{
		x.style.height = "520px";
		x.style.width = "600px";
		x.style.top = "443px";
		x.style.left = "230px";
		x.style.zIndex = 1;
}

function normalImgL(x) {
		x.style.height = "400px";
		x.style.width = "400px";
		x.style.top = "543px";
		x.style.left = "330px";
		x.style.zIndex = 0;
}
function bigImgH(x)
{
		x.style.height = "520px";
		x.style.width = "600px";
		x.style.top = "100px";
		x.style.left = "640px";
		x.style.zIndex = 1;
}

function normalImgH(x) {
		x.style.height = "400px";
		x.style.width = "400px";
		x.style.top = "120px";
		x.style.left = "740px";
		x.style.zIndex = 0;
}
function bigImgS(x)
{
		x.style.height = "520px";
		x.style.width = "600px";
		x.style.top = "100px";
		x.style.left = "220px";
		x.style.zIndex = 1;		
}

function normalImgS(x) {
		x.style.height = "400px";
		x.style.width = "400px";
		x.style.top = "120px";
		x.style.left = "330px";
		x.style.zIndex = 0;		
}
</script>
</body>
</html>
