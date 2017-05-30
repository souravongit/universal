<?php
ob_start();
session_start();
if (!isset($_SESSION['id']) || $_SESSION['id'] == false) {
		header('Location:index.php');
		exit;
	}
	else if(isset($_SESSION['login_type']) && $_SESSION['login_type']!="notice_upload" )
{
header('Location:dashboard.php?msg=not_permitted');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" type="images/x-icon" href="images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/admin.js"></script>
<style type="text/css">
.loading_div
{
	width:100%;
	height:100%;
	position:absolute;
	top:0px;
	left:0px;
	background-color:#999;
	opacity:0.4;
	filter:alpha(opacity=40);
	display:none;
	
}
</style>
<title>Admin</title>
</head>

<body>
<div class="container">
	
    <!-- header -->
    <?php include("includes/header.php"); ?>
    
	<!-- content -->
    <div class="content">
    <h1>Add News</h1>
    <hr />
    <h2>Basic Info</h2>
	
    <p class="gray">This section deals with entering of basic information of news</p>
    <div class="field">
	  <form action="" method="post">
	
    <label>News Title <span class="red">*</span></label> <div><input  type="text" name="news_title" id="news_title" class="text-input" /><label style="float:right" class="error" for="news_title" id="news_title_error">News Title is required.</label></div>
	
    <label>News Details <span class="red">*</span></label><div><textarea rows="4" cols="47" name="news_details" id="news_details" ></textarea><label style="float:right" class="error" for="news_details" id="news_details_error">News Details are required.</label></div>
 

	
  <div id="submit" style="left:20px;"><input type="button" name="submit" id="add_news" value="submit" /></div>
   <div align="center">
	<label  class="error" for="news_added" id="news_added">News Successfully Added.</label><label  class="error" for="news_added_error" id="news_added_error">News Cant Added.</label></div>
    
	
	
	 </form>
     </div> 
     </div>
     
    
    
	<!-- footer -->
</body>
</html>  
   <?php include("includes/footer.php"); ?>

