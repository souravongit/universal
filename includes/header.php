<?php
require_once("includes/config.php");
require_once("includes/db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
<title>Universal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<!--<link rel="stylesheet" href="css/basic.css" type="text/css" />
		<link rel="stylesheet" href="css/galleriffic-2.css" type="text/css" />-->
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.setup.js"></script>

<!--<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="js/jquery.galleriffic.js"></script>
		<script type="text/javascript" src="js/jquery.opacityrollover.js"></script>-->
		<!-- We only want the thunbnails to display when javascript is disabled -->
		<!--<script type="text/javascript">
			document.write('<style>.noscript { display: none; }</style>');
		</script>-->
</head>
<body id="top">
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="#">Universal</a></h1>
      <p>Group Of Companies</p>
    </div>
    <div id="topnav">
      <ul>
	 
        <li class="<?php echo $home; ?>"><a href="index.php">Home</a></li>
        <li class="<?php echo $product; ?>"><a href="product.php">Products</a>
		<ul>
            <li class="<?php echo $universal_sales; ?>"><a href="universal_sales.php">Universal Sales</a></li>
            <li class="<?php echo $universal_energy_solutions; ?>"><a href="universal_energy_solutions.php">Universal Energy Solutions(P)Ltd</a></li>
            <li class="<?php echo $universal_sales_projects; ?>"><a href="universal_sales_projects.php">Universal Sales Projects</a></li>
          </ul>
		</li>
        <li class="<?php echo $photo_gallery; ?>"><a href="photo_gallery.php">Gallery</a></li>
		<li class="<?php echo $about_us; ?>"><a href="about_us.php">About Us</a></li>
		<li class="<?php echo $contact_us; ?>"><a href="contact_us.php">Contact Us</a></li>
        <!--<li><a href="#">About Us</a>
          <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
          </ul>
        </li>-->
        <li class="<?php echo $history; ?>"><a href="history.php">History</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>