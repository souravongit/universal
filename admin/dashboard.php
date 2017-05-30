<?php
ob_start();
session_start();
if (!isset($_SESSION['id']) || $_SESSION['id'] == false) {
		header('Location:index.php');
		exit;
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" type="images/x-icon" href="images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<style>
		.black_overlay{
			display: none;
			position: absolute;
			top: 0%;
			left: 0%;
			width: 100%;
			height: 100%;
			background-color: black;
			z-index:1001;
			-moz-opacity: 0.8;
			opacity:.80;
			filter: alpha(opacity=80);
		}
		.white_content {
			display: none;
			position: absolute;
			top: 25%;
			left: 40%;
			padding: 16px;
			border: 10px solid #666;
			background-color: white;
			border-radius: 6px 6px 6px 6px;
			z-index:1002;
			overflow: auto;
			width:auto;
			height:auto;
		}
		.closebutton{
			margin: 0;
    		padding: 0;
    		position: absolute;
    		right: 0;
			top:-3px;
		}
		</style>
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/admin.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#light").hide();

        $('.change_pass').click(function(){
        $("#old_password_error").hide();
        $("#new_password_error").hide();
        $("#user_name_error").hide();
        $("#wrong_usernam_password_error").hide();
	    $("#password_successfully_changed").hide();
	
			document.getElementById('light').style.display='block';
			document.getElementById('fade').style.display='block';

			document.getElementById('light-image').src = imgsrc;
		

		
			//document.getElementById('light').style.display='none';
			//document.getElementById('fade').style.display='none';
		
	
// $(".loginbox").slideToggle();

 });

});
function closeLightBox(){
			//document.getElementById('light-image').innerHTML = '';
			document.getElementById('light').style.display='none';
			document.getElementById('fade').style.display='none';
		}
</script>
<title>Admin</title>
</head>

