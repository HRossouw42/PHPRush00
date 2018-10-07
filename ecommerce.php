<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.8.3
 */

/**
 * Database `ecommerce`
 */

/* `ecommerce`.`admins` */
$admins = array(
  array('user_id' => '1','user_email' => 'awpareshan@gmail.com','user_pass' => 'wali'),
  array('user_id' => '2','user_email' => 'saima@yahoo.com','user_pass' => 'khan')
);

/* `ecommerce`.`brands` */
$brands = array(
  array('brand_id' => '1','brand_title' => 'Fighter'),
  array('brand_id' => '2','brand_title' => 'Cleric'),
  array('brand_id' => '3','brand_title' => 'Rogue'),
  array('brand_id' => '4','brand_title' => 'Wizard'),
  array('brand_id' => '7','brand_title' => 'Paladin')
);

/* `ecommerce`.`cart` */
$cart = array(
);

/* `ecommerce`.`categories` */
$categories = array(
  array('cat_id' => '1','cat_title' => 'Melee'),
  array('cat_id' => '2','cat_title' => 'Ranged'),
  array('cat_id' => '3','cat_title' => 'Staves'),
  array('cat_id' => '4','cat_title' => 'Spells'),
  array('cat_id' => '5','cat_title' => 'Armour'),
  array('cat_id' => '6','cat_title' => 'Misc'),
  array('cat_id' => '7','cat_title' => 'Adventure Kits')
);

/* `ecommerce`.`customers` */
$customers = array(
);

/* `ecommerce`.`products` */
$products = array(
  array('product_id' => '2','product_cat' => '5','product_brand' => '3','product_title' => 'Leather Armour','product_price' => '10','product_desc' => '<p>Made from fresh Bessy</p>','product_image' => 'Leather Armour.png','product_keywords' => 'armour, rogue'),
  array('product_id' => '3','product_cat' => '5','product_brand' => '1','product_title' => 'Chain Shirt','product_price' => '50','product_desc' => '<p>Just like mama dwarf used to make</p>','product_image' => 'Chain Shirt.png','product_keywords' => 'armour, fighter'),
  array('product_id' => '4','product_cat' => '2','product_brand' => '3','product_title' => 'Longbow','product_price' => '50','product_desc' => '<p>Attack with the airspeed velocity of an unladen swallow!</p>','product_image' => 'Longbow.png','product_keywords' => 'ranged, bow, rogue'),
  array('product_id' => '5','product_cat' => '1','product_brand' => '2','product_title' => 'Mace','product_price' => '5','product_desc' => '<p>Apply mace to face for best results</p>','product_image' => 'Mace.png','product_keywords' => 'melee, cleric'),
  array('product_id' => '6','product_cat' => '3','product_brand' => '4','product_title' => 'Rod','product_price' => '5','product_desc' => '<p>Turns you into a newt</p>','product_image' => 'Staff.png','product_keywords' => 'staff, wizard'),
  array('product_id' => '7','product_cat' => '1','product_brand' => '1','product_title' => 'Great Axe','product_price' => '10','product_desc' => '<p>Gets all the ladies</p>','product_image' => 'Great Axe.png','product_keywords' => 'greataxe, fighter'),
  array('product_id' => '8','product_cat' => '5','product_brand' => '2','product_title' => 'Ring Mail','product_price' => '30','product_desc' => '<p>To protect your holy bits</p>','product_image' => 'Ring Mail.png','product_keywords' => 'armour, cleric')
);
