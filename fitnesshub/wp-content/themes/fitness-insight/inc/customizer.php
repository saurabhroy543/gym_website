<?php
/**
 * Fitness Insight: Customizer
 *
 * @subpackage Fitness Insight
 * @since 1.0
 */

function fitness_insight_customize_register( $wp_customize ) {

	// Top Header
    $wp_customize->add_section('fitness_insight_top',array(
        'title' => __('Contact info', 'fitness-insight'),
        'description' => __( 'Add contact info in the below feilds', 'fitness-insight' ),
    ) );

    $wp_customize->add_setting('fitness_insight_call_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('fitness_insight_call_text',array(
		'label' => esc_html__('Add Text','fitness-insight'),
		'section' => 'fitness_insight_top',
		'setting' => 'fitness_insight_call_text',
		'type'    => 'text'
	));
    
	$wp_customize->add_setting('fitness_insight_call',array(
		'default' => '',
		'sanitize_callback' => 'fitness_insight_sanitize_phone_number'
	)); 
	$wp_customize->add_control('fitness_insight_call',array(
		'label' => esc_html__('Add Phone Number','fitness-insight'),
		'section' => 'fitness_insight_top',
		'setting' => 'fitness_insight_call',
		'type'    => 'text'
	));

    $wp_customize->add_setting('fitness_insight_email_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('fitness_insight_email_text',array(
		'label' => esc_html__('Add Text','fitness-insight'),
		'section' => 'fitness_insight_top',
		'setting' => 'fitness_insight_email_text',
		'type'    => 'text'
	));

	$wp_customize->add_setting('fitness_insight_email',array(
		'default' => '',
		'sanitize_callback' => 'fitness_insight_sanitize_email'
	)); 
	$wp_customize->add_control('fitness_insight_email',array(
		'label' => esc_html__('Add Email Address','fitness-insight'),
		'section' => 'fitness_insight_top',
		'setting' => 'fitness_insight_email',
		'type'    => 'text'
	));

	// Social Media
    $wp_customize->add_section('fitness_insight_urls',array(
        'title' => __('Social Media', 'fitness-insight'),
        'description' => __( 'Add social media links in the below feilds', 'fitness-insight' ),
    ) );
    
	$wp_customize->add_setting('fitness_insight_facebook',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('fitness_insight_facebook',array(
		'label' => esc_html__('Facebook URL','fitness-insight'),
		'section' => 'fitness_insight_urls',
		'setting' => 'fitness_insight_facebook',
		'type'    => 'url'
	));

	$wp_customize->add_setting('fitness_insight_twitter',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('fitness_insight_twitter',array(
		'label' => esc_html__('Twitter URL','fitness-insight'),
		'section' => 'fitness_insight_urls',
		'setting' => 'fitness_insight_twitter',
		'type'    => 'url'
	));

	$wp_customize->add_setting('fitness_insight_youtube',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('fitness_insight_youtube',array(
		'label' => esc_html__('Youtube URL','fitness-insight'),
		'section' => 'fitness_insight_urls',
		'setting' => 'fitness_insight_youtube',
		'type'    => 'url'
	));

	$wp_customize->add_setting('fitness_insight_instagram',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('fitness_insight_instagram',array(
		'label' => esc_html__('Instagram URL','fitness-insight'),
		'section' => 'fitness_insight_urls',
		'setting' => 'fitness_insight_instagram',
		'type'    => 'url'
	));

    //Slider
	$wp_customize->add_section( 'fitness_insight_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'fitness-insight' ),
    	'description' => __( 'Image Dimension ( 1400 x 650 ) px', 'fitness-insight' ),
		'priority'   => null,
	) );

	$wp_customize->add_setting('fitness_insight_slider_arrows',array(
       'default' => true,
       'sanitize_callback'	=> 'fitness_insight_sanitize_checkbox'
    ));
    $wp_customize->add_control('fitness_insight_slider_arrows',array(
       'type' => 'checkbox',
       'label' => __('Check to show slider','fitness-insight'),
       'section' => 'fitness_insight_slider_section',
    ));

	$args = array('numberposts' => -1); 
	$post_list = get_posts($args);
	$i = 0;	
	$pst_sls[]= __('Select','fitness-insight');
	foreach ($post_list as $key => $p_post) {
		$pst_sls[$p_post->ID]=$p_post->post_title;
	}
	for ( $i = 1; $i <= 4; $i++ ) {
		$wp_customize->add_setting('fitness_insight_post_setting'.$i,array(
			'sanitize_callback' => 'fitness_insight_sanitize_choices',
		));
		$wp_customize->add_control('fitness_insight_post_setting'.$i,array(
			'type'    => 'select',
			'choices' => $pst_sls,
			'label' => __('Select post','fitness-insight'),
			'section' => 'fitness_insight_slider_section',
		));
	}
	wp_reset_postdata();

	//Middle Section
	$wp_customize->add_section( 'fitness_insight_middle_section' , array(
    	'title'      => __( 'Services Settings', 'fitness-insight' ),
    	'description' => __( 'Image Dimension ( 500 x 500 ) px', 'fitness-insight' ),
		'priority'   => null,
	) );
	
	$args = array('numberposts' => -1); 
	$post_list = get_posts($args);
	$s = 0;	
	$pst_sls[]= __('Select','fitness-insight');
	foreach ($post_list as $key => $p_post) {
		$pst_sls[$p_post->ID]=$p_post->post_title;
	}
	for ( $s = 1; $s <= 4; $s++ ) {
		$wp_customize->add_setting('fitness_insight_mid_section_icon'.$s,array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)); 
		$wp_customize->add_control('fitness_insight_mid_section_icon'.$s,array(
			'label' => esc_html__('Icon','fitness-insight'),
			'description' => esc_html__('Add the fontawesome class to add icon ex: fas fa-envelope','fitness-insight'),
			'section' => 'fitness_insight_middle_section',
			'setting' => 'fitness_insight_mid_section_icon',
			'type'    => 'text'
		));

		$wp_customize->add_setting('fitness_insight_middle_sec_settigs'.$s,array(
			'sanitize_callback' => 'fitness_insight_sanitize_choices',
		));
		$wp_customize->add_control('fitness_insight_middle_sec_settigs'.$s,array(
			'type'    => 'select',
			'choices' => $pst_sls,
			'label' => __('Select post','fitness-insight'),
			'section' => 'fitness_insight_middle_section',
		));
	}
	wp_reset_postdata();
    
	//Footer
    $wp_customize->add_section( 'fitness_insight_footer_copyright', array(
    	'title'      => esc_html__( 'Footer Text', 'fitness-insight' ),
	) );

    $wp_customize->add_setting('fitness_insight_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('fitness_insight_footer_text',array(
		'label'	=> esc_html__('Copyright Text','fitness-insight'),
		'section'	=> 'fitness_insight_footer_copyright',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'fitness_insight_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'fitness_insight_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'fitness_insight_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'fitness_insight_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'fitness-insight' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'fitness-insight' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'fitness_insight_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'fitness_insight_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'fitness_insight_customize_register' );

function fitness_insight_customize_partial_blogname() {
	bloginfo( 'name' );
}

function fitness_insight_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function fitness_insight_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function fitness_insight_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}