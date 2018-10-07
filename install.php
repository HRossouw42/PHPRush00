<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.8.3
 */
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "ecommerce";
$tbl_cart = "cart";
$tbl_cats = "categories";
$tbl_brands = "brands";
$tbl_prod = "products";
$tbl_cust = "customers";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()."<br>");
}

// Create database if it hasn't been already
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn)."<br>";
}

// Refresh connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()."<br>");
}

// Checkout Cart Table
$sql = "CREATE TABLE IF NOT EXISTS $tbl_cart (
  p_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL, 
  ip_add VARCHAR(255) NOT NULL,
  qty INT(10) NOT NULL)";

if (mysqli_query($conn, $sql)) {
  echo " Cart Table created successfully<br>";
} else {
  echo "Error creating table: ".mysqli_error($conn)."<br>";
}

// Cat Category Table
$sql = "CREATE TABLE IF NOT EXISTS $tbl_cats (
	cat_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL, 
	cat_title TEXT NOT NULL)";
	
if (mysqli_query($conn, $sql)) {
	echo "Categories Table created successfully<br>";
} else {
	echo "Error creating table: ".mysqli_error($conn)."<br>";
}

$sql = "INSERT INTO $tbl_cats (cat_id, cat_title) VALUES
(1, 'Melee'),
(2, 'Ranged'),
(3, 'Staves'),
(4, 'Spells'),
(5, 'Armour'),
(6, 'Misc'),
(7, 'Adventure Kits')";

if (mysqli_query($conn, $sql)) {
    echo "Categories created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn)."<br>";
}

// brands Table
$sql = "CREATE TABLE IF NOT EXISTS $tbl_brand (
    brand_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL, 
    brand_title TEXT NOT NULL)";
    
if (mysqli_query($conn, $sql)) {
    echo "brand Table created successfully<br>";
} else {
    echo "Error creating table: ".mysqli_error($conn)."<br>";
}

$sql = "INSERT INTO $tbl_brand (brand_id, brand_title) VALUES
(1, 'Fighter'),
(2, 'Cleric'),
(3, 'Rogue');
(4, 'Wizard');
(5, 'Paladin')";

if (mysqli_query($conn, $sql)) {
    echo "brand records created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn)."<br>";
}

// Details of Products Table
$sql = "CREATE TABLE IF NOT EXISTS $tbl_prod (
product_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL, 
product_cat VARCHAR(30) NOT NULL,
product_brand VARCHAR(30) NOT NULL,
product_title VARCHAR(30) NOT NULL,
product_price VARCHAR(100) NOT NULL,
product_desc TEXT NOT NULL,
product_image TEXT NOT NULL,
product_keywords TEXT NOT NULL)";

if (mysqli_query($conn, $sql)) {
  echo "Products Table created successfully<br>";
} else {
  echo "Error creating table: ".mysqli_error($conn)."<br>";
}

$sql = "INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(2, 5, 3, 'Leather Armour', 10, '<p>Made from fresh Bessy</p>', 'Leather Armour.png', 'armour, rogue'),
(3, 5, 1, 'Chain Shirt', 50, '<p>Just like mama dwarf used to make</p>', 'Chain Shirt.png', 'armour, fighter'),
(4, 2, 3, 'Longbow', 50, '<p>Attack with the airspeed velocity of an unladen swallow!</p>', 'Longbow.png', 'ranged, bow, rogue'),
(5, 1, 2, 'Mace', 5, '<p>Apply mace to face for best results</p>', 'Mace.png', 'melee, cleric'),
(6, 3, 4, 'Rod', 5, '<p>Turns you into a newt</p>', 'Staff.png', 'staff, wizard'),
(7, 1, 1, 'Great Axe', 10, '<p>Gets all the ladies</p>', 'Great Axe.png', 'greataxe, fighter'),
(8, 5, 2, 'Ring Mail', 30, '<p>To protect your holy bits</p>', 'Ring Mail.png', 'armour, cleric');";

if (mysqli_query($conn, $sql)) {
  echo "Products records created successfully<br>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn)."<br>";
}

// User Table
$sql = "CREATE TABLE IF NOT EXISTS $tbl_cust (
	customer_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	customer_ip VARCHAR(255) NOT NULL,
	customer_email VARCHAR(255) NOT NULL,
  customer_pass VARCHAR(100) NOT NULL,
	)";
	
if (mysqli_query($conn, $sql)) {
	echo "Table Users created successfully<br>";
} else {
	echo "Error creating table: ".mysqli_error($conn)."<br>";
}

mysqli_close($conn);
?>

Collapse 
Message Input


Message @hrossouw (CPT) 
