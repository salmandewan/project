<?php
require_once("db.php");
?><!DOCTYPE html>

<html class="no-js">

<head>
	<title>Buying House</title>
	<meta charset="utf-8">
	
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

</head>

<body>

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">
			<i class="rt-icon2-cross2"></i>
		</span>
	</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="http://webdesign-finder.com/html/qtyler/">
				<div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button color1 no_bg_button">Search</button> </form>
		</div>
	</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->
		</div>
	</div>
	<!-- eof .modal -->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<!-- template sections -->
			<section class="page_topline ds background_cover">
				<div class="container-fluid">
					<div class="row flex-wrap v-center">
						<div class="col-xs-12 col-md-8 text-center text-md-left">
							<div class="inline-content big-spacing"> <span>
						<i class="qtyler-phone rightpadding_5"></i>
						01680696294
					</span> <span>
						<i class="qtyler-envelope rightpadding_5"></i>
						admin@example.com
					</span> <span>
						<i class="qtyler-map-marker rightpadding_5"></i>
						sector 10 uttara,Dhaka.
					</span> </div>
						</div>
						<div class="col-xs-12 col-md-4 text-center text-md-right ">
						
							<div class="dropdown search-dropdown"> <a id="search" data-target="#" href="index.php" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false" class="theme_button small_button round_button bg_button margin_0">
						<i class="qtyler-search" aria-hidden="true"></i>
					</a>
								<div class="dropdown-menu ls" role="menu" aria-labelledby="search">
									<div class="widget_search">
										<form method="get" class="searchform form-inline" action="http://webdesign-finder.com/html/qtyler/">
											<div class="form-group-wrap">
												<div class="form-group with_button margin_0"> <label class="sr-only" for="topline-search">Search for:</label> <input id="topline-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword"> <button type="submit" class="theme_button">Search</button> </div>
											</div>
										</form>
									</div> <i class="qtyler-close dropdown-close" aria-hidden="true"></i> </div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<header class="page_header header_white header_v1 toggler_xxs_right">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 display-flex v-center">
							<div class="header_left_logo"> <a href="index.php" class="logo">
                        <img src="images/logo.png" alt="">
                    </a> </div>
							<div class="header_mainmenu text-center">
								<!-- main nav start -->
								<nav class="mainmenu_wrapper">
									<ul class="mainmenu nav sf-menu">
										<li class="active"> <a href="index.php">Home</a>
										</li>
										<li> <a href="services.php">Services</a>
										</li>
										<li> <a href="gallery-regular-3-cols.php">Gallery</a>		
										</li>
										
										<li> <a href="about.php">About</a>
										<!-- contacts -->
										<li> <a href="contact.php">Contact</a>
										</li>
										<!-- eof contacts -->
									</ul>
								</nav>
								<!-- eof main nav -->
								<!-- header toggler --><span class="toggle_menu"><span></span></span>
							</div>
							<div class="header_right_buttons text-right">
								<ul class="inline-dropdown inline-block">
								
                            </a>
										<div class="dropdown-menu" aria-labelledby="cart">
											<div class="widget widget_shopping_cart">
												<div class="widget_shopping_cart_content">
													<ul class="cart_list product_list_widget">
														<li class="media">
															<div class="media-left media-middle"> <a href="shop-product.php">
								<img src="images/shop/03.jpg" alt="">
							</a> </div>
															<div class="media-body media-middle"> <a href="#" class="remove" title="Remove this item"></a>
																<p class="darklinks"> <a href="shop-product.php">Heather grey pullover</a> </p> <span class="product-quantity">
								<span class="price">$29.95</span> <span>x 1</span> </span>
															</div>
														</li>
														<li class="media">
															<div class="media-left media-middle"> <a href="shop-product.php">
								<img src="images/shop/05.jpg" alt="">
							</a> </div>
															<div class="media-body media-middle"> <a href="#" class="remove" title="Remove this item"></a>
																<p class="darklinks"> <a href="shop-product.php">Slim short dress</a> </p> <span class="product-quantity">
								<span class="price">$34.95</span> <span>x 2</span> </span>
															</div>
														</li>
													</ul>
													<p class="total grey"> <span>Subtotal:</span> <span class="price">$69.94</span> </p>
													<p class="buttons"> <a href="shop-cart.php" class="theme_button">View cart</a> <a href="shop-cart.php" class="theme_button color1">Checkout</a> </p>
												</div>
											</div>
										</div>
									</li>
									<li class="dropdown social-dropdown"> <a id="social" data-target="#" href="index.php" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false" class="theme_button small_button round_button bg_button margin_0">
                                <i class="qtyler-share" aria-hidden="true"></i>
                            </a>
										<div class="dropdown-menu"> <a class="social-icon socicon-facebook dark-icon" href="#" title="Facebook"></a> <a class="social-icon socicon-googleplus dark-icon" href="#" title="Google Plus"></a> <a class="social-icon socicon-linkedin dark-icon" href="#" title="Linkedin"></a>											<a class="social-icon socicon-twitter dark-icon" href="#" title="Twitter"></a> <a class="social-icon socicon-instagram dark-icon" href="#" title="Instagram"></a> </div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</header>
			<section class="page_breadcrumbs ls background_cover section_padding_50">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1 class="sr-only">Services</h1>
							<ol class="breadcrumb darklinks">
								<li> <a href="index.php">
							Home
						</a> </li>
								<li> <a href="#">Pages</a> </li>
								<li class="active"> <span>Services</span> </li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_150 section_padding_bottom_150">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">

							<?php

							$result=mysqli_query($conn,'SELECT * FROM services order by id ASC') or die(mysqli_error($conn));

                            while( $result_indiv=$result->fetch_assoc() ){

                            	

							?>

								<div class="isotope-item col-xs-12 col-sm-6">
									<article class="vertical-item service-item content-padding big-padding with_shadow text-center">
										<div class="item-media-wrap">
											<div class="item-media"> <img src="uploads/services/<?php  echo $result_indiv['service_image']; ?>" alt=""> <a href="service-single.php?id=<?php  echo $result_indiv['id']; ?>" class="abs-link"></a> </div>
										</div>
										<div class="item-content">
											<h3 class="entry-title"> <a href="service-single.php"><?php echo $result_indiv['service_name'];  ?></a> </h3>
											<div class="entry-content">
												<p>
													<?php 
														$str_full = $result_indiv['service_desc'];
														$str = $str_full;
														if( strlen( $str_full) > 150) {
    														
    														$str = explode( "\n", wordwrap( 
    															$str_full, 150));
    														$str = $str[0] . '...';
															
															}

															echo $str;
 														?>
 															
 												</p>
											</div>
										</div>
									</article>
								</div>

								<?php

								


                            		}//end of while loop

								?>



							
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="gallery" class="ls fluid_padding_0 columns_padding_0">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<div class="owl-carousel gallery-carousel framed" data-responsive-xlg="6" data-responsive-lg="5" data-responsive-md="4" data-responsive-sm="3" data-responsive-xs="3" data-responsive-xxs="2" data-loop="true" data-margin="0" data-nav="true">
								<div class="vertical-item">
									<div class="item-media"> <img src="images/gallery-square/01.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/01.jpg">
							</a> </div>
								</div>
								<div class="vertical-item">
									<div class="item-media"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/02.jpg">
								<img src="images/gallery-square/02.jpg" alt="">
							</a> </div>
								</div>
								<div class="vertical-item">
									<div class="item-media"> <img src="images/gallery-square/03.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/03.jpg">
							</a> </div>
								</div>
								<div class="vertical-item">
									<div class="item-media"> <img src="images/gallery-square/04.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/04.jpg">
							</a> </div>
								</div>
								<div class="vertical-item">
									<div class="item-media"> <img src="images/gallery-square/05.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/05.jpg">
							</a> </div>
								</div>
								<div class="vertical-item">
									<div class="item-media"> <img src="images/gallery-square/06.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/06.jpg">
							</a> </div>
								</div>
								<div class="vertical-item">
									<div class="item-media"> <img src="images/gallery-square/07.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/07.jpg">
							</a> </div>
								</div>
								<div class="vertical-item">
									<div class="item-media"> <img src="images/gallery-square/08.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/08.jpg">
							</a> </div>
								</div>
								<div class="vertical-item">
									<div class="item-media"> <img src="images/gallery-square/09.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/09.jpg">
							</a> </div>
								</div>
								<div class="vertical-item">
									<div class="item-media"> <img src="images/gallery-square/10.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/10.jpg">
							</a> </div>
								</div>
								<div class="vertical-item">
									<div class="item-media"> <img src="images/gallery-square/11.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/11.jpg">
							</a> </div>
								</div>
								<div class="vertical-item">
									<div class="item-media"> <img src="images/gallery-square/12.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/12.jpg">
							</a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- <section id="footer-fullwidth" class="ls columns_margin_0 fluid_padding_0 columns_padding_0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div class="widget widget_instagram">
					<div class="instafeed">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
 -->
			<footer class="page_footer ls section_padding_top_150 section_padding_bottom_140 columns_margin_bottom_30">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-4 text-center text-md-left">
							<div class="widget widget_text">
								<div class="logo"> <img src="images/logo.png" alt=""> </div>
								<ul class="list-unstyled greylinks">
									<li>
										<div class="media small-media">
											<div class="media-left"> <i class="qtyler-phone"></i> </div>
											<div class="media-body"> 01680696294 </div>
										</div>
									</li>
									<li>
										<div class="media small-media">
											<div class="media-left"> <i class="qtyler-envelope"></i> </div>
											<div class="media-body"> <a href="mailto:#">admin@example.com</a> </div>
										</div>
									</li>
									<li>
										<div class="media small-media">
											<div class="media-left"> <i class="qtyler-map-marker"></i> </div>
											<div class="media-body"> sector 10 uttara,Dhaka. </div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 text-center text-md-left">
							<div class="widget widget_text">
								<h3 class="widget-title">Hours</h3>
								<ul class="feature-list">
									<li> <span>Wednesday</span> <span>8:00 - 20:00</span> </li>
									<li> <span>Saturday</span> <span>9:00 - 16:00</span> </li>
									<li> <span>Sunday</span> <span>Closed</span> </li>
									<li> <span>Monday</span> <span>10:00 - 14:00</span> </li>
								</ul>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 text-center text-md-left">
							<div class="widget widget_text">
								<h3 class="widget-title">Details</h3>
								<ul class="list-unstyled greylinks">
									<li>
										<div class="media small-media">
											<div class="media-left"> <i class="qtyler-delivery"></i> </div>
											<div class="media-body"> Worldwide 100% Free Shipping </div>
										</div>
									</li>
									<li>
										<div class="media small-media">
											<div class="media-left"> <i class="qtyler-headphones"></i> </div>
											<div class="media-body"> Fast and Excellent Customer Support </div>
										</div>
									</li>
									<li>
										<div class="media small-media">
											<div class="media-left"> <i class="qtyler-money"></i> </div>
											<div class="media-body"> 100% Moneyback Guarantee </div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<section class="page_copyright ds background_cover section_padding_top_10 section_padding_bottom_10">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center"> &copy; Copyright 2020 All Rights Reserved </div>
					</div>
				</div>
			</section>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/selectize.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>
</body>


<!-- Mirrored from webdesign-finder.com/html/qtyler/services.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Feb 2020 15:21:25 GMT -->
</html>