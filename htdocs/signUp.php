<?php
?>
<html>
<head>
<title>signUp</title>
<link rel="stylesheet" type="text/css" href="ShopCSS.css"/>

</head>
<body class="signUp">
<div class = "signUp">
<h1 align = "center"> Sign Up </h1>
<form method = "get" action = "signUp_insert.php">
<label style = "font-size:72 px">First Name :<input type="text" id = "Fname" name = "fname" placeholder = "First Name" required/></label><br/><br/>

<label>Last Name :<input type = "text" id = "Lname" name = "lname" placeholder = "Last Name" required/></label><br/><br/>
<label>Username :<input type="text"  id = "username" name = "uname" placeholder = "username" required/></label><br/><br/>

<label>Gender :<select name = "gender">
<option value = "Male">Male</option>
<option value = "Female">Female</option>
</select></label>

<br/><br/>
<label>House No. :<input type = "text" id = "Hno" name = "house" placeholder = "House no." required/></label><br/><br/>
<label>Street Name :<input type = "text" id = "Street" name = "street" placeholder = "Street Name" required/></label><br/><br/>
<label>Pincode :<input type = "number" id = "number" name = "pincode" placeholder = "Pincode" min = "100000" max = "999999" required/></label><br/><br/>
<label>Landmark :<input type = "text" id = "landmark" name = "landmark" placeholder = "landmark" /></label><br/><br/>
<label>State :<select name = "state">
<option name = "BLR">Karnataka</option>
<option name = "DLH">Delhi</option>
<option name = "MHR">Maharashtra</option>
<option name = "KLR">Kerala</option>
<option name = "MPD">Madhya Pradesh</option>
</select></label><br/><br/>
<label>City :<select name = "city">
<option value = "BLR">Bangalore</option>
<option value = "DLH">Delhi</option>
<option value = "MHR">Mumbai</option>
<option value = "KLR">Kochi</option>
<option value = "MPD">Bhopal</option>
</select></label><br/><br/>

<label>Email :<input type = "email" id = "email" name = "email" placeholder = "Email" required/></label><br/><br/>
<label>Password : <input type="password" id = "pass" name="password" placeholder="password" required/></label><br/><br/>
<label>Mobile :<input type = "number" name = "phone" id = "mobile" placeholder = "Mobile" min="1000000000" max = "9999999999" size = "8ex" required/></label><br/><br/>
<div align="center"><input type = "submit" name = "submit" value = "Submit" /></div>
</form>
</div>
</body>
</html>

