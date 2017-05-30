<?php
session_start();
require_once("includes/config.php");
require_once("includes/db.php");
ini_set("memory_limit","128M");
$action=$_REQUEST["action"];

if($action=="login")
{
$user_name=$_REQUEST["user_name"];
$password=$_REQUEST["password"];
$login_type=$_REQUEST["login_type"];
$find_query="SELECT * FROM admin WHERE user_name='$user_name' AND password='$password' AND login_type='$login_type' ";
$count_query="SELECT count(*) as `count` FROM admin WHERE user_name='$user_name' AND password='$password' AND login_type='$login_type' ";
$result = mysql_query($find_query);
$result_count = mysql_query($count_query);
$row_count = mysql_fetch_array($result_count);
//echo $result_count;
	if($row_count['count']>0)
	{
		$row = mysql_fetch_array($result);
		//print_r($result);
		//print_r ($_POST);
		$_SESSION['user_name']=$row['user_name'];
		$_SESSION['first_name']=$row['first_name'];
		$_SESSION['last_name']=$row['last_name'];
		$_SESSION['login_type']=$row['login_type'];
		$_SESSION['id']=$row['id'];
		//echo $_SESSION['first_name']."".$_SESSION['last_name'] ;
		if(!isset($_SESSION['request']))
		{
		echo"1";
		}
		else
		{
		echo"0";
		}
		
	}
	else
	{
	echo"0";
	}
}
else  if($action=="addproduct")
{
    $product_details=$_REQUEST["product_details"];
   
    $product_title=$_REQUEST['product_name'];
	$product_type=$_REQUEST['product_type'];
   
for ($i = 0; $i < count($_FILES["file"]["tmp_name"]); $i++) 
{
	if (is_uploaded_file($_FILES["file"]["tmp_name"][$i])) 
	{
 
	  $photo_size=$_FILES["file"]["size"][$i];
	  $product_name= time().$_FILES["file"]["name"][$i];
	  
	 
		if(move_uploaded_file($_FILES["file"]["tmp_name"][$i],"uploads/product_photo/".$product_name))
		{
		$input_image = "uploads/product_photo/".$product_name;
		// Get the size of the original image into an array
		$size = getimagesize( $input_image );
		// Set the new width of the image
		$thumb_width = 80;
		// Calculate the height of the new image to keep the aspect ratio
		$thumb_height = 80;
		// Create a new true color image in the memory
		$thumbnail = ImageCreateTrueColor( $thumb_width, $thumb_height );
		// Create a new image from file 
		$src_img = ImageCreateFromJPEG( $input_image );
		// Create the resized image
		ImageCopyResampled( $thumbnail, $src_img, 0, 0, 0, 0, $thumb_width, $thumb_height, $size[0], $size[1] );
		// Save the image as resized.jpg
		ImageJPEG( $thumbnail, "uploads/product_photo/thumbnail_photo/".$product_name);
		// Clear the memory of the tempory image 
		ImageDestroy( $thumbnail );
 
		$query="insert into manage_product set 
		product_name='$product_name',
		product_details='$product_details',
		product_type='$product_type',
		product_title='$product_title',
		date=now()";
												
		 										
		    $result= mysql_query ($query); 
		    if($result) 
				{
					echo"1";
				}
				else
				{
				echo"0";
				}
		}		
 }
 }  
}

