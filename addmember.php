<?php // some code ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sweets Complete | Addmember</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name ="description" content ="Sweets Complete">
<meta name="keywords" content="">
<link rel="stylesheet" href="css/main.css" type="text/css">
<link rel="shortcut icon" href="images/favicon.ico?v=2" type="image/x-icon" />
</head>
<body>
<div id="wrapper">
	<div id="maincontent">

	<div id="header">
		<div id="logo" class="left">
			<a href="index.php"><img src="images/logo.png" alt="SweetsComplete.Com"/></a>
		</div>
		<div class="right marT10">
			<b>
			<a href="login.php" >Login</a> |<a href="members.php" >Our Members</a> |<a href="cart.php" >Shopping Cart</a>
			</b>
			<br />
			Welcome Guest		</div>
		<ul class="topmenu">
		<li><a href="home.php">Home</a></li>
		<li><a href="products.php">Products</a></li>
		<li><a href="specials.php">Specials</a></li>
		<li><a href="contact.php">Contact Us</a></li>
		</ul>
		<br>
		<div class="banner"><p></p></div>
		<br class="clear"/>
	</div> <!-- header -->

	<div class="content">
	<br/>
	<div class="product-list">

		<h2>Sign Up</h2>
		<br/>

		<b>Please enter your information.</b><br/><br/>
		<form>
			<p>
				<label>First Name: </label>
				<input type="text" name="data[firstname]" />
			<p>
			<p>
				<label>Last Name: </label>
				<input type="text" name="data[lastname]" />
			<p>
			<p>
				<label>Address: </label>
				<input type="text" name="data[address]" />
			<p>
			<p>
				<label>City: </label>
				<input type="text" name="data[city]" />
			<p>
			<p>
				<label>Postcode: </label>
				<input type="text" name="data[postcode]" />
			<p>
			<p>
				<label>Telephone: </label>
				<input type="text" name="data[telephone]" />
			<p>
			<p>
				<input type="reset" name="data[clear]" value="Clear" class="button"/>
				<input type="submit" name="data[submit]" value="Submit" class="button marL10"/>
			<p>
		</form>
	</div><!-- product-list -->
</div>

	</div><!-- maincontent -->

	<div id="footer">
		<div class="footer">
			Copyright &copy; 2012 sweetscomplete.com. All rights reserved. <br/>
		<a href="home.php">Home</a> | <a href="products.php">Products</a> | <a href="specials.php">Specials</a> | <a href="contact.php">Contact Us</a> 		<br />
			<span class="contact">Tel: +44-1234567890&nbsp;
			Fax: +44-1234567891&nbsp;
			Email:sales@sweetscomplete.com</span>
		div>
	</div><!-- footer -->

</div><!-- wrapper -->

</body>
</html>