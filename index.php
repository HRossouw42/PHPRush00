<!DOCTYPE>
<?php
	include("functions/functions.php");
?>
<html>
	<head>
		<title>My Online Shop</title>

		<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
<body>

	<div class="main_wrapper">

		<div class="header_wrapper">
		
			<img id="logo" src="images/logo2.png" />
			
			<img id="banner" src="images/logo3.png" />
		
		</div>
		
		<div class="menubar">

			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">All Products</a></li>
				<li><a href="#">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>

			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a product"/>
					<input type="submit" name="search" value="Search" />
				</form>

			</div>

		</div>


		
		<div class="content_wrapper">
			<div id="sidebar">
				
				<div id="sidebar_title">Categories</div>

				<ul id="cats">
					<?php getCats() ?>
				</ul>

				<div id="sidebar_title">By Class</div>

				<ul id="cats">
					<?php getBrands() ?>

				</ul>

			</div>

			<div id="content_area">
				<div id="products_box">
					<?php getPro(); ?>
				</div>

			</div>
		</div>

		<div id="footer">
			<h2 style="text-align:center; padding-top:30px">&copy; 2018 by hrossouw@student.wethinkcode.co.za</h2>
		</div>




	</div>

</body>
</html>