else  if($action=="editproduct")
{


$product_details=$_REQUEST["product_details"];
   
    $product_title=$_REQUEST['product_name'];
	$product_type=$_REQUEST['product_type'];
if (is_uploaded_file($_FILES["file"]["tmp_name"])) 
	{   
	/*for ($i = 0; $i < count($_FILES["file"]["tmp_name"]); $i++) 
	{*/
	
 
	  $photo_size=$_FILES["file"]["size"];
	  $product_name= time().$_FILES["file"]["name"];
	  
	 
		if(move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/product_photo/".$product_name))
		{
		$input_image = "uploads/product_photo/".$product_name;
		// Get the size of the original image into an array
		$size = getimagesize( $input_image );
		// Set the new width of the image
		$thumb_width = 80;
		// Calculate the height of the new image to keep the aspect ratio
		$thumb_height = 80;
		// Create a new true color image in the memory
		$thumbnail = ImageCreateTrueColor( $thumb_width, $thumb_height );
		// Create a new image from file 
		$src_img = ImageCreateFromJPEG( $input_image );
		// Create the resized image
		ImageCopyResampled( $thumbnail, $src_img, 0, 0, 0, 0, $thumb_width, $thumb_height, $size[0], $size[1] );
		// Save the image as resized.jpg
		ImageJPEG( $thumbnail, "uploads/product_photo/thumbnail_photo/".$product_name);
		// Clear the memory of the tempory image 
		ImageDestroy( $thumbnail );
		
		$query="update manage_product set 
		product_name='$product_name',
		product_details='$product_details',
		product_title='$product_title',
		product_type='$product_type',
		date=now()
		where id='$_REQUEST[product_id]'
		";
				}		
 		/*}*/
		

 }  
 else
		{
 
		$query="update manage_product set 
		product_details='$product_details',
		product_title='$product_title',
		product_type='$product_type',
		date=now()
		where id='$_REQUEST[product_id]'";
												
		 }										
		    $result= mysql_query ($query); 
		    if($result) 
				{
					echo"1";
				}
				else
				{
				echo"0";
				}
}
else  if($action=="singledeleteproduct")
{

$single_product_id=$_REQUEST["single_product_id"];

	$single_product_query = "DELETE from manage_product WHERE id ='$single_product_id'";
	//echo $delete_product_query;
	$result_delete_query = mysql_query($single_product_query);

		if($result_delete_query)
		{
		echo"1";
		}
		else
		{
		echo"0";
		}
	
}

else  if($action=="multipledeleteproduct")
{   
	 $product_ids=$_REQUEST["product_ids"];
	 $query="DELETE FROM manage_product WHERE id IN ($product_ids)";

   $result= mysql_query($query); 
  
	if($result)
		{
		echo"1";
		}
		else
		{
		echo"0";
		}

}
   
else  if($action=="addheaderphoto")
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
		                                            
	   
	    
	   
	    $result= mysql_query ($query); 
		 if($result) 
				{
					echo"1";
				}
				else
				{
				echo"0";
				}
		}		
     
    }
  

