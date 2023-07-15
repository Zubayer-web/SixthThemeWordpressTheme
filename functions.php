<?php

	function sixththeme(){
		
		add_theme_support('title-tag');
		add_theme_support('custom-header');
		add_theme_support('custom-background');
		add_theme_support('post-thumbnails');	
		add_theme_support('post-formats',array('Audio','Video','Gallery'));
			
			load_theme_textdomain('sixth',get_template_directory().'/language');
			
			
			register_nav_menus(array(
			    'main-menu'   =>__('primary menu','sixth'),
				'footer-menu' =>__('footer menu','sixth'),
			));
			function defoltmenu(){
				
				echo '<ul>';
					if(!is_user_logged_in()){
						echo '<li class="current_page_item"><a href="'.home_url().'">Home</a></li>';
					}
					else{
						echo '<li class="current_page_item"><a href=" ">Cerate Your Menu</a></li>';
					}
					
				echo '</ul>';
				
				
			}
			
			register_post_type('sixth-portfolio',array(			  
			   'labels'  => array(
			   'name'	=>__('Portfolio','sixth'),
			   'all_items'	=>__('All Portfolios','sixth'),
			   'add_new'	=>__('Add Portfolio','sixth'),
			   'add_new_item'	=>__('Add Portfolio item','sixth'),
			   'Set_featured_image'	=>__('Set portfolio image','sixth'),
			   'remove_featured_image'	=>__('Set portfolio image','sixth'),
			   ),
			   'public'  => true,
			   'menu_position' => 5,
			    'menu_icon'    =>'dashicons-portfolio',
			    'supports'    =>array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields')
				
				
			));	
			
				register_taxonomy('portfilio-cat','sixth-portfolio',array(
				'hierarchical' => true,
				'labels'	   => array(
				'name'	=>__('Cat Type','sixth'),
			   'all_items'	=>__('All Type','sixth'),
			   'add_new'	=>__('Add Type','sixth'),
			   'add_new_item'	=>__('Add Type item','sixth'),
				),
				
				));

		
	}
	add_action("after_setup_theme","sixththeme");

		function sixththeme_sidebar(){
				
				
				register_sidebar(array(
				 'name' 		 => 'Sixth Theme sidebar',
				 'id'     		 => 'sixth-sidebar',
				 'before_widget' => '<article class="widget widget-list">',
				 'after_widget'  => '</article><div class="divide30"></div>',
				 'before_title'  => '<h3 class="widget-title black">',
				 'after_title'   => '</h3>'
				
				));
				register_sidebar(array(
				'name' 	=> 'footer Sidebar',
				'id'	=>'footer-sidebar',
				'before_widget' => '<article class="span3">',
				'after_widget' => '</article>',
				'before_title'   => '<h3 class="widget-title nobottommargin">',
				'after_title'   => '<h3>',
				
				
				));
				
				
			}
			add_action('widgets_init','sixththeme_sidebar');
	
    function sixth_css_js_files(){
		
		wp_enqueue_style('sixth-bootstrap',get_template_directory_uri().'/css/bootstrap.css');
		wp_enqueue_Style('sixth-fontello',get_template_directory_uri().'/css/type/fontello.css');
		wp_enqueue_style('sixth-style',get_template_directory_uri().'/css/style.css');
		wp_enqueue_style('sixth-maincss',get_stylesheet_uri());
		
		
		wp_enqueue_script('jquery');
		wp_enqueue_script('sx-bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'',true);
		wp_enqueue_script('sx-overscroll',get_template_directory_uri().'/js/jquery.overscroll.min.js',array('jquery'),'',true);
		wp_enqueue_script('sx-themepunch',get_template_directory_uri().'/js/jquery.themepunch.plugins.min.js',array('jquery'),'',true);
		wp_enqueue_script('sx-showbizpro',get_template_directory_uri().'/js/jquery.themepunch.showbizpro.js',array('jquery'),'',true);
		wp_enqueue_script('sx-twitter',get_template_directory_uri().'/js/twitter.min.js',array('jquery'),'',true);
		wp_enqueue_script('sx-jscrollpane',get_template_directory_uri().'/js/jquery.jscrollpane.min.js',array('jquery'),'',true);
		wp_enqueue_script('sx-mousewheel',get_template_directory_uri().'/js/jquery.mousewheel.js',array('jquery'),'',true);
		wp_enqueue_script('sx-portfolio',get_template_directory_uri().'/js/jquery.fh.portfolio.js',array('jquery'),'',true);
		wp_enqueue_script('sx-retina',get_template_directory_uri().'/js/retina.js',array('jquery'),'',true);
		wp_enqueue_script('sx-mediaelement',get_template_directory_uri().'/js/mediaelement-and-player.min.js',array('jquery'),'',true);
		wp_enqueue_script('sx-FitVids',get_template_directory_uri().'/js/FitVids.js',array('jquery'),'',true);
		wp_enqueue_script('sx-jribbble',get_template_directory_uri().'/js/jquery.jribbble-0.11.0.ugly.js',array('jquery'),'',true);
		wp_enqueue_script('sx-dcflickr',get_template_directory_uri().'/js/jquery.dcflickr.1.0.js',array('jquery'),'',true);
		wp_enqueue_script('sx-forms',get_template_directory_uri().'/js/forms.js',array('jquery'),'',true);
		wp_enqueue_script('sx-screen',get_template_directory_uri().'/js/screen.js',array('jquery'),'',true);
	}
    add_action('wp_enqueue_scripts','sixth_css_js_files');


	  // require file for cmb2 custom post type
     require_once('lib/init.php');
	 require_once('lib/config.php');
	 
	  // require file for plugins
	 require_once('pulgin/config.php');
	 
	 // require file for redux formwork
	 require_once('inc/redux-core/framework.php');
	 require_once('inc/sample/config.php');


?>