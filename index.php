<?php 
$home="active";
$product="";
$photo_gallery="";
$about_us="";
$contact_us="";
$history="";
$universal_sales="";
$universal_energy_solutions="";
$universal_sales_projects="";
include("includes/header.php");

?>
<div class="wrapper col2">
  <div id="featured_slide">
    <div id="featured_content">
      <ul>
        <li><img src="images/DSC07264.jpg" alt="" />
          <div class="floater">
            <h2>UNIVERSAL GROUP COMPRISES OF</h2>
            <p>1. <strong>Universal Sales:</strong> Retail Sales & After sales service.<br/>
				2. <strong>Universal Sales & Projects:</strong> <strong>HVAC </strong>solutions for Complete Projects.<br/>
				3. <strong>Universal Energy Solutions (P) Ltd.:</strong> Power Management, Fire  
				Engineering, Ventilation, R & D...</p>
				
            <p class="readmore"><a href="about_us.php">Continue Reading &raquo;</a></p>
          </div>
        </li>
        <li><img src="images/Product.jpg" alt="" />
          <div class="floater">
            <h2>Our Products.</h2>
            <p>Heat Pump/Chiller, Plate Heat Exchanger and Air-conditioning Equipment from CIAT of France 
Water Cooled/Air Cooled Screw/Scroll Chillers, Mini Chillers & Thermal Energy storage system from Cristopia India Division. 
BMS system. 
VRV system from Daikin Air-Conditioning India Pvt. Ltd. 
Ductable , High-wall & Split, Window Air-conditioners form Hitachi. 
Electrical Consultancy services for arrangement of power from supply providers.</p>
            <p class="readmore"><a href="product.php">Continue Reading &raquo;</a></p>
          </div>
        </li>
        <li><img src="images/DSC07262.jpg" alt="" />
          <div class="floater">
            <h2>History of the organization.</h2>
            <p>In  the  Year  1996  Universal  Sales (a Unit Universal group)  was  promoted  as a  Partnership  Company  and  started  Air-conditioning  business  as  a  Regional Franchise for Sales  &  Service with  “Amtrex  Hitachi  Appliances  Limited (At present Hitachi Home & Life Solution India Limited),  a  multinational  Company...
</p>
            <p class="readmore"><a href="history.php">Continue Reading &raquo;</a></p>
          </div>
        </li>
		<li><img src="images/Group_Photo.jpg" alt="" />
          <div class="floater">
            <h2>Our Team.</h2>
            <p>In  the  Year  1996  Universal  Sales (a Unit Universal group)  was  promoted  as  a  Partnership  Company  and  started  Air-conditioning  business  as  a  Regional Franchise for Sales  &  Service with  “Amtrex  Hitachi  Appliances  Limited (At present Hitachi Home & Life Solution India Limited)...
</p>
            <p class="readmore"><a href="photo_gallery.php">Continue Reading &raquo;</a></p>
          </div>
        </li>
		<!--<li><img src="images/DSC07261.JPG" alt="" />
          <div class="floater">
            <h2>About Us.</h2>
            <p>In  the  Year  1996  Universal  Sales (a Unit Universal group)  was  promoted  as  a  Partnership  Company  and  started  Air-conditioning  business  as  a  Regional Franchise for Sales  &  Service with  “Amtrex  Hitachi  Appliances  Limited (At present Hitachi Home & Life Solution India Limited)...
</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </div>
        </li>-->
		<li><img src="images/DSC07261.jpg" alt="" />
          <div class="floater">
            <h2>Contact Us.</h2>
            <p>In  the  Year  1996  Universal  Sales (a Unit Universal group)  was  promoted  as  a  Partnership  Company  and  started  Air-conditioning  business  as  a  Regional Franchise for Sales  &  Service with  “Amtrex  Hitachi  Appliances  Limited (At present Hitachi Home & Life Solution India Limited)...
</p>
            <p class="readmore"><a href="contact_us.php">Continue Reading &raquo;</a></p>
          </div>
        </li>
      </ul>
    </div>
    <a href="javascript:void(0);" id="featured-item-prev"><img src="images/prev.png" alt="" /></a> <a href="javascript:void(0);" id="featured-item-next"><img src="images/next.png" alt="" /></a> </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
    <div class="homepage">
      <ul>
	  <?php
    			$query= "SELECT * FROM news_upload order by id DESC LIMIT 0,3";
				//echo $query;
				$result = mysql_query($query);
				$class="last";
				?> 
				 <?php
				$i=1;
				while( $row = mysql_fetch_array($result)) {
				
				$news_id=$row["id"];
				//echo $query;
				//echo $row["photo_name"];
				//exit;
		  		?>
        <li <?php if($i==3) {?>class="<?php echo $class; }?>">
          <p><img src="images/universal group.jpg" alt="" /></p>
		  <h6><?php echo $row["news_title"];?></h6>
          <p><?php echo $row["news_details"];?></p>
          <p class="readmore"><a href="news_details.php?id=<?php echo $row["id"];?>">Continue Reading &raquo;</a></p>
        </li>
        <!--<li>
          <h2><img src="images/demo/60x60.gif" alt="" />Latest Realesed News No 2</h2>
          <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
          <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        </li>
        <li class="last">
          <h2><img src="images/demo/60x60.gif" alt="" />Latest Realesed News No 3</h2>
          <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
          <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        </li>-->
		<?php
			  		$i++;
					}
		  			?>
      </ul>
      <br class="clear" />
    </div>
  </div>
</div>


<?php include("includes/footer.php");
?>