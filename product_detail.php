
<?php
include("includes/header.php");
?>
<?php
$id=$_REQUEST['id'];
$query="select * from manage_product where id=$id";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
//print_r($row);
?>


<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta name="viewport" content="initial-scale=1.0">
<head>
<link rel="stylesheet" type="text/css" href="styles/product.css"/>-->
<style>
.image_part{ height:550px; width:300px; float:left; margin:0 0 0 0; padding:10px 0 0 10px;}
.detail_part{ height:550px; width:400px; float:right; margin:20px 12px 0 0; padding:0px 70px 0 0;}
.detail_font{color:#000000;font-family:Arial, Helvetica, sans-serif; font-size:16px;float:left; margin:0 0 0 10px; padding:0px 0 0 10px;}
.product_description{ width:420px; margin:0 0 0 0px; padding:0px 10px 0 0; float:left;}
.body_back{ margin:5px 0 0 25px; padding:0 0 0 0; width:950px; height:800px; }
</style>
<!--<link rel="stylesheet" type="text/css" href="styles/product.css"/>-->
<!--<script>
function formSubmit()
{
document.getElementById("product_detail").submit();
}
</script>-->
<!--</head>
<body style="background:#222;">-->
 <!--</body>
 </html>-->
<div class="wrapper col3">
<div id="container">
<div class="body_back">
<div class="image_part"><center><div id="image_show" class="label_imgdiv"><pre><img src="admin/uploads/product_photo/<?php echo $row["product_name"];?>" height="250px" width="400px" /></pre>
     </div></center>
</div>
<div class="detail_part">
     <div class="product_description"><h2>Product Description</h2></div><br/>
   <div class="detail_font"><b><u><?php echo $row["product_title"];?></u></b></div><br/>
   <div class="detail_font"><?php echo $row["product_details"];?></div><br/>
  <?php /*?> <div class="detail_font"><?php echo $row["product_price"];?></div><br/>
   <div class="detail_font"><?php echo $row["date"];?></div><?php */?>
</div>
 </div>
</div>
</div>
<?php 
include("includes/footer.php");
?>



