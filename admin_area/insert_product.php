<!DOCTYPE html>
<html>
<head>
	<title>Inserting Product</title>
</head>
<body bgcolor="skyblue">
	
	<form action="insert_product.php" method="post" enctype="multipart/form-data">

		<table align="center" width="750" border="2" bgcolor="whitesmoke">
			<tr align="center">
				<td colspan="7"><h2>Insert New Post Here</h2></td>
			</tr>

			<tr>
				<td align="right"><b>Product Title:</b></td>
				<td><input type="text" name="product_title" /></td>
			<tr>
				<td align="right"><b>Product Category:</b></td>
				<td>
					<select name="product_cat">
						<option>Select a category</option>
						<?php
								$get_cats = "select * from categories";

								$run_cats = mysqli_query($con, $get_cats);
							
								while ($row_cats= mysqli_fetch_array($run_cats))
								{
									$cat_id = $row_cats['cat_id'];
									$cat_title = $row_cats['cat_title'];
							
									echo "<option>$cat_title</option>";
								}
						?>

					</select>

				</td>
			<tr>
				<td align="right"><b>Product Brand:</b></td>
				<td><input type="text" name="product_brand" /></td>
			<tr>
				<td align="right"><b>Product Image:</b></td>
				<td><input type="text" name="product_image" /></td>
			<tr>
				<td align="right"><b>Product Price:</b></td>
				<td><input type="text" name="product_price" /></td>
			<tr>
				<td align="right"><b>Product Description:</b></td>
				<td><input type="text" name="product_desc" /></td>
			<tr>
				<td align="right"><b>Product Keywords:</b></td>
				<td><input type="text" name="product_keywords" /></td>
			<tr>

			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Insert Now" /></td>
			</tr>
			
		</table>

</body>
</html>