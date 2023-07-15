<?php global $redux_demo; ?>

		<!-- THE MAIN INTRO TEXT -->
						<?php if(!is_front_page()): ?>
						<article>
							<div class="divide20"></div>
							<div class="row">
								<div class="span8">
									<h1 class="bigintro txt-left leftfloat rm20 nobottommargin"><?php bloginfo('title'); ?></h1>
									<p class="leftfloat tm15 bm15 big"><?php bloginfo('description'); ?></p>
									<div class="clear"></div>
								</div>
								
								<?php if($redux_demo['wp-Serach'] == 1): ?>
									<div class="span4">
										<form role="search" method="get" id="searchform">
														<input type="text" id="Form_Search" class="searchinput" name="s" value="Search the site">
														<input type="submit" id="Form_Go" class="icon-search" name="go" value="">
														<i class="icon-search medium"></i>
														<div class="clear"></div>
										</form>									
									</div>
								<?php endif; ?>
							</div>

							<hr class="nobottommargin">
							<div class="divide2"></div>


							<!-- HORIZONTAL DIVIDER WITH ICON AND TEXT -->
							<div class="table bottomhr smartdivider">
								<div class="table-cell rp10">
										<p class="verysmall lh30"><strong>BLOG</strong></p>
								</div>
								<div class="table-cell">
										<?php while(have_posts()): the_post() ?>
										<p class="verysmall  lh30 coloredbottomhr nobreak"><?php the_title(); ?></p>
										<?php endwhile; ?>
								</div>

								<div class="table-cell fullwidth">
								</div>

								<div class="table-cell">
									<p class="verysmall  lh30 coloredbottomhr nobreak"><strong>BREADCRUMB</strong></p>
								</div>
							</div>

							<div class="divide10"></div>
						</article>
						
						<?php endif; ?>