else  if($action=="updateheaderphoto")
{
$image_details=$_REQUEST['image_details'];
$photo_size=$_FILES["file"]["size"];
$photo_name = time().$_FILES["file"]["name"];
$header_id=$_REQUEST["header_id"];
  
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
		

	
		$update_query="update header_photo_upload set 
		photo_name='$photo_name',
		details='$image_details'
		where id='$header_id'";
	//echo $update_query;
		$result=mysql_query($update_query);
		
		//echo $_SESSION['first_name']."".$_SESSION['last_name'] ;
		if($result)
		{
		echo"1";
		}
		else
		{
		echo"0";
		}
		
	}
}
else  if($action=="multipledeleteheaderphoto")
{   
	 $headerphoto_ids=$_REQUEST["headerphoto_ids"];
	 $query="DELETE FROM header_photo_upload WHERE id IN ($headerphoto_ids)";

   $result= mysql_query($query); 
  
	if($result)
		{
		echo"1";
		}
		else
		{
		echo"0";
		}

}
else  if($action=="singledeleteheaderphoto")
{  

      $single_headerphoto_id=$_REQUEST["single_headerphoto_id"];

	$delete_headerphoto_query = "DELETE from header_photo_upload WHERE id ='$single_headerphoto_id'";
	//echo $delete_product_query;
	$result_delete_query = mysql_query($delete_headerphoto_query);

		if($result_delete_query)
		{
		echo"1";
		}
		else
		{
		echo"0";
		}
	
}
else  if($action=="addphotogallery")
{
   
     
    $image_details=$_REQUEST["image_details"];	
	$image_name=$_REQUEST["image_name"];
for ($i = 0; $i < count($_FILES["file"]["tmp_name"]); $i++) {
  if (is_uploaded_file($_FILES["file"]["tmp_name"][$i])) {
 
  $photo_size=$_FILES["file"]["size"][$i];
  $photo_name = time().$_FILES["file"]["name"][$i];
  //echo $photo_name;
  //exit;
    
	if(move_uploaded_file($_FILES["file"]["tmp_name"][$i],'uploads/photo_gallery/'.$photo_name))
	 { 
	 $input_image_m = "uploads/photo_gallery/".$photo_name;
	// Get the size of the original image into an array
	$size_m = getimagesize( $input_image_m );
	// Set the new width of the image
	$thumb_width_m = 800;
	// Calculate the height of the new image to keep the aspect ratio
	$thumb_height_m = 533;
	// Create a new true color image in the memory
	$thumbnail_m = ImageCreateTrueColor( $thumb_width_m, $thumb_height_m );
	// Create a new image from file 
	$src_img_m = ImageCreateFromJPEG( $input_image_m );
	// Create the resized image
	ImageCopyResampled( $thumbnail_m, $src_img_m, 0, 0, 0, 0, $thumb_width_m, $thumb_height_m, $size_m[0], $size_m[1] );
	// Save the image as resized.jpg
	ImageJPEG( $thumbnail_m, "uploads/photo_gallery/".$photo_name  );
	// Clear the memory of the tempory image 
	ImageDestroy( $thumbnail_m );
	 
	 	// Set the path to the image to resize
	$input_image = "uploads/photo_gallery/".$photo_name;
	// Get the size of the original image into an array
	$size = getimagesize( $input_image );
	// Set the new width of the image
	$thumb_width = 150;
	// Calculate the height of the new image to keep the aspect ratio
	$thumb_height = 79;
	// Create a new true color image in the memory
	$thumbnail = ImageCreateTrueColor( $thumb_width, $thumb_height );
	// Create a new image from file 
	$src_img = ImageCreateFromJPEG( $input_image );
	// Create the resized image
	ImageCopyResampled( $thumbnail, $src_img, 0, 0, 0, 0, $thumb_width, $thumb_height, $size[0], $size[1] );
	// Save the image as resized.jpg
	ImageJPEG( $thumbnail, "uploads/photo_gallery/thumbnail_photo/".$photo_name  );
	// Clear the memory of the tempory image 
	ImageDestroy( $thumbnail );
	//rotait image
	
	
	   /* $input_image = "uploads/photo_gallery/".$photo_name;
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
		ImageJPEG( $thumbnail, "uploads/photo_gallery/thumbnail_photo/".$photo_name );
		// Clear the memory of the tempory image 
		ImageDestroy( $thumbnail );*/
		
		$query="insert into photo_gallery_upload set 
		photo_name='$photo_name',
		date=now(),
		title='$image_name',
		details='$image_details'"; 
		                                            
	   
	    $result= mysql_query ($query); 
			 if($result)
				{
				echo"1";
				}
				else
				{
				echo"0";
				}
    		}
		}		
     
  }
}
  else  if($action=="updategalleryphoto")
{  
         
		   $gallery_id=$_REQUEST["gallery_id"];
		  $image_details=$_REQUEST["image_details"];	
	      $image_name=$_REQUEST["image_name"];
      for ($i = 0; $i < count($_FILES["file"]["tmp_name"]); $i++) {
         if (is_uploaded_file($_FILES["file"]["tmp_name"][$i])) {
 
        $photo_size=$_FILES["file"]["size"][$i];
        $photo_name = time().$_FILES["file"]["name"][$i];
        //echo $photo_name;
       // exit;
    
	if(move_uploaded_file($_FILES["file"]["tmp_name"][$i],'uploads/photo_gallery/'.$photo_name))
	 { 
	    $input_image = "uploads/photo_gallery/".$photo_name;
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
		ImageJPEG( $thumbnail, "uploads/photo_gallery/thumbnail_photo/".$photo_name );
		// Clear the memory of the tempory image 
		ImageDestroy( $thumbnail );
  
		$update_query="update photo_gallery_upload set 
		photo_name='$photo_name',
		title='$image_name',
		details='$image_details'
		where id ='$gallery_id'"; 
											
	    //echo $update_query;
		$result=mysql_query($update_query);
		
		//echo $_SESSION['first_name']."".$_SESSION['last_name'] ;
		if($result)
		{
		echo"1";
		}
		else
		{
		echo"0";
		}
	   }	
	
     }
   }
}
else  if($action=="multipledeletegalleryphoto")
{   
	 $galleryphoto_ids=$_REQUEST["galleryphoto_ids"];
	 $query="DELETE FROM photo_gallery_upload WHERE id IN ($galleryphoto_ids)";

   $result= mysql_query($query); 
  
	if($result)
		{
		echo"1";
		}
		else
		{
		echo"0";
		}

}
else  if($action=="singledeletegalleryphoto")
{

$single_galleryphoto_id=$_REQUEST["single_galleryphoto_id"];

	$delete_galleryphoto_query = "DELETE from photo_gallery_upload WHERE id ='$single_galleryphoto_id'";
	//echo $delete_product_query;
	$result_delete_query = mysql_query($delete_galleryphoto_query);

		if($result_delete_query)
		{
		echo"1";
		}
		else
		{
		echo"0";
		}
	
}

