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
<script type="text/javascript" src="js/admin.js"></script>
<script type="text/javascript">
$(function() {
$("#add_new_product").click(function() {
window.location.replace("add_product.php");  
});
});
</script>
<title>Admin</title>
</head>

<body>
<div class="container" id="product_list">
	
    <!-- header -->
    <?php include("includes/header.php"); ?>
	<?php
    $query= "SELECT * FROM  manage_product order by id DESC";
//echo $query3;
$result = mysql_query($query);
    
	
	
	/*$sql="select * from manage_product where id = $product_id";
		$result= mysql_query($sql);
		$result_array = mysql_fetch_array($result);
		unlink("uploads/product_photo/thumbnail_photo/".$result_array['photo_name']);
		$sql="delete from header_photo_upload where id = $product_id";
		mysql_query($sql);
		header("location:photo_page.php");
*/
?>
	<!-- content -->
    <div class="content" id="product_photo_list" >
    <h1>Product Management</h1>
    <div class="floatr"><input type="button" name="btn" id="add_new_product" value="Add New"  /></div>
    <p align="center"><!--<a href="#">Active</a> &nbsp;|&nbsp; <a href="#">Inactive</a>--><label  class="error" for="delete" id="delete_success">Deleted Successfully.</label></p>
    
    <div class="grid">
    <h3>Product Management</h3>
    <div class="topbar">
    <!--<input type="button" name="button" value="Activate Selected" class="btn-active" /> | <input type="button" name="button" value="Deactivate Selected" class="btn-deactive" /> |--> <input type="button" name="multiple_product_delete" id="multiple_product_delete" value="Delete Selected" class="btn-delete1" />
    </div>


    <div class="wrapp" >
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <th class="th" width="41"><input type="checkbox" name="check" /></th>
            <th width="132" class="th" onmouseover="this.className='th2'" onmouseout="this.className='th'"><a href="#" class="asc"><img src="images/arrow-des.gif" alt="descending" /></a> Product Title</th>
            <th width="119" class="th" onmouseover="this.className='th2'" onmouseout="this.className='th'"><a href="#" class="asc"><img src="images/arrow-ass.gif" alt="ascending" /></a> Product Details</th>          
            <!--<th width="96" class="th" onmouseover="this.className='th2'" onmouseout="this.className='th'"><a href="#" class="asc"><img src="images/arrow-ass.gif" alt="ascending" /></a> Product Price </th>-->
			 <th width="96" class="th" onmouseover="this.className='th2'" onmouseout="this.className='th'"><a href="#" class="asc"><img src="images/arrow-ass.gif" alt="ascending" /></a> Product Image </th>         
			  <th width="76" class="th" onMouseOver="this.className='th2'" onMouseOut="this.className='th'"><a href="#" class="asc"><img src="images/arrow-ass.gif" alt="ascending" /></a> Date</th>
			<th width="96" class="th" onmouseover="this.className='th2'" onmouseout="this.className='th'"><a href="#" class="asc"><img src="images/arrow-ass.gif" alt="ascending" /></a> Action </th>
            
          </tr>
		  
		  <?php
		  $i=1;
	
