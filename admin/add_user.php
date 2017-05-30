<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" type="images/x-icon" href="images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<title>Admin</title>
</head>

<body>
<div class="container">
	
    <!-- header -->
    <?php include("includes/header.php"); ?>
    
	<!-- content -->
    <div class="content">
    <h1>Create New User</h1>
    <hr />
    <form action="#" method="post">
    <div class="floatr"><input type="reset" name="reset" value="Reset" /> <input type="submit" name="submit" value="Save" /></div>
    
    <h2>Basic Info</h2>
    <p class="gray">This section deals with entering of basic information for a user</p>
    <div class="field">
    <label>First Name <span class="red">*</span></label> <div><input type="text" name="text" /></div>
    <label>Last Name <span class="red">*</span></label> <div><input type="text" name="text" /></div>
    <label>User Name <span class="red">*</span></label> <div><input type="text" name="text" /></div>
    <label>Password <span class="red">*</span></label> <div><input type="text" name="text" /></div>
    <label>Confirm Password <span class="red">*</span></label> <div><input type="text" name="text" /></div>
    <label>Sex</label> <div><input type="text" name="text" /></div>
    <label>Birthday <span class="red">*</span></label> <div><input type="text" name="text" /></div>
    <label>Email <span class="red">*</span></label> <div><input type="text" name="text" /></div>
    </div>
    
    <h2>Personal Informaton</h2>
    <p class="gray">This section d stateals with entering of personal information of a user </p>
    <div class="field">        
    <label>Passions / Interest</label> <div><input type="text" name="text" /></div>
    <label>Favourite Movies</label> <div><input type="text" name="text" /></div>
    <label>Favourite Books</label> <div><input type="text" name="text" /></div>
    <label>Favourite Music</label> <div><input type="text" name="text" /></div>
    <label>Favourite Places for visiting</label> <div><input type="text" name="text" /></div>
    </div>
    
    <h2>Contact Information</h2>
    <p class="gray">This section deals with entering of contact information of a user </p>
    <div class="field">
    <label>Secondary email</label> <div><input type="text" name="text" /></div>
    <label>Phone (residential)</label> <div><input type="text" name="text" /></div>
    <label>Phone (cell)</label> <div><input type="text" name="text" /></div>
    <label>Address line1</label> <div><input type="text" name="text" /></div>
    <label>Address line2</label> <div><input type="text" name="text" /></div>
    <label>City</label> <div><input type="text" name="text" /></div>
    <label>State</label> <div><input type="text" name="text" /></div>
    <label>Zip / Postal Code</label> <div><input type="text" name="text" /></div>
    <label>Country</label> <div><input type="text" name="text" /></div>
    </div>
    
    <div align="right"><input type="reset" name="reset" value="Reset" /> <input type="submit" name="submit" value="Save" /></div>
    </form>
  
    <hr class="space" />
    </div>
    
	<!-- footer -->
    <?php include("includes/footer.php"); ?>
</div>
</body>
</html>