<?php
/*
Template Name: Contact Page
*/


 get_header(); ?>
			
			<?php get_template_part('template/header-tem'); ?>
			<!-- END OF THE CONTENT HEADER -->


			<div class="divide30"></div>


				
				<?php while(have_posts()): the_post(); ?>
				
		         <?php the_content(); ?>	
				 
				 
				 			
				 
				<?php endwhile; ?>
				
					
			<div class="divide30"></div>
			
				<div class="span5">
					<h3 class="paragraph-title"><strong>Send us a Quick Message</strong></h3>
					<form id="contactform" method="post" action="#">
						
				<?php while(have_posts()): the_post(); ?>
				
		        			 
				 <?php echo do_shortcode(get_post_meta(get_the_id(),'Contact_Form',true)); ?>
				 
				<?php endwhile; ?>
								
					</form>
				</div>
<div class="divide50"></div>
			
			<div class="divide30"></div>
	<?php get_footer(); ?>