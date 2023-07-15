<?php
/*
Template name: Full Width Template
*/
 get_header(); ?>
 
				
			<!-- END OF CONTENT HEADER -->

			<!-- THE SIDEBAR HELPER ROW CONTAINER -->
			<div class="row">

				<!-- THE CONTENT PART WITH SIDEBAR -->
				<section class="span12 withsidebar">
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
									

							</article> <!-- END OF BLOG POST ARTICLE -->
							<br />
							<br />
							<?php endwhile; ?>
							
						

							

							
							<div class="divide60"></div>
							<div class="divide30"></div>

				</section> <!-- END OF THE CONTENT PART -->
			
			</div> <!-- END OF THE ROW CONTAINER -->

		</section><!-- END OF CONTAINER -->
	</section><!-- END OF CONTENT -->

	</section> <!-- END OF MAIN CONTENT HERE -->

<?php get_footer(); ?>