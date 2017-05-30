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
body { padding: 30px }
/*form { display: block; margin: 20px auto; background: #eee; border-radius: 10px; padding: 15px }*/

.progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px;  }
.bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
.percent { position:absolute; display:inline-block; top:3px; left:48%; }
</style>


<title>Admin</title>
</head>

<body>
<div class="container">
	
    <!-- header -->
   
     <script type="text/javascript">
	function check_update_gallery_photo()
	{
	
	 var file = $("input#file").val();
		
		if (file == "") {
      $("label#image_error").show();
      $("input#file").focus();
      return false;
   }
	
    var image_name = $("input#image_name").val();
		
		if (image_name == "") {
      $("label#image_name_error").show();
      $("input#image_name").focus();
      return false;
	 
    }
	
	var image_details = $("input#image_details").val();		
		 if (image_details== "") {
      $("label#image_details_error").show();
      $("input#image_details").focus();
      return false;
    }
	}
	</script>
	<?php include("includes/header.php"); ?>
	 <?php
	$gallery_id=$_REQUEST["gallery_id"];
    $query= "SELECT * FROM photo_gallery_upload WHERE id='$gallery_id'";

	$result = mysql_query($query);
	$row=mysql_fetch_array($result);
	?>
	<!-- content -->
    <div class="content">
    <h1>Update New Photo</h1>
    <hr />
    
    <h2>Basic Info</h2>
    <p class="gray">This section deals with entering of basic information for a Photo</p>
    <div class="field">
		 <form action="actions.php?action=updategalleryphoto" method="post" enctype="multipart/form-data" onSubmit="return check_form();">     
	 <input type="hidden" name="gallery_id" id="gallery_id" value="<?php echo $row["id"]; ?>" /> 
	
     <label>Image <span class="red">*</span></label> <div><input type="file" name="file[]" id="file" multiple="multiple" /><label style="float:right" class="error" for="image" id="image_error">Image is required.</label></div>
	
	
	<label>Image Title <span class="red">*</span></label> <div><input  type="text" name="image_name" id="image_name" class="text-input" /><label style="float:right" class="error" for="image_name" id="image_name_error">Image Title is required.</label></div>
	     	
   
    <label>Image Details <span class="red">*</span></label> <div><input type="text" name="image_details" id="image_details" class="text-input" /><label style="float:right" class="error" for="image_details" id="image_details_error">Image Details is required.</label></div>
	<div id="submit" style="left:20px;"><input type="submit" name="submit" value="update" /></div>
	
	
	
    <label  class="error" for="gallery_added" id="gallery_added" >Photo Successfully Added.</label><label  class="error" for="gallery_added_error" id="gallery_added_error">Photo Cant Added.</label>
	
  
    <hr class="space" />
	 </form>
	 
    </div>
	
	<div class="progress" >
        <div class="bar"></div >
        <div class="percent" >0%</div >
    </div>
    
    <!--<div id="status"></div>	-->
	
    </div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
<script>
function check_form()
{
var file = $("input#file").val();
		
		if (file == "") {
      $("label#image_error").show();
      $("input#file").focus();
      return false;
	 
    }
	else
	{
	$("label#image_error").hide();
	
	}
var image_name = $("input#image_name").val();
		
		if (image_name == "") {
      $("label#image_name_error").show();
      $("input#image_name").focus();
      return false;
	 
    }
	else
	{
	$("label#image_name_error").hide();
	
	}
	var image_details = $("input#image_details").val();		
		 if (image_details== "") {
      $("label#image_details_error").show();
      $("input#image_details").focus();
      return false;
    }
	else
	{
	$("label#image_details_error").hide();
	
	}
}
(function() {
    
var bar = $('.bar');
var percent = $('.percent');
var status = $('#status');
   
$('form').ajaxForm({
    beforeSend: function() {
        status.empty();
        var percentVal = '0%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal);
        percent.html(percentVal);
		console.log(percentVal, position, total);
    },
	complete: function(xhr) {
		status.html(xhr.responseText);
		//alert(xhr.responseText);
		var percentVal =  '100%';
        bar.width(percentVal);
        percent.html(percentVal);
		if(xhr.responseText!="0")
			  {
				  
				   $('#image_name').val('');
				   $('#image_details').val('');
				   $("label#gallery_added").show();
				  
				//window.location.replace("dashboard.php");  
			  }
			  else
			  {
				   //alert("not inserted");
				   $("label#gallery_added_error").show();
				   
			  }
	}
}); 

})();       
</script>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript">
_uacct = "UA-850242-2";
urchinTracker();
</script>
	<!-- footer -->
	</div>

    <?php include("includes/footer.php"); ?>
</body>
</html>