else  if($action=="addnews")
{

$news_title=$_REQUEST['news_title'];
$news_details=$_REQUEST['news_details'];

$query="insert into news_upload set 
		                          news_title='$news_title',
								  news_details='$news_details',
		                          date=now()";                 
$result= mysql_query ($query); 
		 
			if($result)
			{
			echo"1";
			}
			else
			{
			echo"0";
			}
		
	
}
else  if($action=="updatenews")
{
$news_title=$_REQUEST['news_title'];
$news_details=$_REQUEST['news_details'];
$news_id=$_REQUEST["news_id"];

	
		$update_query="UPDATE news_upload set 
		news_title='$news_title',
		news_details='$news_details'
		WHERE id='$news_id'";
	//echo $update_query;
		$result=mysql_query($update_query);
		
		//echo $_SESSION['first_name']."".$_SESSION['last_name'] ;
		if($result)
		{
		echo"1";
		}
		else
		{
		echo"0";
		}
		
	
}
else  if($action=="multipledeletenews")
{   
	 $allnews_ids=$_REQUEST["allnews_ids"];
	 $query="DELETE FROM news_upload WHERE id IN ($allnews_ids)";

   $result= mysql_query($query); 
  
	if($result)
		{
		echo"1";
		}
		else
		{
		echo"0";
		}

}
else  if($action=="singledeletenews")
{

$single_news_id=$_REQUEST["single_news_id"];

	$delete_news_query = "DELETE from news_upload WHERE id ='$single_news_id'";
	//echo $delete_product_query;
	$result_delete_query = mysql_query($delete_news_query);

		if($result_delete_query)
		{
		echo"1";
		}
		else
		{
		echo"0";
		}
	
}

else  if($action=="changepassword")
{

$user_name=$_REQUEST["user_name"];
$old_password=$_REQUEST["old_password"];
$new_password=$_REQUEST["new_password"];

$count_query="SELECT count(*) as `count` FROM users WHERE user_name='$user_name' AND password='$old_password' ";

$result_count = mysql_query($count_query);
$row_count = mysql_fetch_array($result_count);
//echo $result_count;
	if($row_count['count']>0)
	{
		$update_query="UPDATE users set 
		password='$new_password'
		
		WHERE user_name='$user_name'
		";
	//echo $query_insert_product;
		$result_update=mysql_query($update_query);
		if($result_update)
		{
		echo"1";
		}
		else
		{
		echo"0";
		}
		
	}
	else
	{
	echo"2";
	}
		
	
}
?>
