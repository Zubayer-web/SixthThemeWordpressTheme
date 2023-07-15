<?php get_header(); ?>

						<!-- THE MAIN INTRO TEXT -->
						<?php get_template_part('template/header-tem'); ?>
			<!-- END OF CONTENT HEADER -->

			<!-- THE SIDEBAR HELPER ROW CONTAINER -->
			<div class="row">

				<!-- THE CONTENT PART WITH SIDEBAR -->
				<section class="span9 leftfloat withsidebar">
							<div class="divide30"></div>

						<h1>OPPS! 404 Page Is Not found.</h1>
						<h3>please Go To <a href="<?php echo home_url(); ?>">Home Page</a></h3>
							


							<div class="divide60"></div>
							<hr>
							<div class="divide10"></div>

							<div class="divide60"></div>




							<!-- HORIZONTAL DIVIDER WITH ICON AND TEXT -->
							

							

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