<?php  

function amader_new_cmb2(){
$ourbox = new_cmb2_box(array(
	     'title'           =>__('Extra box for sixth theme','sixth'),
	     'id'              =>'extra-box',
	     'object_types'    =>array('page'), 
			));
	$ourbox->add_field(array(
	     'name'       =>__('Contact Form','sixth'),
	     'id'         =>'Contact_Form',
	     'type'       =>'text',
			));
	  
	  
$ourboxp = new_cmb2_box(array(
	     'title'           =>__('Aro Aro Fields','sixth'),
	     'id'              =>'extra-box',
	     'object_types'    =>array('page'), 
			));
	  
	$ourboxp->add_field(array(
	    'name'             =>__('Text Field','sixth'),
	    'id'               =>'_wp-text-khan',
	    'type'             =>'text',
			));
	$ourboxp->add_field(array(
	    'name'             =>__('jubayer Field','sixth'),
	    'desc'             =>'field description (optional)',
	    'id'               =>'_wp-text-name',
	    'type'             =>'text',
			));
    $ourboxp->add_field(array(
	    'name'             =>__('Hasan','sixth'),
	    'id'               =>'_wp-text-smail',
	    'type'             =>'select_timezone',
			));
	$ourboxp->add_field(array(
	   'name'				=>__('hasan_u','sixth'),
	   'id'					=>'_wp-text-smail',
	   'type'				=>'colorpicker',
	   'default'			=>'#c6c6c6',
			));		
	$ourboxp->add_field( array(
	'name' => 'Time zone',
	'id'   => 'wiki_test_timezone',
	'type' => 'select_timezone',
	
	));
	
	
	$ourboxp->add_field( array(
	'name' => 'Time timestamp',
	'id'   => 'wiki_timestamp_timezone',
	'type' => 'text_datetime_timestamp',
			));
$ourboxp->add_field( array(
	'name' => 'Time timestamp',
	'id'   => 'wiki_timestamp_timezone',
	'type' => 'text_datetime_timestamp',
			));

$ourboxp->add_field( array(
	'name' => 'Time timestamp',
	'id'   => 'wiki_timestamp_timezone',
	'type' => 'textarea',
			));

$ourboxp->add_field( array(
	'name' => 'Time timestampsmail',
	'id'   => 'wiki_timestamp_timezonesmail',
	'type' => 'textarea_small',
			));
$ourboxp->add_field( array(
	'name' => 'Time text',
	'id'   => 'wiki_timestamp_text_time',
	'type' => 'text_time',
			));
$ourboxp->add_field( array(
	'name' => 'Time text two',
	'id'   => 'text_datetime_timestamp',
	'type' => 'text_datetime_timestamp_timezone',
			));			
			
$ourboxp->add_field( array(
	'name' => 'Time radio',
	'id'   => 'text_date',
	'type' => 'radio',
	'options' => array(
	    'meraj' => __( 'kertina', 'sixth' ),
		'nahid'   => __( 'moyuri', 'sixth' ),
		'arif'     => __( 'aniska', 'sixth' ),
	
	
	),
			));				
			$ourboxp->add_field( array(
	'name' => 'Time select',
	'id'   => 'text_select',
	'type' => 'select',
	'options' => array(
	    'meraj' => __( 'kertina', 'sixth' ),
		'nahid'   => __( 'moyuri', 'sixth' ),
		'arif'     => __( 'aniska', 'sixth' ),
	
	
	),
			));	
			
$ourboxp->add_field( array(
	'name' => 'Time wysiwyg',
	'id'   => 'text_wysiwyg',
	'type' => 'wysiwyg',
			));	
		
	$ourboxp->add_field( array(
	'name' => 'Time file',
	'id'   => '_text_file',
	'type' => 'file',
	'options' => array(
	   'url' => 'false',
	  ),
			));	
				
			
			
			
			
			
}
    
add_action('cmb2_admin_init','amader_new_cmb2');
	



	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
  











?>