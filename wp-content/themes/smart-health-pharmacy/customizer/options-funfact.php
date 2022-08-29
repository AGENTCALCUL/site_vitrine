<?php

add_action( 'init' , 'smart_health_pharmacy_funfact' );
function smart_health_pharmacy_funfact(){

	Kirki::add_section( 'smart_health_pharmacy_sections', array(
        'title'   => esc_html__( 'Fun Facts', 'smart-health-pharmacy' ),
        'section' => 'homepage'
    ) );

    Kirki::add_field( 'bizberg', array(
    	'type'        => 'advanced-repeater',
    	'label'       => esc_html__( 'Fun Facts', 'smart-health-pharmacy' ),
	    'section'     => 'smart_health_pharmacy_sections',
	    'settings'    => 'smart_health_pharmacy_fun_facts',
	    'choices' => [
	        'button_label' => esc_html__( 'Add Fun Facts', 'smart-health-pharmacy' ),
	        'row_label' => [
	            'value' => esc_html__( 'Fun Facts', 'smart-health-pharmacy' ),
	        ],
	        'limit'  => 3,
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