<?php
$home="";
$product="";
$photo_gallery="active";
$about_us="";
$contact_us="";
$history=""; 
$universal_sales="";
$universal_energy_solutions="";
$universal_sales_projects="";
 include("includes/header.php"); ?>


<!-- ####################################################################################################### -->
<link href="css/demo1.css" type="text/css" rel="stylesheet" /> 
<script src="js/jquery-1.6.4.min.js" type="text/javascript"></script> 
		<script src="js/jquery.exposure.js" type="text/javascript"></script> 
		<script type="text/javascript"> 
			$(function(){
				var gallery = $('#images');
				gallery.exposure({controlsTarget : '#controls',
					controls : { prevNext : true, pageNumbers : true, firstLast : false },
					visiblePages : 2,
					slideshowControlsTarget : '#slideshow',
					onThumb : function(thumb) {
						var li = thumb.parents('li');				
						var fadeTo = li.hasClass($.exposure.activeThumbClass) ? 1 : 0.3;
						
						thumb.css({display : 'none', opacity : fadeTo}).stop().fadeIn(200);
						
						thumb.hover(function() { 
							thumb.fadeTo('fast',1); 
						}, function() { 
							li.not('.' + $.exposure.activeThumbClass).children('img').fadeTo('fast', 0.3); 
						});
					},
					onImage : function(image, imageData, thumb) {
						// Fade out the previous image.
						image.siblings('.' + $.exposure.lastImageClass).stop().fadeOut(500, function() {
							$(this).remove();
						});
						
						// Fade in the current image.
						image.hide().stop().fadeIn(1000);
 
						// Fade in selected thumbnail (and fade out others).
						if (gallery.showThumbs && thumb && thumb.length) {
							thumb.parents('li').siblings().children('img.' + $.exposure.selectedImageClass).stop().fadeTo(200, 0.3, function() { $(this).removeClass($.exposure.selectedImageClass); });			
							thumb.fadeTo('fast', 1).addClass($.exposure.selectedImageClass);
						}
					},
					onPageChanged : function() {
						// Fade in thumbnails on current page.
						gallery.find('li.' + $.exposure.currentThumbClass).hide().stop().fadeIn('fast');
					}
				});
			});
		</script> 
		
<div class="wrapper col3">
  <div id="container">
    <div id="main"> 
			<h1>Photo Gallery</h1> 
			<p><strong>HR Policy:</strong> The Universal group is an equal opportunity group Committed to 
			  affirmative action to become more & more inclusive.
              It’s a happy group with absolutely no discrimination based on class, 
			 creed, religion, gender, what-so-ever. The happy photographs in our annual 
			 Motivation Tour is a testimony to this cohesiveness.</p>
			<div class="panel"> 
				<ul id="images">
				<?php
    			$query= "SELECT * FROM  photo_gallery_upload order by id DESC";
				//echo $query;
				$result = mysql_query($query);
				?> 
				 <?php
				$i=1;
				while( $row = mysql_fetch_array($result)) {
				//echo $query;
				//echo $row["photo_name"];
				//exit;
		  		?>
				
				<li><a href="admin/uploads/photo_gallery/<?php echo $row["photo_name"];?>"><img src="admin/uploads/photo_gallery/thumbnail_photo/<?php echo $row["photo_name"];?>" /></a></li> 
					<!--<li><a href="slides/IMG_2198.jpg"><img src="thumbs/IMG_2198.jpg" title="Home made" /></a></li> 
					<li><a href="slides/IMG_2339.jpg"><img src="thumbs/IMG_2339.jpg" title="Chocolate" /></a></li> 
					<li><a href="slides/IMG_2446.jpg"><img src="thumbs/IMG_2446.jpg" title="Love birds" /></a></li> 
					<li><a href="slides/IMG_2623.jpg"><img src="thumbs/IMG_2623.jpg" title="Blue" /></a></li> 
					<li><a href="slides/IMG_5077.jpeg"><img src="thumbs/IMG_5077.jpeg" title="White" /></a></li> 
					<li><a href="slides/IMG_5177.jpeg"><img src="thumbs/IMG_5177.jpeg" title="Yellow on blue" /></a></li>			
					<li><a href="slides/IMG_5278.jpeg"><img src="thumbs/IMG_5278.jpeg" title="Heat" /></a></li> 
					<li><a href="slides/IMG_5324.jpeg"><img src="thumbs/IMG_5324.jpeg" title="Cold" /></a></li> 
					<li><a href="slides/IMG_5650.jpeg"><img src="thumbs/IMG_5650.jpeg" title="Homes" /></a></li> 
					<li><a href="slides/IMG_9006.jpg"><img src="thumbs/IMG_9006.jpg" title="Ace" /></a></li>-->
					<?php
			  		$i++;
					}
		  			?>
				</ul> 
				<div id="controls"></div> 
				<div class="clear"></div> 
			</div> 
			<div id="exposure"></div>			
			<div class="clear"></div> 
			<div id="slideshow"></div>		
		</div>
  </div>
</div>
<br/>
<br/>
<!-- ####################################################################################################### -->
 <?php include("includes/footer.php"); ?>