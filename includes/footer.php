<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="footer">
    <div class="box1">
      <h2>A Little Video Of Company Information !</h2>
      <!--<iframe width="400" height="220" src="http://www.youtube.com/embed/5uiroWBkdFY" frameborder="0" allowfullscreen></iframe>-->
	  
      <!--<p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anterdumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa. Condimentumfelis et amet tellent quisquet a leo lacus nec augue</p>
      <p>Portortornec condimenterdum eget consectetuer condis.</p>-->
    </div>
    <div class="box contactdetails">
      <h2>Our Contact Details !</h2>
      <ul>
        <li>Universal Energy Solutions Pvt. Ltd.</li>
        <li>P-41 &nbsp; Princep Street</li>
        <li>6th Floor,</li>
        <li>Kolkata-700072</li>
        <li>Tele: 033-40033031/40033182</li>
        <li>FAX: 033-22157893</li>
        <li>Email: universal.energysolutions@gmail.com</li>
        
      </ul>
	  <div align="center"><a href="http://mail.universalgroupindia.org" target="_blank"><img src="images/emailIcon.png" height="150" width="175" style="margin-top:30px;border-radius: 20px ;" /></a></div>
    </div>
	<div class="box contactdetails">
      <h2>For Universal Sales Contact.</h2>
      <ul>
        <li>Mr. Subrata Chakraborty</li>
        <li>Mobile No-9830110613</li>
        <li>Email ID- subroto.universal@gmail.com</li>
        
      </ul>
	  <h2>For Universal Energy Solutions (P) Ltd.</h2>
      <ul>
        <li>Mr. Dev Kumar </li>
        <li>Mobile No-08697707453</li>
        <li>Email ID- kumar@universalgroupindia.org</li>
        
      </ul>
	  <h2>For Universal Sales & Projects.</h2>
      <ul>
        <li>Mr. Sumanta Sengupta</li>
        <li>Mobile No-09748617889</li>
        <li>Email ID- sumanta@universalgroupindia.org</li>
        
      </ul>
    </div>
    <?php /*?><div class="box flickrbox">
      <h2>Latest Products Images !</h2>
      <div class="wrap">
        <div class="fix"></div>
		<?php
		$query= "SELECT * FROM  manage_product order by id DESC LIMIT 0,6";
		//echo $query3;
		$result = mysql_query($query);
		?>
		<?php
		  $i=1;
		while( $row = mysql_fetch_array($result)) {
		?>
        <div class="flickr_badge_image" id="flickr_badge_image1"><a href="product_detail.php?id=<?php echo $row["id"];?>"><img src="admin/uploads/product_photo/thumbnail_photo/<?php echo $row["product_name"];?>" /></a></div>
        <!--<div class="flickr_badge_image" id="flickr_badge_image2"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image3"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image4"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image5"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></div>
        <div class="flickr_badge_image" id="flickr_badge_image6"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></div>-->
		<?php
		  $i++;
		 }
		 ?>
        <div class="fix"></div>
      </div>
    </div><?php */?>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="copyright">
    <p class="fl_left">Computerji<!--Copyright &copy; 2013 - All Rights Reserved - <a href="http://www.inventorsarena.com/">InventorsArena</a>--></p>
	 <p style="float:right"><a href="http://www.inventorsarena.com" target="_blank">Devloped & Maintained By InventorsArena</a><!--Copyright &copy; 2013 - All Rights Reserved - <a href="http://www.inventorsarena.com/">InventorsArena</a>--></p>
   <!-- <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>-->
    <br class="clear" />
  </div>
</div>
</body>
</html>
