<?php
/**
 * Medical Care: Customizer
 *
 * @subpackage Medical Care
 * @since 1.0
 */

function medical_care_customize_register( $wp_customize ) {

	// Header
    $wp_customize->add_section('medical_care_header',array(
        'title' => __('Header', 'medical-care'),
    ) );
    
    $wp_customize->add_setting('medical_care_our_location',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('medical_care_our_location',array(
		'label' => esc_html__('Our Location Text','medical-care'),
		'section' => 'medical_care_header',
		'setting' => 'medical_care_our_location',
		'type'    => 'text'
	));

	$wp_customize->add_setting('medical_care_address',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('medical_care_address',array(
		'label' => esc_html__('Our Address','medical-care'),
		'section' => 'medical_care_header',
		'setting' => 'medical_care_address',
		'type'    => 'text'
	));

    $wp_customize->add_setting('medical_care_our_contact',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('medical_care_our_contact',array(
		'label' => esc_html__('Contact Text','medical-care'),
		'section' => 'medical_care_header',
		'setting' => 'medical_care_our_contact',
		'type'    => 'text'
	));

	$wp_customize->add_setting('medical_care_phone_no',array(
		'default' => '',
		'sanitize_callback' => 'medical_care_sanitize_phone_number'
	)); 
	$wp_customize->add_control('medical_care_phone_no',array(
		'label' => esc_html__('Our Phone no','medical-care'),
		'section' => 'medical_care_header',
		'setting' => 'medical_care_phone_no',
		'type'    => 'text'
	));

    $wp_customize->add_setting('medical_care_days_open',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('medical_care_days_open',array(
		'label' => esc_html__('Opening Days','medical-care'),
		'section' => 'medical_care_header',
		'setting' => 'medical_care_days_open',
		'type'    => 'text'
	));

	$wp_customize->add_setting('medical_care_opening_time',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('medical_care_opening_time',array(
		'label' => esc_html__('Opening Time','medical-care'),
		'section' => 'medical_care_header',
		'setting' => 'medical_care_opening_time',
		'type'    => 'text'
	));

    //Slider
	$wp_customize->add_section( 'medical_care_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'medical-care' ),
		'priority'   => null,
	) );

	$wp_customize->add_setting('medical_care_slider_arrows',array(
       'default' => true,
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('medical_care_slider_arrows',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','medical-care'),
       'section' => 'medical_care_slider_section',
    ));

	$post_list = get_posts();
	$i = 0;	
	$pst_sls[]='Select';
	foreach ($post_list as $key => $p_post) {
		$pst_sls[$p_post->ID]=$p_post->post_title;
	}
	for ( $s = 1; $s <= 4; $s++ ) {
		$wp_customize->add_setting('medical_care_post_setting'.$s,array(
			'sanitize_callback' => 'medical_care_sanitize_choices',
		));
		$wp_customize->add_control('medical_care_post_setting'.$s,array(
			'type'    => 'select',
			'choices' => $pst_sls,
			'label' => __('Select post','medical-care'),
			'section' => 'medical_care_slider_section',
		));
	}
	wp_reset_postdata();

	// OUR Services
	$wp_customize->add_section('medical_care_service',array(
		'title' => esc_html__('Our Services','medical-care'),		
	));

	$wp_customize->add_setting('medical_care_our_services_subtitle',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('medical_care_our_services_subtitle',array(
		'label' => esc_html__('Section First Title','medical-care'),
		'section' => 'medical_care_service',
		'setting' => 'medical_care_our_services_subtitle',
		'type'    => 'text'
	));

	$wp_customize->add_setting('medical_care_our_services_title',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('medical_care_our_services_title',array(
		'label' => esc_html__('Section Second Title','medical-care'),
		'section' => 'medical_care_service',
		'setting' => 'medical_care_our_services_title',
		'type'    => 'text'
	));	

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
	if($i==0){
	  $default = $category->slug;
	  $i++;
	}
	$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('medical_care_category_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'medical_care_sanitize_select',
	));
	$wp_customize->add_control('medical_care_category_setting',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => esc_html__('Select Category to display Post','medical-care'),
		'section' => 'medical_care_service',
	));
    
	//Footer
    $wp_customize->add_section( 'medical_care_footer_copyright', array(
    	'title'      => esc_html__( 'Footer Text', 'medical-care' ),
	) );

    $wp_customize->add_setting('medical_care_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('medical_care_footer_text',array(
		'label'	=> esc_html__('Copyright Text','medical-care'),
		'section'	=> 'medical_care_footer_copyright',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'medical_care_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'medical_care_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'medical_care_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'medical_care_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'medical-care' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'medical-care' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'medical_care_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'medical_care_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'medical_care_customize_register' );

function medical_care_customize_partial_blogname() {
	bloginfo( 'name' );
}

function medical_care_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function medical_care_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function medical_care_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}