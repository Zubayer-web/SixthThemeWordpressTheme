<?php 
/*
Template Name: Mata Box

*/


get_header(); ?>

						<!-- THE MAIN INTRO TEXT -->
				<?php get_template_part('template/header-tem'); ?>
			<!-- END OF CONTENT HEADER -->

			<!-- THE SIDEBAR HELPER ROW CONTAINER -->
			<div class="row">

				<!-- THE CONTENT PART WITH SIDEBAR -->
				<section class="span9 leftfloat withsidebar">
							<div class="divide30"></div>

						
						<?php while(have_posts()): the_post();   ?>

							<!-- A NEW BLOG POST ARTICLE -->
							<article class="blogpost">
										
									
									<section class="media-wrapper">
											<div class="mediaholder">
												<a href="#"><?php the_post_thumbnail(); ?></a>
												<div class="hovercover">
													<a href="#"><div class="linkicon notalone"><i class="icon-link-1 white"></i></div></a>
													<a href="#"><div class="lupeicon notalone"><i class="icon-search-1 white"></i></div></a>
												</div>
											</div>
									</section>

									<!-- BLOG CONTENT -->
									<div class="divide20"></div>
									<p class="small darkgray"><?php the_content(); ?> </p>
									
									<p><?php echo get_post_meta(get_the_id(),'_wp-text-name',true); ?> <span style="color:red;"><?php echo get_post_meta(get_the_id(),'_wp-text-smail',true); ?></span></p>	


                                           <img src="<?php  echo get_post_meta(get_the_id(),'_text_file',true) ?>" alt="" />										   
									

							</article> <!-- END OF BLOG POST ARTICLE -->
							<br />
							<br />
							<?php endwhile; ?>
							
						
							
							<div class="divide60"></div>
							<div class="divide30"></div>

				</section> <!-- END OF THE CONTENT PART -->
			<aside class="span3 graybg sidebar rightfloat">
			<?php get_sidebar(); ?>
			</aside>
			</div> <!-- END OF THE ROW CONTAINER -->

		</section><!-- END OF CONTAINER -->
	</section><!-- END OF CONTENT -->

	</section> <!-- END OF MAIN CONTENT HERE -->

<?php get_footer(); ?>