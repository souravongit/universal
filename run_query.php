<?php
require_once("includes/config.php");
require_once("includes/db.php");
$query="ALTER TABLE `manage_product` ADD `product_title` VARCHAR( 255 )";
$result= mysql_query ($query); 
		    if($result) 
				{
					echo"1";
				}
				else
				{
				echo"0";
				}
?>