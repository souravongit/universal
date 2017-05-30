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
$("#add_headerphoto").click(function() {
window.location.replace("header_photo.php");  
});
});
</script>
<title>Admin</title>
</head>

<body>
<div class="container" id="header_photo_list">
	
    <!-- header -->
    <?php include("includes/header.php"); ?>
	<?php
    $query= "SELECT * FROM header_photo_upload order by id DESC";
//echo $query3;
$result = mysql_query($query);


?>
	<!-- content -->
    <div class="content" >
    <h1>All News</h1>
    <div class="floatr"><input type="button" name="btn" id="add_headerphoto" value="Add New"  /></div>
    <p align="center"><!--<a href="#">Active</a> &nbsp;|&nbsp; <a href="#">Inactive</a>--><label  class="error" for="delete" id="delete_headerphoto_success">Deleted Successfully.</label></p>
    
    <div class="grid">
    <h3>All News</h3>
    <div class="topbar">
    <!--<input type="button" name="button" value="Activate Selected" class="btn-active" /> | <input type="button" name="button" value="Deactivate Selected" class="btn-deactive" /> |-->  <input type="button" name="multiple_headerphoto_delete" id="multiple_headerphoto_delete" value="Delete Selected" class="btn-delete1" />
	 
    </div>
    <div class="wrapp" >
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <th class="th" width="41"><input type="checkbox" name="check" /></th>
            <th width="132" class="th" onMouseOver="this.className='th2'" onMouseOut="this.className='th'"><a href="#" class="asc"><img src="images/arrow-des.gif" alt="descending" /></a>Image Details</th>
            <th width="132" class="th" onMouseOver="this.className='th2'" onMouseOut="this.className='th'"><a href="#" class="asc"><img src="images/arrow-des.gif" alt="descending" /></a>Image</th>
            <th width="76" class="th" onMouseOver="this.className='th2'" onMouseOut="this.className='th'"><a href="#" class="asc"><img src="images/arrow-ass.gif" alt="ascending" /></a> Date</th>
            <th width="96" class="th" onMouseOver="this.className='th2'" onMouseOut="this.className='th'"><a href="#" class="asc"><img src="images/arrow-ass.gif" alt="ascending" /></a> Action </th>
                    
          </tr>
		  <?php
		  $i=1;
	
while( $row = mysql_fetch_array($result)) {
		  ?>
          <tr onMouseOver="this.className='rollover'"<?php if($i%2==0){ ?> onMouseOut="this.className='tr1'"<?php } else {?>onmouseout="this.className='tr2'" class="tr2" <?php } ?> >
            <td><input type="checkbox" name="header_id[]" id="header_id[]" value="<?php echo $row['id'];?>" />
			<input type="hidden" name="single_headerphoto_id" id="single_headerphoto_id" value="<?php echo $row['id'];?>" />
			</td>
            <td><?php echo $row["details"];?></td>
			<td><img src="uploads/header_photos/thumbnail_photo/<?php echo $row["photo_name"];?>" /></td>
    		<td><?php echo $row["date"];?></td>
   			<td><a href="edit_header_photo.php?header_id=<?php echo $row["id"];?>"><img src="images/edit-icon.png" height="20px;" width="18px;" /></a>&nbsp;&nbsp;<input type="button" name="singledeleteheaderphoto" id="singledeleteheaderphoto" value="" class="btn-delete" /></td>
          </tr>
		  <?php
		  $i++;
				}
		  ?>
       
        </table>
    </div>
    </div>

    <!--<div align="right"><input type="button" name="btn" value="Add New" /></div>-->
    <hr class="space" />
    </div>
 <div class="loading_div" id="loading" align="center"><img id="loading" src="images/loading.gif" style="margin-top:300px;" ></div>   
	<!-- footer -->
<p class="copy">Copyright &copy; 2010 All Right Reserved.</p>
</div>
</body>
</html>