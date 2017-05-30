<?php
ob_start();
session_start();
if (!isset($_SESSION['id']) || $_SESSION['id'] == false) {
		header('Location:index.php');
		exit;
	}
	else if(isset($_SESSION['login_type']) && $_SESSION['login_type']!="photo_upload" )
{
header('Location:dashboard.php?msg=not_permitted');
}
?>
<?php /*?><?php
$connection=mysql_connect("localhost", "root", "");
if(!$connection)
{
	die('could not connect'.mysql_error());
}
mysql_select_db("universal", $connection);

if(isset($_REQUEST["action"]) && $_REQUEST["action"]=="submit_photo")
{
   
   
    $image_details=$_REQUEST["image_details"];	

 
  $photo_size=$_FILES["file"]["size"];
  $photo_name = time().$_FILES["file"]["name"];

	if(move_uploaded_file($_FILES["file"]["tmp_name"],'uploads/header_photos/'.$photo_name))
	{
	   	   
	    $input_image = "uploads/header_photos/".$photo_name;
		// Get the size of the original image into an array
		$size = getimagesize( $input_image );
		// Set the new width of the image
		$thumb_width = 100;
		// Calculate the height of the new image to keep the aspect ratio
		$thumb_height = ( int )(( $thumb_width/$size[0] )*$size[1] );
		// Create a new true color image in the memory
		$thumbnail = ImageCreateTrueColor( $thumb_width, $thumb_height );
		// Create a new image from file 
		$src_img = ImageCreateFromJPEG( $input_image );
		// Create the resized image
		ImageCopyResampled( $thumbnail, $src_img, 0, 0, 0, 0, $thumb_width, $thumb_height, $size[0], $size[1] );
		// Save the image as resized.jpg
		ImageJPEG( $thumbnail, "uploads/header_photos/thumbnail_photo/".$photo_name );
		// Clear the memory of the tempory image 
		ImageDestroy( $thumbnail );
		
		$query="insert into header_photo_upload set 
		                                            photo_name='$photo_name',
													date=now(),
													details='$image_details'";
		                                            
	   
	    $result= mysql_query ($query, $connection); 
		 if(!$result) 
				{
					header("location:header_photo.php?msg=cant_uploaded");
				}
				else
				{
				header("location:header_photo.php?msg=successfully_uploaded");
				
				}
				}
	
}

				

?><?php */?>

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

<!--<script type="text/javascript">
$(document).ready(function() { 
//elements
var progressbox         = $('#progressbox'); //progress bar wrapper
var progressbar         = $('#progressbar'); //progress bar element
var statustxt           = $('#statustxt'); //status text element
var submitbutton        = $("#SubmitButton"); //submit button
var myform              = $("#UploadForm"); //upload form
var output              = $("#output"); //ajax result output element
var completed           = '0%'; //initial progressbar value
var FileInputsHolder    = $('#AddFileInputBox'); //Element where additional file inputs are appended
var MaxFileInputs       = 3; //Number of file input fields allowed to add

// adding and removing file input box
var i = $('#AddFileInputBox div').size() + 1;
$('#AddMoreFileBox').live('click', function() {
        if(i < MaxFileInputs)
        {
            $('<span><input type="file" id="fileInputBox" size="20" name="file[]" class="addedInput" value=""/><a href="#" class="small2" id="removeFileBox"><img src="images/close_icon.gif" border="0" /></a></span>').appendTo(FileInputsHolder);
            i++;
        }
        return false;
});
$('#removeFileBox').live('click', function() { 
        if( i > 1 ) {
                $(this).parents('span').remove();i--;
        }
        return false;
});

$("#ShowForm").click(function () {
  $("#uploaderform").slideToggle(); //Slide Toggle upload form on click
});
    
$(myform).ajaxForm({
    beforeSend: function() { //brfore sending form
        submitbutton.attr('disabled', ''); // disable upload button
        statustxt.empty();
        progressbox.show(); //show progressbar
        progressbar.width(completed); //initial value 0% of progressbar
        statustxt.html(completed); //set status text
        statustxt.css('color','#000'); //initial color of status text
        
    },
    uploadProgress: function(event, position, total, percentComplete) { //on progress
        progressbar.width(percentComplete + '%') //update progressbar percent complete
        statustxt.html(percentComplete + '%'); //update status text
        if(percentComplete>50)
            {
                statustxt.css('color','#fff'); //change status text to white after 50%
            }else{
                statustxt.css('color','#000');
            }
            
        },
    complete: function(response) { // on complete
        output.html(response.responseText); //update element with received data
        myform.resetForm();  // reset form
        submitbutton.removeAttr('disabled'); //enable submit button
        progressbox.hide(); // hide progressbar
        $("#uploaderform").slideUp(); // hide form after upload
    }
});

}); 



</script> -->
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
    <script type="text/javascript">
	function check_add_header_photo()
	{
	
	  var file = $("input#file").val();
		if (file == "") {
      $("label#header_image_error").show();
      $("input#header_image").focus();
      return false;
	  
	}
		var image_details = $("#image_details").val();
		if (image_details == "") {
      $("label#Image_details_error").show();
      $("#image_details").focus();
      return false;
    }
	}
	</script>
	<!-- content -->
    <div class="content">
    <h1>Add Photos</h1>
    <hr />
    
    <h2>Basic Info</h2>
    <p class="gray">This section deals with entering of basic information for a Photo</p>
    <div class="field">
	
	 <form action="actions.php?action=addheaderphoto" method="post" enctype="multipart/form-data" onSubmit="return check_form(); ">      
	 <label>Header Image <span class="red">*</span></label> <div><input type="file" name="file" id="file"/><label style="float:right" class="error" for="header_image" id="header_image_error"> Header Image is required.</label></div>
	 
	  <label>Image Details <span class="red">*</span></label> <div><input type="text" name="image_details" id="image_details" class="text-input" /><label style="float:right" class="error" for="image_details" id="image_details_error">Image Details is required.</label></div>
	<div id="submit" style="left:20px;">
	  <input name="submit" type="submit"   value="submit"  />
	</div>
	
	<div align="center">
	
	
	<label  class="error" for="header_added" id="header_added">Photo Successfully Added.</label><label  class="error" for="header_added_error" id="header_added_error">Photo Cant Added.</label>
 </div><hr class="space" />
	</form>
   
	
    <!--<div id="status"></div>	-->
	</div>
	<div class="progress" >
        <div class="bar"></div >
        <div class="percent" >0%</div >
    </div>
    
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
<script>
function check_form()
{
	
	  var file = $("input#file").val();
		if (file == "") {
      $("label#header_image_error").show();
      $("input#file").focus();
      return false;
	  }
	  else
	{
	$("label#header_image_error").hide();
	
	}
	  
		var image_details = $("#image_details").val();
		if (image_details == "") {
      $("label#image_details_error").show();
      $("#image_details").focus();
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
				  
				   
				   $('#image_details').val('');
				   $("label#header_added").show();
				  
				//window.location.replace("dashboard.php");  
			  }
			  else
			  {
				   //alert("not inserted");
				   $("label#header_added_error").show();
				   
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


