<?php
require_once("includes/config.php");
require_once("includes/db.php");
session_start();
//$_SESSION['first_name'];
//exit;
?>
<div class="header">
   	<div id="logo"><a href="dashboard.php">logo</a></div>
    <div id="loggedinfo">Welcome <em><?php echo $_SESSION['first_name']." ".$_SESSION['last_name'];?></em> &nbsp;|&nbsp; <a href="logout.php">Logout</a><br />Saturday 23 January, 2010 01:57:42:PM</div>
	<hr class="space" />
    </div>    
<div id="navigation">
    <ul>
    <li><a href="dashboard.php">home</a></li>
    <li><a href="#">Accounts</a>
    	<div class="subnav" id="users" >
        <ul class="active">
        <li><a href="change_password.php">Change Password</a></li>
		<li><a href="add_user.php">Add New User</a></li>
        </ul>
        </div>
    </li>
	<li><a href="#">Products</a>
    	<div class="subnav" id="users">
        <ul>
        
        <li><a href="add_product.php">Add New Product</a></li>
        <li><a href="add_product_list.php">List Products</a></li>
        </ul>
        </div>
    </li>
	<li><a href="#">Photo Gallery</a>
    	<div class="subnav" id="users">
        <ul>
        <li><a href="gallery_photo.php">Add Photos</a></li>
        <li><a href="gallery_photo_list.php">List of Photos</a></li>
        
        </ul>
        </div>
    </li>
	<li><a href="#">Header Photos</a>
    	<div class="subnav" id="users">
        <ul>
        <li><a href="header_photo.php">Add Photos</a></li>
        <li><a href="header_photo_list.php">List of Photos</a></li>
        
        </ul>
        </div>
    </li>
	<li><a href="#">News</a>
    	<div class="subnav" id="users">
        <ul>
        <li><a href="add_news.php">Add News</a></li>
        <li><a href="news_list.php">All News</a></li>
        
        </ul>
        </div>
    </li>
    <!--<li><a href="#">Menu Link</a></li>
    <li><a href="#">Menu Link</a></li>
    <li><a href="#">Menu Link</a></li>
    <li><a href="#">Menu Link</a></li>
    <li><a href="#">Menu Link</a></li>-->
    </ul>
    </div>