<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" type="images/x-icon" href="images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
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
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/admin.js" ></script>
<title>Admin</title>
</head>

<body>
<div class="container login">
	<div id="logo"><a href="#">logo</a></div>
	<div class="loginbox">
    <h1>Login with company</h1>
    <form name="form" action="#" method="post">
    <label>Username</label> <input type="text" name="user_name" id="user_name" />
    <label>Password</label> <input type="password" name="password"  id="password"/>
	<input type="radio" name="login_type"  id="login_type" value="photo_upload"/>Photo Upload<input type="radio" name="login_type"  id="login_type" value="notice_upload"/>Notice Upload<input type="radio" name="login_type"  id="login_type" value="product_manage"/>Manage Product
    <!--<div class="floatr">--><label style="float:left" class="error" for="product_price" id="user_name_error">Username is required.</label><label style="float:left; " class="error" for="password" id="password_error">Password is required.</label><label style="float:left; " class="error" for="password" id="login_error">Wrong Username or Password.</label><label style="float:left; " class="error" for="password" id="login_type_error">Please Choose a Login Type!</label><input type="button" name="login" id="login" value="Login" style="float:right" /><!--</div>-->
    <hr class="space" />
    </form>
    </div>
    <p class="copy">Copyright &copy; 2010 All Right Reserved.</p>
</div>
<div class="loading_div" id="loading" align="center"><img id="loading" src="images/loading.gif" style="margin-top:300px;" ></div>
</body>
</html>