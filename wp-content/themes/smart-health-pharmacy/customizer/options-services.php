<?php

add_action( 'init' , 'smart_health_pharmacy_services' );
function smart_health_pharmacy_services(){

	Kirki::add_section( 'smart_health_pharmacy_services', array(
        'title'   => esc_html__( 'Services', 'smart-health-pharmacy' ),
        'section' => 'homepage'
    ) );

    Kirki::add_field( 'bizberg', [
		'type'        => 'checkbox',
		'settings'    => 'services_status',
		'label'       => esc_html__( 'Enable / Disable', 'smart-health-pharmacy' ),
		'section'     => 'smart_health_pharmacy_services',
		'default'     => false,
	] );

    Kirki::add_field( 'bizberg', [
		'type'     => 'text',
		'settings' => 'services_subtitle',
		'label'    => esc_html__( 'Subtitle', 'smart-health-pharmacy' ),
		'section'  => 'smart_health_pharmacy_services',
		'default'  => esc_html__( 'How Can We Help You!', 'smart-health-pharmacy' ),
		'active_callback' => [
			[
				'setting'  => 'services_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', [
		'type'     => 'text',
		'settings' => 'services_title',
		'label'    => esc_html__( 'Title', 'smart-health-pharmacy' ),
		'section'  => 'smart_health_pharmacy_services',
		'default'  => esc_html__( 'We’re helping teams do their best work', 'smart-health-pharmacy' ),
		'active_callback' => [
			[
				'setting'  => 'services_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', array(
    	'type'        => 'advanced-repeater',
    	'label'       => esc_html__( 'Services', 'smart-health-pharmacy' ),
	    'section'     => 'smart_health_pharmacy_services',
	    'settings'    => 'smart_health_pharmacy_services',
	    'active_callback' => [
			[
				'setting'  => 'services_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	    'choices' => [
	        'button_label' => esc_html__( 'Add Services', 'smart-health-pharmacy' ),
	        'row_label' => [
	            'value' => esc_html__( 'Services', 'smart-health-pharmacy' ),
	        ],
	        'limit'  => 4,
	        'fields' => [
	        	'icon'  => [
	                'type'        => 'fontawesome',
	                'label'       => esc_html__( 'Icon', 'smart-health-pharmacy' ),
	                'default'     => 'fab fa-accusoft',
	                'choices'     => bizberg_get_fontawesome_options(),
	            ],
	            'page_id' => [
	                'type'        => 'select',
	                'label'       => esc_html__( 'Page', 'smart-health-pharmacy' ),
	                'choices'     => bizberg_get_all_pages()
	            ],
	        ],
	    ]
    ));

}