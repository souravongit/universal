
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Photo Gallery | Custom layout with external controls</title>
		<link rel="stylesheet" href="css/basic.css" type="text/css" />
		<link rel="stylesheet" href="css/galleriffic-5.css" type="text/css" />
		
		<!-- <link rel="stylesheet" href="css/white.css" type="text/css" /> -->
		<link rel="stylesheet" href="css/black.css" type="text/css" />
		
		<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="js/jquery.history.js"></script>
		<script type="text/javascript" src="js/jquery.galleriffic.js"></script>
		<script type="text/javascript" src="js/jquery.opacityrollover.js"></script>
		<!-- We only want the thunbnails to display when javascript is disabled -->
		<script type="text/javascript">
			document.write('<style>.noscript { display: none; }</style>');
		</script>
	</head>
	<body>
		<div id="page">
			<div id="container">
				<h1><a href="index.php">Photo Gallery</a></h1>
				

				<!-- Start Advanced Gallery Html Containers -->				
				<div class="navigation-container">
					<div id="thumbs" class="navigation">
						<a class="pageLink prev" style="visibility: hidden;" href="#" title="Previous Page"></a>
					
						<ul class="thumbs noscript">
								
							<li>
								<a class="thumb" name="drop" href="http://farm3.static.flickr.com/2404/2538171134_2f77bc00d9.jpg" title="Title #1">
									<img src="http://farm3.static.flickr.com/2404/2538171134_2f77bc00d9_s.jpg" alt="Title #1" />
								</a>
								
							</li>
	
	
							<li>
								<a class="thumb" name="lizard" href="http://farm4.static.flickr.com/3153/2538167690_c812461b7b.jpg" title="Title #2">
									<img src="http://farm4.static.flickr.com/3153/2538167690_c812461b7b_s.jpg" alt="Title #2" />
								</a>
								<div class="caption">
									<div class="image-title">Title #2</div>
									<div class="image-desc">Description</div>
									<div class="download">
										<a href="http://farm4.static.flickr.com/3153/2538167690_c812461b7b_b.jpg">Download Original</a>
									</div>
								</div>
							</li>
	
							
							<li>
								<a class="thumb" href="http://farm4.static.flickr.com/3204/2537348699_bfd38bd9fd.jpg" title="Title #3">
									<img src="http://farm4.static.flickr.com/3204/2537348699_bfd38bd9fd_s.jpg" alt="Title #3" />
								</a>
								<div class="caption">
									<div class="image-title">Title #3</div>
									<div class="image-desc">Description</div>
									<div class="download">
										<a href="http://farm4.static.flickr.com/3204/2537348699_bfd38bd9fd_b.jpg">Download Original</a>
									</div>
								</div>
							</li>
	
							
	
							<li>
								<a class="thumb" href="http://farm4.static.flickr.com/3205/2538164270_4369bbdd23.jpg" title="Title #4">
									<img src="http://farm4.static.flickr.com/3205/2538164270_4369bbdd23_s.jpg" alt="Title #4" />
								</a>
								<div class="caption">
									<div class="image-title">Title #4</div>
									<div class="image-desc">Description</div>
									<div class="download">
										<a href="http://farm4.static.flickr.com/3205/2538164270_c7d1646ecf_o.jpg">Download Original</a>
									</div>
								</div>
							</li>
	
							<li>
								<a class="thumb" href="http://farm4.static.flickr.com/3211/2538163540_c2026243d2.jpg" title="Title #5">
									<img src="http://farm4.static.flickr.com/3211/2538163540_c2026243d2_s.jpg" alt="Title #5" />
								</a>
								<div class="caption">
									<div class="image-title">Title #5</div>
									<div class="image-desc">Description</div>
									<div class="download">
										<a href="http://farm4.static.flickr.com/3211/2538163540_c2026243d2_b.jpg">Download Original</a>
									</div>
								</div>
							</li>
	
							
							<li>
								<a class="thumb" href="http://farm3.static.flickr.com/2167/2082738157_436d1eb280.jpg" title="Title #6">
									<img src="http://farm3.static.flickr.com/2167/2082738157_436d1eb280_s.jpg" alt="Title #6" />
								</a>
								<div class="caption">
									<div class="image-title">Title #6</div>
									<div class="image-desc">Description</div>
									<div class="download">
										<a href="http://farm3.static.flickr.com/2167/2082738157_436d1eb280_b.jpg">Download Original</a>
									</div>
								</div>
							</li>
	
							<li>
								<a class="thumb" href="http://farm3.static.flickr.com/2342/2083508720_fa906f685e.jpg" title="Title #7">
									<img src="http://farm3.static.flickr.com/2342/2083508720_fa906f685e_s.jpg" alt="Title #7" />
								</a>
								<div class="caption">
									<div class="image-title">Title #7</div>
									<div class="image-desc">Description</div>
									<div class="download">
										<a href="http://farm3.static.flickr.com/2342/2083508720_fa906f685e_b.jpg">Download Original</a>
									</div>
								</div>
							</li>
	
							<li>
								<a class="thumb" href="http://farm3.static.flickr.com/2132/2082721339_4b06f6abba.jpg" title="Title #8">
									<img src="http://farm3.static.flickr.com/2132/2082721339_4b06f6abba_s.jpg" alt="Title #8" />
								</a>
								<div class="caption">
									<div class="image-title">Title #8</div>
									<div class="image-desc">Description</div>
									<div class="download">
										<a href="http://farm3.static.flickr.com/2132/2082721339_4b06f6abba_b.jpg">Download Original</a>
									</div>
								</div>
							</li>
	
							<li>
								<a class="thumb" href="http://farm3.static.flickr.com/2139/2083503622_5b17f16a60.jpg" title="Title #9">
									<img src="http://farm3.static.flickr.com/2139/2083503622_5b17f16a60_s.jpg" alt="Title #9" />
								</a>
								<div class="caption">
									<div class="image-title">Title #9</div>
									<div class="image-desc">Description</div>
									<div class="download">
										<a href="http://farm3.static.flickr.com/2139/2083503622_5b17f16a60_b.jpg">Download Original</a>
									</div>
								</div>
							</li>
	
							<li>
								<a class="thumb" href="http://farm3.static.flickr.com/2041/2083498578_114e117aab.jpg" title="Title #10">
									<img src="http://farm3.static.flickr.com/2041/2083498578_114e117aab_s.jpg" alt="Title #10" />
								</a>
								<div class="caption">
									<div class="image-title">Title #10</div>
									<div class="image-desc">Description</div>
									<div class="download">
										<a href="http://farm3.static.flickr.com/2041/2083498578_114e117aab_b.jpg">Download Original</a>
									</div>
								</div>
							</li>
	
							<li>
								<a class="thumb" href="http://farm3.static.flickr.com/2149/2082705341_afcdda0663.jpg" title="Title #11">
									<img src="http://farm3.static.flickr.com/2149/2082705341_afcdda0663_s.jpg" alt="Title #11" />
								</a>
								<div class="caption">
									<div class="image-title">Title #11</div>
									<div class="image-desc">Description</div>
									<div class="download">
										<a href="http://farm3.static.flickr.com/2149/2082705341_afcdda0663_b.jpg">Download Original</a>
									</div>
								</div>
							</li>
	
						
	
							<li>
								<a class="thumb" href="http://farm4.static.flickr.com/3127/2538173236_b704e7622e.jpg" title="Title #12">
									<img src="http://farm4.static.flickr.com/3127/2538173236_b704e7622e_s.jpg" alt="Title #12" />
								</a>
								<div class="caption">
									<div class="image-title">Title #12</div>
									<div class="image-desc">Description</div>
									<div class="download">
										<a href="http://farm4.static.flickr.com/3127/2538173236_b704e7622e_b.jpg">Download Original</a>
									</div>
								</div>
							</li>
	
						
							<li>
								<a class="thumb" href="http://farm3.static.flickr.com/2353/2083476642_d00372b96f.jpg" title="Title #13">
									<img src="http://farm3.static.flickr.com/2353/2083476642_d00372b96f_s.jpg" alt="Title #13" />
								</a>
								<div class="caption">
									<div class="image-title">Title #13</div>
									<div class="image-desc">Description</div>
									<div class="download">
										<a href="http://farm3.static.flickr.com/2353/2083476642_d00372b96f_b.jpg">Download Original</a>
									</div>
								</div>
							</li>
	
						
						</ul>
						<a class="pageLink next" style="visibility: hidden;" href="#" title="Next Page"></a>
					</div>
				</div>
				<div class="content">
					<div class="slideshow-container">
						<div id="controls" class="controls"></div>
						<div id="loading" class="loader"></div>
						<div id="slideshow" class="slideshow"></div>
					</div>
					<div id="caption" class="caption-container">
						<div class="photo-index"></div>
					</div>
				</div>
				<!-- End Gallery Html Containers -->
				<div style="clear: both;"></div>
			</div>
		</div>
		
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				// We only want these styles applied when javascript is enabled
				$('div.content').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 0.67;
				$('#thumbs ul.thumbs li, div.navigation a.pageLink').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});
				
				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 10,
					preloadAhead:              10,
					enableTopPager:            false,
					enableBottomPager:         false,
					imageContainerSel:         '#slideshow',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          true,
					renderNavControls:         true,
					playLinkText:              'Play Slideshow',
					pauseLinkText:             'Pause Slideshow',
					prevLinkText:              '&lsaquo; Previous Photo',
					nextLinkText:              'Next Photo &rsaquo;',
					nextPageLinkText:          'Next &rsaquo;',
					prevPageLinkText:          '&lsaquo; Prev',
					enableHistory:             true,
					autoStart:                 false,
					syncTransitions:           true,
					defaultTransitionDuration: 900,
					onSlideChange:             function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);

						// Update the photo index display
						this.$captionContainer.find('div.photo-index')
							.html('Photo '+ (nextIndex+1) +' of '+ this.data.length);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						var prevPageLink = this.find('a.prev').css('visibility', 'hidden');
						var nextPageLink = this.find('a.next').css('visibility', 'hidden');
						
						// Show appropriate next / prev page links
						if (this.displayedPage > 0)
							prevPageLink.css('visibility', 'visible');

						var lastPage = this.getNumPages() - 1;
						if (this.displayedPage < lastPage)
							nextPageLink.css('visibility', 'visible');

						this.fadeTo('fast', 1.0);
					}
				});

				/**************** Event handlers for custom next / prev page links **********************/

				gallery.find('a.prev').click(function(e) {
					gallery.previousPage();
					e.preventDefault();
				});

				gallery.find('a.next').click(function(e) {
					gallery.nextPage();
					e.preventDefault();
				});

				/****************************************************************************************/

				/**** Functions to support integration of galleriffic with the jquery.history plugin ****/

				// PageLoad function
				// This function is called when:
				// 1. after calling $.historyInit();
				// 2. after calling $.historyLoad();
				// 3. after pushing "Go Back" button of a browser
				function pageload(hash) {
					// alert("pageload: " + hash);
					// hash doesn't contain the first # character.
					if(hash) {
						$.galleriffic.gotoImage(hash);
					} else {
						gallery.gotoIndex(0);
					}
				}

				// Initialize history plugin.
				// The callback is called at once by present location.hash. 
				$.historyInit(pageload, "advanced.html");

				// set onlick event for buttons using the jQuery 1.3 live method
				$("a[rel='history']").live('click', function(e) {
					if (e.button != 0) return true;

					var hash = this.href;
					hash = hash.replace(/^.*#/, '');

					// moves to a new page. 
					// pageload is called at once. 
					// hash don't contain "#", "?"
					$.historyLoad(hash);

					return false;
				});

				/****************************************************************************************/
			});
		</script>
	</body>
</html>
