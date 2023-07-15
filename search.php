<?php get_header(); ?>

					<?php get_template_part('template/header-tem'); ?>
			<!-- END OF CONTENT HEADER -->

			<!-- THE SIDEBAR HELPER ROW CONTAINER -->
			<div class="row">

				<!-- THE CONTENT PART WITH SIDEBAR -->
				<section class="span9 leftfloat withsidebar">
							<div class="divide30"></div>

						<?php if(have_posts()):?>
						<?php while(have_posts()): the_post();   ?>

							<!-- A NEW BLOG POST ARTICLE -->
							<article class="blogpost">
								<!-- TABLE VIEW FOR BLOG POST -->


									<h2 class="blog-title"><?php the_title(); ?></h2>
									<div class="divide5"></div> 
									<!-- BLOG ATTRIBUTES -->
										<div class="gray-boxed verysmall gray leftfloat rm5 bm5"><i class="icon-calendar small  rm10"></i><?php 
										the_time('M j, Y'); ?></div>
										<div class="gray-boxed verysmall gray leftfloat rm5 bm5"><i class="icon-user small  rm10"></i><?php the_author(); ?></div>
										<div class="gray-boxed verysmall gray leftfloat rm5 bm5"><i class="icon-comment small  rm10"></i><?php comments_popup_link('No Comment','1 Comment','% Comments','abir-class','Disable comment'); ?></div>
										<div class="gray-boxed verysmall gray leftfloat rm5 bm5"><i class="icon-tag small  rm10"></i><a href="#">PSD</a>,<a href="#">RESPONIVE</a>,<a href="#">WORDPRESS</a></div>
										<div class="clear"></div>
										<div class="divide10"></div>
									<!-- END OF BLOG ATTRIBUTES -->

									<div class="divide20"></div>

									<!-- BLOG MEDIA -->
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
									<p class="small darkgray"><?php echo wp_trim_words(get_the_content(), 100, '</p>
									<div class="divide20"></div>
									<a href="'.get_the_permalink().'" class="btn small maincolor witharrow">Read More</a>'); ?> 
									

							</article> <!-- END OF BLOG POST ARTICLE -->
							<br />
							<br />
							<?php endwhile; ?>
							<?php the_posts_pagination(array(
								'screen_reader_text' => 'age dek',
								'prev_text' 		 => '<a class="btn small gray withleftarrow"><span class="bold">Previous</span></a>',
							    'next_text'			 =>'<a class="btn small gray witharrow"><span class="bold">next</span></a>'
							
							
							)); ?>
							    <?php else: ?>
								<h2>OPPS! Search Resualt is not found</h2>
								
							<?php endif; ?>
						

							


							<div class="divide60"></div>
							<hr>
							<div class="divide10"></div>

							<div class="divide60"></div>




							<!-- HORIZONTAL DIVIDER WITH ICON AND TEXT -->
							<div class="table bottomhr smartdivider">
								<div class="table-cell rp10">
										<i class="icon-s-twitter small coloredbottomhr"></i>
								</div>

								<div class="table-cell fullwidth">
								</div>

								<div class="table-cell">
									<p class="verysmall  lh30 coloredbottomhr nobreak"><strong>TWITTER FEED</strong></p>
								</div>
							</div>

							<article class="twitter">
														<!-- TEASER NAVIGATION -->
														<div class="teaser-navigation">
															<div class="leftfloat"><div id="twitter_left_1"  class="tb-leftarrow navigation-left rm1"></div></div>
															<div class="rightfloat"><div id="twitter_right_1" class="tb-rightarrow navigation-right"></div></div>
														</div>
														<div class="clear"></div>
														<div class="divide30"></div>
														<div id="twitter" class="tweets" data-left="#twitter_left_1" data-right="#twitter_right_1"></div>
																<script>
																	jQuery(document).ready(function($){
																		getTwitters('twitter', {
																			id: 'themepunch',
																			count: 7,
																			enableLinks: true,
																			ignoreReplies: false,
																			template: '<div class="tweet"><div class="tweet-content"><p>%text%<p class="tweet-date">%time%</p></div></div>',
																			newwindow: true
																		});
																	});
																</script>
							</article>

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