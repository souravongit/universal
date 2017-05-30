
<?php
include("includes/header.php");
?>
<?php
$id=$_REQUEST['id'];
$query="select * from news_upload where id=$id";
//echo $query;
$result=mysql_query($query);
$row=mysql_fetch_array($result);
 ?>
 <style>
 .news_content{ width:500px; height:400px; margin:0 0 0 220px; padding:0 0 0 60px;}
 </style>
<div class="wrapper col3">
<div id="container">
	<div class="news_content">

     			<div id="aboutus" style="width:320px; height:50px; text-align:center; padding:0 0 0 20px;"><strong><h1>News Detail</h1></strong></div>
		   		
				<div class="detail_font"><b>HERE IS THE TITLE</b></div>
   				<div class="detail_font"><?php echo $row["news_title"];?></div><br/>
  	 			
				
				<div class="detail_font" style="width:420px;"><strong>HERE IS DETAIL</strong></div><br/>
				<div class="detail_font" style="width:420px;"><?php echo $row["news_details"];?></div><br/>
   		
		
				<div class="detail_font"><strong>DATE</strong></div>
				<div class="detail_font"><?php echo $row["date"];?></div>
	</div>

</div>
</div>
<?php 
include("includes/footer.php");
?>
