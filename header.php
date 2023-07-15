<!DOCTYPE html>
<html <?php language_attributes(); global $redux_demo;  ?>>
  <head>

    <title><?php bloginfo('the_title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--meta http-equiv="X-UA-Compatible" content="IE=edge" /-->

    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo $redux_demo['fav-upload']['url']; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

	<!-- LOAD THE GOOGLE FONT -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,800,900,400italic' rel='stylesheet' type='text/css'>

  <?php wp_head(); ?>
  </head>
  
  
  <!-- <?php 
  menu all items on php
              wp_nav_menu(array(
                  'theme_location'=>'header_menu',
                  'menu'=>'',
                  'container'=>'nav',
                  'container_class'=>'',
                  'container_id'=>'mainav',
                  'container_aria_label'=>'',
                  'menu_class'=>'',
                  'menu_id'=>'',
                  'echo'=>true,
                  'fallback_cb' 	=>'defoltmenu',
                  'before'=>'',
                  'after'=>'',
                  'link_before'=>'',
                  'link_after'=>'',
                  'items_wrap'=>'',
                  'items_spacing'=>'',
                  'depth'=>0,
                  'walker'=>'',   
              ));

            
            ?>-->


<!-- ADD class="boxedlayout" IN CASE THE SITE SHOULD BE BOXED -->
  <body class="boxedlayout border-custom">
  
  <style type="text/css">
  <?php echo $redux_demo['custom-css']; ?>
  </style>
										
	  	<!-- THE RESPONSIVE MENU ON THE TOP -->
		<div class="responsive_wrapper">
			<div id="responsive-menu">
				<div class="resp-closer"><i class="txt-center icon-cancel-1 white medium lm10 tm10"></i></div>
				<div class="resp-menuheader">Sixth</div>
				<ul>
				</ul>
			</div>
		</div>

	<!-- THIS IS THE WRAPPER FOR THE FULL TEMPLAGE -->
	<section class="boxed-wrapper">

		<!-- THE STICKY MENU AT THE TOP  -->
		<header class="header top-custom">

			<!-- THE HEADER WRAP -->
			<section class="header_wrapper">
				<div class="container">
					<div class="row">
							<!-- THE LOGO HOLDER -->
							<div class="span2">
								<div class="logoholder">
									<a href="<?php echo home_url(); ?>">
									
									<?php if($redux_demo['logo-upload']['url']): ?>
									
									<img src="<?php echo $redux_demo['logo-upload']['url']; ?>" alt="" />
									
									<?php else: ?>
									
									<h2><?php echo $redux_demo['logo-lext']; ?></h2>
									
						           <?php endif; ?>
									
									
									</a>
								</div>
							</div>
							<!-- END OF LOGO HOLDER -->

							<!-- THE NAVIGATION HOLDER -->
							<div class="span10">
								<div id="nav" class="hidden-phone">
								
							    <?php wp_nav_menu(array(
								  'theme_location'  =>'main-menu',
								  'container' 		=>false,
								  'fallback_cb' 	=>'defoltmenu',
								
								)); ?>
								 
								
								
								<div class="clear"></div>

								</div><!-- END OF THE #NAV CONTAINER -->

								<div class="resp-navigator reversefadeitem"><i class="icon-menu medium gray"></i></div>
							</div><!-- END OF NAVIGTION HOLDER -->
						</div> <!-- END OF ROW -->
				</div> <!-- END OF CONTAINER -->
			</section> <!-- END OF HEADER WRAPPER  -->

		</header>


		<!-- THE CONTENT -->
		<section class="maincontent">






	<!-- THE CONTENT -->
	<section>
		<section class="container">

			<!-- THE CONTENT HEADER -->