while( $row = mysql_fetch_array($result)) {
		  ?>
		  
          <tr onmouseover="this.className='rollover'"<?php if($i%2==0){ ?> onmouseout="this.className='tr1'"<?php } else {?>onmouseout="this.className='tr2'" class="tr2" <?php } ?> >
            <td><input type="checkbox" name="product_id[]" id="product_id[]" value="<?php echo $row['id'];?>" />
			<input type="hidden" name="single_product_id" id="single_product_id" value="<?php echo $row['id'];?>" />
			</td>
            <td><?php echo $row["product_title"];?></td>
			<td><?php echo strip_tags(stripslashes(substr($row['product_details'],0,30)));?>...</td>
          <?php /*?>  <td><?php echo $row["product_price"];?></td><?php */?>
			<td><img src="uploads/product_photo/thumbnail_photo/<?php echo $row["product_name"];?>" /></td>
			<td><?php echo $row["date"];?></td>
            <td><a href="edit_product.php?product_id=<?php echo $row["id"];?>"><img src="images/edit-icon.png" height="20px;" width="18px;" /></a>&nbsp;&nbsp;<input type="button" name="singledeleteproduct" id="singledeleteproduct" value=""  class="btn-delete" /></td>
          </tr>
		  <?php
		  $i++;
				}
		  ?>
         <!-- <tr onmouseover="this.className='rollover'" onmouseout="this.className='tr2'" class="tr2">
            <td><input type="checkbox" name="check" /></td>
            <td>testadmin</td>
            <td>anand@navsoft.in</td>
            <td>Viewer</td>
            <td>2009-29-03 06:06:06</td>
            <td>Active</td>
            <td>&nbsp;</td>
          </tr>
          <tr onmouseover="this.className='rollover'" onmouseout="this.className='tr1'">
            <td><input type="checkbox" name="check" /></td>
            <td>testadmin</td>
            <td>anand@navsoft.in</td>
            <td>Viewer</td>
            <td>2009-29-03 06:06:06</td>
            <td>Active</td>
            <td>&nbsp;</td>
          </tr>
          <tr onmouseover="this.className='rollover'" onmouseout="this.className='tr2'" class="tr2">
            <td><input type="checkbox" name="check" /></td>
            <td>testadmin</td>
            <td>anand@navsoft.in</td>
            <td>Viewer</td>
            <td>2009-29-03 06:06:06</td>
            <td>Active</td>
            <td>&nbsp;</td>
          </tr>
          <tr onmouseover="this.className='rollover'" onmouseout="this.className='tr1'">
            <td><input type="checkbox" name="check" /></td>
            <td>testadmin</td>
            <td>anand@navsoft.in</td>
            <td>Viewer</td>
            <td>2009-29-03 06:06:06</td>
            <td>Active</td>
            <td>&nbsp;</td>
          </tr>
          <tr onmouseover="this.className='rollover'" onmouseout="this.className='tr2'" class="tr2">
            <td><input type="checkbox" name="check" /></td>
            <td>testadmin</td>
            <td>anand@navsoft.in</td>
            <td>Viewer</td>
            <td>2009-29-03 06:06:06</td>
            <td>Active</td>
            <td>&nbsp;</td>
          </tr>
          <tr onmouseover="this.className='rollover'" onmouseout="this.className='tr1'">
            <td><input type="checkbox" name="check" /></td>
            <td>testadmin</td>
            <td>anand@navsoft.in</td>
            <td>Viewer</td>
            <td>2009-29-03 06:06:06</td>
            <td>Active</td>
            <td>&nbsp;</td>
          </tr>
          <tr onmouseover="this.className='rollover'" onmouseout="this.className='tr1'">
            <td><input type="checkbox" name="check" /></td>
            <td>testadmin</td>
            <td>anand@navsoft.in</td>
            <td>Viewer</td>
            <td>2009-29-03 06:06:06</td>
            <td>Active</td>
            <td>&nbsp;</td>
          </tr>
          <tr onmouseover="this.className='rollover'" onmouseout="this.className='tr2'" class="tr2">
            <td><input type="checkbox" name="check" /></td>
            <td>testadmin</td>
            <td>anand@navsoft.in</td>
            <td>Viewer</td>
            <td>2009-29-03 06:06:06</td>
            <td>Active</td>
            <td>&nbsp;</td>
          </tr>
          <tr onmouseover="this.className='rollover'" onmouseout="this.className='tr1'">
            <td><input type="checkbox" name="check" /></td>
            <td>testadmin</td>
            <td>anand@navsoft.in</td>
            <td>Viewer</td>
            <td>2009-29-03 06:06:06</td>
            <td>Active</td>
            <td>&nbsp;</td>
          </tr>
          <tr onmouseover="this.className='rollover'" onmouseout="this.className='tr1'">
            <td><input type="checkbox" name="check" /></td>
            <td>testadmin</td>
            <td>anand@navsoft.in</td>
            <td>Viewer</td>
            <td>2009-29-03 06:06:06</td>
            <td>Active</td>
            <td>&nbsp;</td>
          </tr>
          <tr onmouseover="this.className='rollover'" onmouseout="this.className='tr2'" class="tr2">
            <td><input type="checkbox" name="check" /></td>
            <td>testadmin</td>
            <td>anand@navsoft.in</td>
            <td>Viewer</td>
            <td>2009-29-03 06:06:06</td>
            <td>Active</td>
            <td>&nbsp;</td>
          </tr>
          <tr onmouseover="this.className='rollover'" onmouseout="this.className='tr1'">
            <td><input type="checkbox" name="check" /></td>
            <td>testadmin</td>
            <td>anand@navsoft.in</td>
            <td>Viewer</td>
            <td>2009-29-03 06:06:06</td>
            <td>Active</td>
            <td>&nbsp;</td>
          </tr>-->
        </table>
    </div>
    </div>

    <!--<div align="right"><input type="button" name="btn" value="Add New" /></div>-->
    <hr class="space" />
    </div>
 <div class="loading_div" id="loading" align="center"><img id="loading" src="images/loading.gif" style="margin-top:300px;" ></div>   
	<!-- footer -->
	</div>
<p class="copy">Copyright &copy; 2010 All Right Reserved.</p>

</body>
</html>