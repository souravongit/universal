<?php include("includes/header.php");

$query="

CREATE TABLE IF NOT EXISTS `manage_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_details` text NOT NULL,
  `product_price` bigint(22) NOT NULL,
  `date` date NOT NULL,
  `product_title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)";
if(mysql_query($query))
{
echo "1";
}
?>
