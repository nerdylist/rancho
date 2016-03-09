<?php
/*
These variables should be unique to each page.
*/

/*###############################*/


$pageName=		"homepage";

$titleTag=			"Rancho La Habra | CalAtlantic Homes";

$keywords=		"keyword, list, in, here";

$description=		"Curabitur blandit tempus porttitor.";


/*###############################*/

include('inc/init.php');

?>

<!DOCTYPE HTML>
<html>

<head>
<meta charset="UTF-8">
<meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php echo $titleTag; ?></title>
<?php include('inc/attachments.php'); ?>

<link type="text/css" rel="stylesheet" href="<?php echo $webRoot; ?>css/medQueries.css" />

<script type="text/javascript" src="<?php echo $webRoot; ?>js/jQueryv2.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo $webRoot; ?>js/slippry.min.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo $webRoot; ?>css/slippry.css" />

<style type="text/css">

.sy-pager 
{
margin: -1.5em 0 0 0;
}

.sy-pager li 
{
width: 0.75em;
height: 0.75em;
}

.sy-pager li.sy-active a
 {
background-color: #fdb404; 
}

.sy-pager li a 
{
background-color: #718b51;
}
</style>

</head>

<body class="<?php echo $pageName; ?>">

<div id="wrapper">

					<?php include('inc/logobannerNav.php'); ?>
					
				
				<!-- ###### -->
				
				
		<div id="contentContainer">
		
		
<!-- *** Slider Section *** --><section id="slider">
				
															<article><a href="<?php echo $webRoot; ?>benefits#openSpace">
																	
																	<div class="text-content">
																			
																		<h2 class="parksHeader">Parks</h2>
																					
																			<div class="capWrapper">
																				<ul>
																					<li>	<h3>How can La Habra families get great new parks to enjoy?</h3></li>	
																						<li>
																							<p><span>La Habra currently falls short</span> of its General Plan goal for public park space. By providing 
																							approximately 43 acres of public parks, Rancho La Habra will help the City meet, and exceed, its parks goal</p>
																						</li>
																					</ul>
																			</div>
																		
																	</div>
																				
																				<div class="image-content"><img src="i/home/fpos/slide1.jpg" alt="Conservation"></div>
																	</a>
														</article>
														
														
														<article><a href="<?php echo $webRoot; ?>benefits#openSpace">
														
																	<div class="text-content">
																			
																		<h2 class="trailsHeader">Trails</h2>
																					
																			<div class="capWrapper">
																				<ul>
																					<li>	<h3>Where can La Habra’s nature lovers go to hike or bike miles of new trails?</h3></li>	
																						<li>
																							<p><span>Rancho La Habra’s proposed 2.6 miles</span> of new public trails will offer an exhilarating way to exercise 
																							while enjoying the outdoors, with beautiful vistas, connections to new parks and interconnections with regional trails.</p>
																						</li>
																					</ul>
																			</div>
																		
																	</div>
																				
																				<div class="image-content"><img src="i/home/fpos/slide2.jpg" alt="Conservation"></div>
																		</a>
														</article>
														
														
														<article><a href="<?php echo $webRoot; ?>benefits#waterSavings">
														
																	<div class="text-content">
																			
																		<h2 class="conservationHeader">Conservation</h2>
																					
																			<div class="capWrapper">
																				<ul>
																					<li>	<h3>How can La Habra protect and conserve precious water resources?</h3></li>	
																						<li>
																							<p><span>Replacing a the thirsty Westridge Golf Club</span> with water-efficient new homes should save approximately 33 
																							million gallons of drinking water every year.</p>
																						</li>
																					</ul>
																			</div>
																		
																	</div>
																				
																				<div class="image-content"><img src="i/home/fpos/slide3.jpg" alt="Conservation"></div>
																	</a>
																		
														</article>
														
														
														<article><a href="<?php echo $webRoot; ?>benefits#financialBenefits">
														
																	<div class="text-content">
																			
																		<h2 class="benefitsHeader">Fiscal Benefits</h2>
																					
																			<div class="capWrapper">
																				<ul>
																					<li>	<h3>What can La Habra do to improve the City’s financial condition</h3></li>	
																						<li>
																							<p><span>A recent economic analysis estimated</span> that revenues generated by Rancho La Habra’s new homes 
																							will offset new City expenses by than $380,000 a year.</p>
																						</li>
																					</ul>
																			</div>
																		
																	</div>
																				
																				<div class="image-content"><img src="i/home/fpos/slide4.jpg" alt="Conservation"></div>
																				
																		</a>
														</article>
														
														
														<article><a href="<?php echo $webRoot; ?>vision#newNeighborhood">
														
																	<div class="text-content">
																			
																		<h2 class="homesHeader">New Homes</h2>
																					
																			<div class="capWrapper">
																				<ul>
																					<li>	<h3>Where can homebuyers find new homes in La Habra with the latest designs and features?</h3></li>	
																						<li>
																							<p><span>Choose from 275 proposed</span> single-family and 145 proposed multi-family residences to 
																							find a great new home while staying in La Habra, the town you call home.</p>
																						</li>
																					</ul>
																			</div>
																		
																	</div>
																				
																				<div class="image-content"><img src="i/home/fpos/slide5.jpg" alt="Conservation"></div>
																		</a>
														</article>
														
																												
										</section> <!-- end slider -->
				
				
				
					<section id="featured">
							
							<ul>
								<li id="learn"><a href="<?php echo $webRoot; ?>vision/"><h3>Learn More</h3></a></li>
								<li id="support"><a href="<?php echo $webRoot; ?>contact/"><h3>Show Your Support </h3></a></li>
								<li id="facts" class="bottomRow"><a href="<?php echo $webRoot; ?>facts/"><h3>Get the Facts</h3></a></li>
								<li id="public" class="bottomRow"><a href="<?php echo $webRoot; ?>public-process/"><h3>Public Process</h3></a></li>
								<li id="benefits" class="bottomRow"><a href="<?php echo $webRoot; ?>benefits/"><h3>Benefits For La Habra</h3></a></li>
							</ul>
							
							
									<aside>
										
											<h1>Rancho La Habra News</h1>
										
													<div id="blogheadlines">
													
														<p><span>May 18, 2016</span><br />
															<a href="#">Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis.</a></p>
									
															<p><span>May 18, 2016</span>
																<a href="#">Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</a></p>
														
														<p><span>May 18, 2016</span><br />
													<a href="#">Maecenas sed diam eget risus varius blandit sit amet non magna velit aliquet.</a></p>
													
												</div>
												
												<a href="#" id="newsbutton">More News &rsaquo;</a>
										
									</aside>
									
									<div class="clear"></div>
							
					</section>
					
					<!-- ###### -->
		
		
						<?php include('inc/footer.php'); ?>
					
		</div><!-- end CContainer -->
		
				<?php include('inc/copyright.php'); ?>

</div><!-- end wrapper -->


<script>
	jQuery('#slider').slippry({
  // general elements & wrapper
  slippryWrapper: '<div class="sy-box news-slider" />', // wrapper to wrap everything, including pager
  elements: 'article', // elments cointaining slide content

  // options
  adaptiveHeight: true, // height of the sliders adapts to current 
  captions: false,

start: 1,
  // pager
  //pagerClass: 'news-pager',
  
  controls: false,
  
  responsive: true,

  // transitions
  transition: 'fade', // fade, horizontal, kenburns, false
  speed: 1200,
  pause: 4000,

  // slideshow
//  autoDirection: 'prev'
});
	
</script>

</body>
</html>