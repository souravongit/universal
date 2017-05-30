<?php
$home="";
$product="active";
$photo_gallery="";
$about_us="";
$contact_us="";
$history=""; 
include("includes/header.php");

?>

      <?php
    $query="SELECT * FROM manage_product";	
	//echo $query;
	
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	//echo $num;
	/*$row=mysql_fetch_array($result);
	print_r($row);*/
	//echo $row;
	  ?>
<link rel="stylesheet" type="text/css" href="styles/product.css"/>
<link href="styles/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<link href="styles/product_list.css" rel="stylesheet" type="text/css" />
<style>
/* grid */
.grid th,.grid th1{background:#e7eff2 url(admin/images/bgnav2.png) repeat-x 0 -10px; border-bottom:1px solid #ddd; border-right:1px solid #eee; border-left:1px solid #ccc; text-align:left; padding:3px 5px; font-weight:normal;}
.grid .th2{background:#d9e8fb url(admin/images/bgnav2.png) repeat-x 0 -10px; border-bottom-color:#aaccf6; border-right-color:#aaccf6; border-left-color:#aaccf6;}
.grid td,.grid .tr1 td{border-bottom:1px solid #ededed; border-top:1px solid #fff; padding:3px 5px; color:#666}
.grid .tr2 td{background:#fafafa;}
.grid{border:1px solid #99bbe8; margin-bottom:1em;}
.grid h3{border-bottom:1px solid #99bbe8; margin:0; padding:6px 10px; background:#dfedfe url(admin/images/bgnav.png) repeat-x 0 -5px; color:#000}
.grid .wrapp{width:100%; height:504px; overflow:auto}
.rollover td{background:#eee url(admin/images/bgnav.png) repeat-x 0 0}
.grid input[type=checkbox]{top:0}
.grid .topbar{background:#f8f5e9; border-bottom:1px solid #99bbe8; padding:3px; color:#999}
input.btn-active{background:url(admin/images/unblock.png) no-repeat 5px 4px;}
input.btn-deactive{background:url(admin/images/block.png) no-repeat 5px 4px;}
input.btn-delete{background:url(admin/images/cross.png) no-repeat 5px 4px; }
input.btn-delete1{background:url(admin/images/cross.png) no-repeat 5px 4px; }
input.btn-active,input.btn-deactive,input.btn-delete,input.btn-delete1{border:0; font:normal 12px arial; padding:5px 5px 5px 25px; color:#36c; text-transform:none; cursor:pointer;-moz-border-radius:0; -webkit-border-radius:0;}
	
.paging{padding:4px; background:#f9f9f9; border-top:1px solid #99bbe8}
.paging .text{border-width:1px; padding:1px; width:25px;}
.paging ul li{float:left; margin-right:5px}
.paging ul{height:18px}

</style>
<!--<script>
function formSubmit()
{
document.getElementById("product_detail").submit();
}
</script>-->
<div class="wrapper col3">
<div id="container">
<div class="grid">
    <h3>Universal All Products</h3>
    


    <div class="wrapp" >
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            
            <th width="132" class="th" onmouseover="this.className='th2'" onmouseout="this.className='th'"><a href="#" class="asc"><img src="admin/images/arrow-des.gif" alt="descending" /></a> Product Title</th>
            <th width="119" class="th" onmouseover="this.className='th2'" onmouseout="this.className='th'"><a href="#" class="asc"><img src="admin/images/arrow-ass.gif" alt="ascending" /></a> Product Details</th>          
            <!--<th width="96" class="th" onmouseover="this.className='th2'" onmouseout="this.className='th'"><a href="#" class="asc"><img src="images/arrow-ass.gif" alt="ascending" /></a> Product Price </th>-->
			 <th width="96" class="th" onmouseover="this.className='th2'" onmouseout="this.className='th'"><a href="#" class="asc"><img src="admin/images/arrow-ass.gif" alt="ascending" /></a> Product Image </th>         
			  <th width="76" class="th" onMouseOver="this.className='th2'" onMouseOut="this.className='th'"><a href="#" class="asc"><img src="admin/images/arrow-ass.gif" alt="ascending" /></a> Date</th>
			
            
          </tr>
		  
		  <?php
		  $i=1;
	
while( $row = mysql_fetch_array($result)) {
		  ?>
		  
          <tr onmouseover="this.className='rollover'"<?php if($i%2==0){ ?> onmouseout="this.className='tr1'"<?php } else {?>onmouseout="this.className='tr2'" class="tr2" <?php } ?> >
          
            <td> <a href="product_detail.php?id=<?php echo $row["id"];?>"><font color="#000000"> <?php echo $row["product_title"];?></font></a></td>
			<td><a href="product_detail.php?id=<?php echo $row["id"];?>"><font color="#000000"><?php echo strip_tags(stripslashes(substr($row['product_details'],0,30)));?>...</font></a></td>
          <?php /*?>  <td><?php echo $row["product_price"];?></td><?php */?>
			<td><a href="product_detail.php?id=<?php echo $row["id"];?>"><img src="admin/uploads/product_photo/thumbnail_photo/<?php echo $row["product_name"];?>" /></a></td>
			<td><?php echo $row["date"];?></td>
            
          </tr>
		  
		  <?php
		  $i++;
				}
		  ?>
        
        </table>
    </div>
    </div>
 </div>
 </div>
		 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="jquery/jquery-1.7.2.min.js"%3E%3C/script%3E'))</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	<script>!window.jQuery.ui && document.write(unescape('%3Cscript src="jquery/jquery-ui-1.8.21.custom.min.js"%3E%3C/script%3E'))</script>

 	<script src="js/jquery.mousewheel.min.js"></script>
	<!-- custom scrollbars plugin -->
	<script src="js/jquery.mCustomScrollbar.js"></script>
	<script>
		(function($){
			$(window).load(function(){
				$("#content_1").mCustomScrollbar({
					set_width:false, /*optional element width: boolean, pixels, percentage*/
					set_height:false, /*optional element height: boolean, pixels, percentage*/
					horizontalScroll:false, /*scroll horizontally: boolean*/
					scrollInertia:550, /*scrolling inertia: integer (milliseconds)*/
					scrollEasing:"easeOutCirc", /*scrolling easing: string*/
					mouseWheel:"pixels", /*mousewheel support and velocity: boolean, "auto", integer, "pixels"*/
					mouseWheelPixels:60, /*mousewheel pixels amount: integer*/
					autoDraggerLength:true, /*auto-adjust scrollbar dragger length: boolean*/
					scrollButtons:{ /*scroll buttons*/
						enable:false, /*scroll buttons support: boolean*/
						scrollType:"continuous", /*scroll buttons scrolling type: "continuous", "pixels"*/
						scrollSpeed:20, /*scroll buttons continuous scrolling speed: integer*/
						scrollAmount:40 /*scroll buttons pixels scroll amount: integer (pixels)*/
					},
					advanced:{
						updateOnBrowserResize:true, /*update scrollbars on browser resize (for layouts based on percentages): boolean*/
						updateOnContentResize:false, /*auto-update scrollbars on content resize (for dynamic content): boolean*/
						autoExpandHorizontalScroll:false, /*auto expand width for horizontal scrolling: boolean*/
						autoScrollOnFocus:true /*auto-scroll on focused elements: boolean*/
					},
					callbacks:{
						onScrollStart:function(){}, /*user custom callback function on scroll start event*/
						onScroll:function(){}, /*user custom callback function on scroll event*/
						onTotalScroll:function(){}, /*user custom callback function on scroll end reached event*/
						onTotalScrollBack:function(){}, /*user custom callback function on scroll begin reached event*/
						onTotalScrollOffset:0, /*scroll end reached offset: integer (pixels)*/
						whileScrolling:false, /*user custom callback function on scrolling event*/
						whileScrollingInterval:30 /*interval for calling whileScrolling callback: integer (milliseconds)*/
					}
				});
			});
		})(jQuery);
	</script>
<!-- ####################################################################################################### -->


<?php include("includes/footer.php"); ?>