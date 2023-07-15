<?php
/*
Template Name: Portfolio Page
*/


 get_header(); ?>
			<!-- THE CONTENT HEADER -->
     <?php get_template_part('template/header-tem'); ?>
			<!-- END OF CONTENT HEADER -->


			<div class="divide30"></div>

			<!-- THE PORTFOLIO INTRO WITH SOME CONTENT AT THE TOP -->
    <?php while(have_posts()): the_post(); ?>
			<div class="one_third">
				<h2 class="article-title"><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
				<div class="divide20"></div>				
			</div>
    <?php endwhile; ?>
			<div class="two_third lastcolumn">
				<!-- THE FEATURED ARTICLE SLIDER -->
								<article class="featured-article-horslider">

										<div id="myCarousel" class="carousel slide">

											<!-- THE INDICATORS (BULLETS) -->



											  <!-- Carousel items -->
											  <div class="carousel-inner">
											  <?php
												$imagespost = new WP_Query(array(
												   'post_type' => 'sixth-portfolio',
												   'post_par_page' => -1,
												));



											  while($imagespost -> have_posts()): $imagespost -> the_post(); ?>
												    <div class="item">
												    	<div class="mediaholder">
												    		<div class="maxheight-wrapper">
																<?php the_post_thumbnail(); ?>
												    		</div>

														</div>
														<div class="detailholder gray-boxed">
															<h4 class="showbiz-title txt-left nobottommargin"><a href="#" class="black"><?php the_title(); ?></a></h4>
															<div class="divide5"></div>
															<p class="txt-left"><?php $catgoryitms = get_the_terms(get_the_id(),'portfilio-cat');

																foreach($catgoryitms as $cat){
																  
																	echo $cat->name.' ';
																	
																	
																}

															?> </p>
														</div>
												    </div>
												  <?php endwhile; ?>  
											   </div>


											  <!-- Carousel nav (IN CASE IT NEEDED, REMOVE COMMENTS BELOW)  -->
											  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
											  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
									</div>

								</article>
			</div>
			<div class="clear"></div><!-- END OF THE PORTFOLIO INTRO -->


			<!-- THE PORTFOLIO GRID ITSELF -->

			<div class="divide20"></div>

			<!-- HORIZONTAL DIVIDER WITH ICON AND TEXT -->
			<div class="table bottomhr smartdivider">
				<div class="table-cell rp10">
						<i class="icon-cog small coloredbottomhr"></i>
				</div>

				<div class="table-cell fullwidth txt-center portfolio_selector_boss">
						<!-- <a class="portfolio_selector  cat1-group" data-group="cat1-group" href="#"><i class="icon-video small rm10 portfolio_selector_inner"></i></a>
						<a class="portfolio_selector  cat1-group" data-group="cat2-group" href="#"><i class="icon-picture-1 small rm10 portfolio_selector_inner"></i></a>
						<a class="portfolio_selector  cat1-group" data-group="cat3-group" href="#"><i class="icon-folder small rm10 portfolio_selector_inner"></i></a>
						<a class="portfolio_selector  cat1-group" data-group="cat4-group" href="#"><i class="icon-monitor small rm10 portfolio_selector_inner"></i></a> -->
						<a class="portfolio_selector " data-group="all-group" href="#"><span class="verysmall  nobreak lightgray portfolio_selector_inner"><strong>ALL</strong></span></a>
						
						<?php $catagory = get_terms('portfilio-cat'); 
						
						foreach($catagory as $ccc): ?>
						
						<a class="portfolio_selector  cat1-group" data-group="<?php echo $ccc->slug; ?>" href="#"><span class="verysmall  nobreak lightgray portfolio_selector_inner"><strong><?php echo $ccc->name; ?></strong></span></a>
						
						<?php endforeach; ?>

				</div>

				<div class="table-cell">
					<p class="verysmall  lh30 coloredbottomhr nobreak"><strong>OUR WORK</strong></p>
				</div>
			</div><!-- END OF SMART DIVIDER -->


			<!-- THE PORTFOLIO -->
			<div class="divide30"></div>
					<!--	THE PORTFOLIO ENTRIES	-->
							<section class="row portfolio portfolio_rotator hoverable teaser_rotator">
									<ul>
									
									<?php

									$blogpost = new WP_Query(array(
									'post_type'   => 'sixth-portfolio'
									));




									while($blogpost -> have_posts()): $blogpost -> the_post(); ?>
										<li class="span3 theportfolio all-group <?php $catgoryitms = get_the_terms(get_the_id(),'portfilio-cat');

																foreach($catgoryitms as $cat){
																  
																	echo $cat->slug.' ';
																}

															?> ">

														<section class="media-wrapper">
																<div class="mediaholder">
																	<a href="#"><img alt="" src="<?php the_post_thumbnail(); ?>"></a>
																	<div class="hovercover">
																		<a href="#"><div class="linkicon notalone"><i class="icon-link-1 white"></i></div></a>
																		<a href="#"><div class="lupeicon notalone"><i class="icon-search-1 white"></i></div></a>
																	</div>
																</div>
														</section>

														<div class="detailholder gray-boxed">
															<h4 class="showbiz-title txt-left nobottommargin"><a href="#" class="black"><?php the_title(); ?></a></h4>
															<div class="divide5"></div>
															<p class="txt-left"><?php $catgoryitms = get_the_terms(get_the_id(),'portfilio-cat');

																foreach($catgoryitms as $cat){
																  
																	echo $cat->name.' ';
																	
																	
																}

															?> </p>
														</div>
										</li>
								<?php endwhile; ?>

									</ul>
									<div class="clear"></div>
							</section>
							<div class="clear"></div>
					<!-- END OF THE PORTFOLIO -->
				<div class="divide30"></div>
		</section><!-- END OF CONTAINER -->
	</section><!-- END OF CONTENT -->



	</section> <!-- END OF MAIN CONTENT HERE -->

		<?php get_footer(); ?>