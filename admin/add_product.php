<?php
ob_start();
session_start();
if (!isset($_SESSION['id']) || $_SESSION['id'] == false) {
		header('Location:index.php');
		exit;
	}
else if(isset($_SESSION['login_type']) && $_SESSION['login_type']!="product_manage" )
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
    <?php include("includes/header.php"); ?>
    
	<script type="text/javascript" src="js/tiny_mce.js"></script>
	<script language="javascript" type="text/javascript">
tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options
        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect",
        theme_advanced_buttons2 : "",
        theme_advanced_buttons3 : "",
        theme_advanced_buttons4 : "",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "silver",

        // Example content CSS (should be your site CSS)
        content_css : "css/content.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "js/template_list.js",
        external_link_list_url : "js/link_list.js",
        external_image_list_url : "js/image_list.js",
        media_external_list_url : "js/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});

</script>
	<!-- content -->
    <div class="content">
    <h1>Add New Product</h1>
    <hr />
    
    
    
    <h2>Basic Info</h2>
    <p class="gray">This section deals with entering of basic information for a Product</p>
    <div class="field">
	<form action="actions.php?action=addproduct" method="post" enctype="multipart/form-data" onSubmit="return check_form(); ">      
	 <label>Product Image <span class="red">*</span></label> <div><input type="file" name="file[]" id="file"  /><label style="float:right" class="error" for="product_image" id="product_image_error"> Product Image is required.</label></div>
	  
    <label>Product Name <span class="red">*</span></label> <div><input  type="text" name="product_name" id="product_name" class="text-input" /><label style="float:right" class="error" for="product_name" id="product_name_error">Product Name is required.</label></div>
	
	 <label>Product Type <span class="red">*</span></label> <div><select name="product_type" id="product_type">
	 															<option value="" selected="selected">Select...</option>
																<option value="universal_sales" >Universal Sales</option>
																<option value="universal_energy_solutions" >Universal Energy Solutions(P)Ltd</option>
																<option value="universal_sales_projects" >Universal Sales Projects</option>
	 															 </select><label style="float:right" class="error" for="product_type" id="product_type_error">Product Type is required.</label></div>
	
	 <label>Product Details <span class="red">*</span></label> <div><textarea title="product_details" name="product_details" id="product_details" rows="6" cols="50"></textarea><label style="float:right" class="error" for="product_details" id="product_details_error">Product Details is required.</label></div>
	    
	
   
			
   
	
   <div id="submit" style="left:20px;"><input type="submit" name="submit" id="submit" value="submit" /></div>
    
    
    <!--<div align="right"><input type="reset" name="reset" value="Reset" /> <input type="button" name="add_product" id="add_product" value="Save" /></div>-->
   
  
    
	<div align="center">
	<label  class="error" for="product_added" id="product_added">Product Successfully Added.</label><label  class="error" for="product_added_error" id="product_added_error">Product Cant Added.</label></div>
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
var product_name = $("input#product_name").val();
		
		if (product_name == "") {
      $("label#product_name_error").show();
      $("input#product_name").focus();
      return false;
	 
    }
	else
	{
	$("label#product_name_error").hide();
	
	}
var product_details =tinymce.get('product_details').getContent();
tinymce.triggerSave();
		//alert(product_details);
		if (product_details == "") {
      $("label#product_details_error").show();
      $("#product_details").focus();
      return false;
	 
    }
	else
	{
	product_details =tinymce.get('product_details').getContent();
	$("label#product_details_error").hide();
	
	}
	var product_type = $("#product_type").val();		
		 if (product_type== "") {
      $("label#product_type_error").show();
      $("input#product_type").focus();
      return false;
    }
	else
	{
	$("label#product_type_error").hide();
	
	}
	var file = $("input#file").val();		
		 if (file== "") {
      $("label#product_image_error").show();
      $("input#file").focus();
      return false;
    }
	else
	{
	$("label#product_image_error").hide();
	
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
				  
				   $('#product_name').val('');
				   $('#product_details').val('');
				   $('#product_price ').val('');
				   $("label#product_added").show();
				  
				//window.location.replace("dashboard.php");  
			  }
			  else
			  {
				   //alert("not inserted");
				   $("label#product_added_error").show();
				   
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
    <?php include("includes/footer.php"); ?>
	
</div>
</body>
</html>