<body>
<div class="container">
	
    <!-- header -->
    <?php include("includes/header.php"); ?>
    
	<!-- content -->
    <div class="content">
    <h1>Dashboard</h1>
    <hr />
    <div class="span-16 dashboardicons">
        <div class="toggle"><img src="images/icon1.png" alt="icon" class="icon" /> <h2><a href="#">Product</a></h2></div>
        <ul class="sublink1">
        <li><a href="add_product.php">Add New Product</a></li>
        <li><a href="add_product_list.php">List all Products</a></li>
        
        </ul>
        <p>Add, Edit, View all Products</p>
    </div>
    <div class="span-16 last dashboardicons">
        <div class="toggle"><img src="images/icon1.png" alt="icon" class="icon" /> <h2><a href="#">News</a></h2></div>
        <ul class="sublink1">
        <li><a href="add_news.php">Add News</a></li>
		<li><a href="news_list.php">All News</a></li>
       <!-- <li><a href="#">Sub Link 2</a></li>
        <li><a href="#">Sub Link 3</a></li>
        <li><a href="#">Sub Link 4</a></li>
        <li><a href="#">Sub Link 5</a></li>-->
        </ul>
        <p>Add, Edit, View all Purchase</p>
    </div>
    <hr />
    <div class="span-16 dashboardicons">
        <div class="toggle"><img src="images/icon1.png" alt="icon" class="icon" /> <h2><a href="#">Photo Gallery</a></h2></div>
        <ul class="sublink1">
        <li><a href="gallery_photo.php">Add all Photos</a></li>
		<li><a href="gallery_photo_list.php">List all Photos</a></li>
        <!--<li><a href="#">Sub Link 2</a></li>
        <li><a href="#">Sub Link 3</a></li>
        <li><a href="#">Sub Link 4</a></li>
        <li><a href="#">Sub Link 5</a></li>-->
        </ul>
        <p>Add, Edit, View all Photos</p>
    </div>
    <div class="span-16 last dashboardicons">
        <div class="toggle"><img src="images/icon1.png" alt="icon" class="icon" /> <h2><a href="#">Admin Management</a></h2></div>
        <ul class="sublink1">
        <li ><a href="#"  class="change_pass">Change Password</a></li>
        <li><a href="add_user.php">Add New User</a></li>
        <!--<li><a href="#">Sub Link 3</a></li>
        <li><a href="#">Sub Link 4</a></li>
        <li><a href="#">Sub Link 5</a></li>-->
        </ul>
        <p>Account Settings</p>
    </div>
    <hr />
	<div align="center" ><label  class="error" for="password" id="password_successfully_changed">password successfully changed.</label></div>
	<div class="white_content" id="light" style="display:none;">
	<div class="closebutton"><a href= "javascript:void(0)" onclick = "closeLightBox();"><img src="images/cross.png" border="0" alt="Close" titile="Close" /></a></div>
    <h1>Change Password</h1>
    <form name="form" action="#" method="post">
    <label>Username</label>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="user_name" id="user_name" size="40px;" /><br/><br/>
    <label>Old Password</label>&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="old_password"  id="old_password" size="40px;"/><br/><br/>
	 <label>New Password</label> &nbsp;&nbsp;<input type="password" name="new_password"  id="new_password" size="40px;"/><br/><br/>
    <!--<div class="floatr">--><label style="float:left" class="error" for="product_price" id="user_name_error">Username is required.</label><label style="float:left; " class="error" for="password" id="old_password_error">Enter Old Password.</label><label style="float:left; " class="error" for="password" id="new_password_error"> Enter New Password.</label><label style="float:left; " class="error" for="password" id="wrong_usernam_password_error">Wrong Username or Password.</label><input type="button" name="changepassword" id="changepassword" value="save" style="float:right" /><!--</div>-->
    <hr class="space" />
    </form>
    </div>
	<div id="fade" class="black_overlay"></div>
    <!--<div class="span-16 dashboardicons">
        <div class="toggle"><img src="images/icon1.png" alt="icon" class="icon" /> <h2><a href="#">Admin Management</a></h2></div>
        <ul class="sublink1">
        <li><a href="#">Sub Link 1</a></li>
        <li><a href="#">Sub Link 2</a></li>
        <li><a href="#">Sub Link 3</a></li>
        <li><a href="#">Sub Link 4</a></li>
        <li><a href="#">Sub Link 5</a></li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget nisl tortor, at iaculis augue. Donec purus mauris.</p>
    </div>
    <div class="span-16 last dashboardicons">
        <div class="toggle"><img src="images/icon1.png" alt="icon" class="icon" /> <h2><a href="#">Admin Management</a></h2></div>
        <ul class="sublink1">
        <li><a href="#">Sub Link 1</a></li>
        <li><a href="#">Sub Link 2</a></li>
        <li><a href="#">Sub Link 3</a></li>
        <li><a href="#">Sub Link 4</a></li>
        <li><a href="#">Sub Link 5</a></li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget nisl tortor, at iaculis augue. Donec purus mauris.</p>
    </div>
    <hr />
    <div class="span-16 dashboardicons">
        <div class="toggle"><img src="images/icon1.png" alt="icon" class="icon" /> <h2><a href="#">Admin Management</a></h2></div>
        <ul class="sublink1">
        <li><a href="#">Sub Link 1</a></li>
        <li><a href="#">Sub Link 2</a></li>
        <li><a href="#">Sub Link 3</a></li>
        <li><a href="#">Sub Link 4</a></li>
        <li><a href="#">Sub Link 5</a></li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget nisl tortor, at iaculis augue. Donec purus mauris.</p>
    </div>
    <div class="span-16 last dashboardicons">
        <div class="toggle"><img src="images/icon1.png" alt="icon" class="icon" /> <h2><a href="#">Admin Management</a></h2></div>
        <ul class="sublink1">
        <li><a href="#">Sub Link 1</a></li>
        <li><a href="#">Sub Link 2</a></li>
        <li><a href="#">Sub Link 3</a></li>
        <li><a href="#">Sub Link 4</a></li>
        <li><a href="#">Sub Link 5</a></li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget nisl tortor, at iaculis augue. Donec purus mauris.</p>
    </div>
    <hr />
    <div class="span-16 dashboardicons">
        <div class="toggle"><img src="images/icon1.png" alt="icon" class="icon" /> <h2><a href="#">Admin Management</a></h2></div>
        <ul class="sublink1">
        <li><a href="#">Sub Link 1</a></li>
        <li><a href="#">Sub Link 2</a></li>
        <li><a href="#">Sub Link 3</a></li>
        <li><a href="#">Sub Link 4</a></li>
        <li><a href="#">Sub Link 5</a></li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget nisl tortor, at iaculis augue. Donec purus mauris.</p>
    </div>
    <div class="span-16 last dashboardicons">
        <div class="toggle"><img src="images/icon1.png" alt="icon" class="icon" /> <h2><a href="#">Admin Management</a></h2></div>
        <ul class="sublink1">
        <li><a href="#">Sub Link 1</a></li>
        <li><a href="#">Sub Link 2</a></li>
        <li><a href="#">Sub Link 3</a></li>
        <li><a href="#">Sub Link 4</a></li>
        <li><a href="#">Sub Link 5</a></li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget nisl tortor, at iaculis augue. Donec purus mauris.</p>
    </div>-->
 
    <hr class="space" />
    </div>
    
	<!-- footer -->
    <?php include("includes/footer.php"); ?>
</div>
</body>
</html>
<?php
if(isset($_REQUEST["msg"]) && $_REQUEST["msg"]=="not_permitted")
	{
	?>
	<script type="text/javascript">
	alert("You are not permitted to enter that section!");
	</script>
	<?php
	} 
	?>