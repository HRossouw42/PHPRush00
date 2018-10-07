<!DOCTYPE>
<?php
	include("functions/functions.php");
	//$sql = "SET GLOBAL sql_mode=\'\'";
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
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
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
					<?php getCats(); ?>
				</ul>

				<div id="sidebar_title">By Class</div>

				<ul id="cats">
					<?php getBrands(); ?>

				</ul>

			</div>

			<div id="content_area">
				<?php cart(); ?>

				<div id="shopping_cart">
					<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
					Welcome Guest! <b style="color:Yellow">Shopping Cart : </b> Total Items: <?php total_items();?> Total Price <?php total_price();?><a href="cart.php" style="color:yellow">Go to Cart</a>
					</span>
				</div>

				<div id="products_box">
					<?php getPro(); ?>
					<?php getCatPro(); ?>
					<?php getBrandPro(); ?>
				</div>

			</div>
		</div>

		<div id="footer">
			<h2 style="text-align:center; padding-top:30px">&copy; 2018 by hrossouw@student.wethinkcode.co.za</h2>
		</div>




	</div>

</body>
</html>