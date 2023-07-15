<?php global $redux_demo; ?>
<footer>
			<section class="footer" style="background-color: <?php echo $redux_demo['color-Footer']; ?>">
				<!-- A SPECIAL FOOTER FOR 4 - 8 SPAN LEFT SIDE !! -->
				<div class="container">
					<div class="row">



                      <?php dynamic_sidebar('footer-sidebar'); ?>
					  
						<!-- SIMPLE ABOUT TEXT BLOCK 
						<article class="span3">
							<img src="<?php echo get_template_directory_uri(); ?>/images/content/logowhite.png" alt="">
							<div class="divide30"></div>
							<p>Emperor, absorbed his office in his own.  The Carnatic anchored at the quay near the custom-house, in the midst of a crowd of ships bearing the flags of all nations. Passepartout went timidly ashore on this so curious</p>
						</article>

						<!-- ADDRESS BLOCK WIDGET
						<article class="span3">
							<h3 class="widget-title nobottommargin">GET IN TOUCH</h3>
							<div class="divide30"></div>
							<div class="table nobottommargin">
								<div class="table-cell top"><i class="icon-location-1 small white"></i></div>
								<div class="table-cell">
									<h3 class="widget-title">ADDRESS</h3>
									<p class="small italic">2388 Pickens Way</p>
									<p class="small italic">Sherman, TX 75090</p>
								</div>
							</div>

							<div class="divide25"></div>
							<div class="table">
								<div class="table-cell top"><i class="icon-mobile small white"></i></div>
								<div class="table-cell">
									<h3 class="widget-title">PHONE</h3>
									<p class="small italic">903-421-8936</p>
								</div>
							</div>

						</article><!-- END OF ADDRESS BLOCK WIDGET 

						<!-- THE RECENT POSTS WIDGET 
						<article class="span3">
							<h3 class="widget-title nobottommargin"><a href="#">RECENT POSTS</a></h3>
							<div class="divide30"></div>

							<!-- A RECENT POSTS 
							<section class="recent-posts-wrapper">

								<!-- A RECENT POST 
								<div class="recent-post">
									<h4 class="recent-post-title nobottommargin"><a href="#"><strong>Praesent adipiscing nisl ac nisl hendrer pellentesque. Pellentesque pulvinar</strong></a></h4>
									<div class="divide5"></div>
									<span class="small italic postdate">1st July, 2012</span><span class="lm20 small italic postcomment"><a href="#">23 comments</a></span>
								</div><!-- END OF RECENT POST 

								<div class="divide30"></div>

								<!-- A RECENT POST
								<div class="recent-post">
									<h4 class="recent-post-title nobottommargin"><a href="#"><strong>Praesent adipiscing nisl ac nisl hendrer pellentesque. Pellentesque pulvinar</strong></a></h4>
									<div class="divide5"></div>
									<span class="small italic postdate">1st July, 2012</span><span class="lm20 small italic postcomment"><a href="#">23 comments</a></span>
								</div><!-- END OF RECENT POST -->


							<!--</section> END OF RECENT POSTS WRAPPER 



						</article> END OF RECENT POSTS FOOTER WIDGET

						<article class="span3">
							<h3 class="widget-title nobottommargin"><a href="#">FLICKR</a></h3>
							<div class="divide35"></div>
							<ul class="flickr feed"></ul>
												<script>
													jQuery(document).ready(function($){
														jQuery('.flickr.feed').dcFlickr({
															limit: 9,
													        q: {
													            id: '26979613@N00',
																lang: 'en-us',
																format: 'json',
																jsoncallback: '?'
													        },
															onLoad: function(){
																jQuery('.feed .frame img').wrap('<div class="mediaholder"></div>');
																jQuery('.feed .frame .mediaholder').append('<div class="hovercover"><div class="lupeicon"><i class="icon-search-1 white"></i></div></div>');




															}
														});
													});
												</script>
						</article>-->
					</div>
				</div>
			</section>


			<section class="subfooter">
				<div class="container">
					<div class="one_third">
						<p class="small"><?php echo $redux_demo['copy-lext']; ?></p>
					</div>

					<div class="one_third">
						<p class="small"><?php echo $redux_demo['Privacy-lext']; ?></p>
					</div>

					<div class="one_third lastcolumn">
						<div class="rightfloat">
								<!-- SOCIALS -->
								<?php if($redux_demo['wp-shitch'] == 1): ?>
								
								<ul class="socials fadegroup">
								
								         <?php if($redux_demo['Social-link']['facebook']): ?>
											<li class="reversefadeitem">
													<a href="<?php echo $redux_demo['Social-link']['facebook']; ?>">
														<div class="soc facebook">
															<div class="bg"></div>
														</div>
													</a>
											</li>											
											<?php endif; ?>
											
											<?php if($redux_demo['Social-link']['whatsapp']): ?>
											<li class="reversefadeitem">
													<a href="<?php echo $redux_demo['Social-link']['whatsapp']; ?>">
														<div class="soc twitter">
															<div class="bg"></div>
														</div>
													</a>
											</li>
											<?php endif; ?>
											<?php if($redux_demo['Social-link']['youtube']): ?>
											<li class="reversefadeitem">
													<a href="<?php echo $redux_demo['Social-link']['youtube']; ?>">
														<div class="soc skype">
															<div class="bg"></div>
														</div>
													</a>
											</li>
											<?php endif; ?>
											<?php if($redux_demo['Social-link']['messenger']): ?>
											<li class="reversefadeitem">
													<a href="<?php echo $redux_demo['Social-link']['messenger']; ?>">
														<div class="soc dribbble">
															<div class="bg"></div>
														</div>
													</a>
											</li>
											<?php endif; ?>
											<?php if($redux_demo['Social-link']['instagram']): ?>
											<li class="reversefadeitem">
													<a href="<?php echo $redux_demo['Social-link']['instagram']; ?>">
														<div class="soc flickr">
															<div class="bg"></div>
														</div>
													</a>
											</li>
											<?php endif; ?>
											<?php if($redux_demo['Social-link']['twitter']): ?>
											<li class="reversefadeitem">
													<a href="<?php echo $redux_demo['Social-link']['twitter']; ?>">
														<div class="soc flickr">
															<div class="bg"></div>
														</div>
													</a>
											</li>
											<?php endif; ?>
											<?php if($redux_demo['Social-link']['linkedIn']): ?>
											<li class="reversefadeitem">
													<a href="<?php echo $redux_demo['Social-link']['linkedIn']; ?>">
														<div class="soc flickr">
															<div class="bg"></div>
														</div>
													</a>
											</li>
											<?php endif; ?>
								  </ul><!-- END OF SOCIALS -->
								  <?php endif; ?>
							</div>
					</div>
					<div class="clear"></div>
				</div>
			</section>

		</footer>
	</section><!-- THE END OF THE BOXED WRAPPER -->

<?php wp_footer(); ?>
  </body>
</html>