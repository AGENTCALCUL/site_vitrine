<?php

add_action( 'bizberg_before_homepage_blog', 'smart_health_pharmacy_homepage_services' );
function smart_health_pharmacy_homepage_services(){ 

	$services_status = bizberg_get_theme_mod( 'services_status' );

	if( $services_status == false ){
		return;
	}

	$services_subtitle = bizberg_get_theme_mod( 'services_subtitle' );
	$services_title    = bizberg_get_theme_mod( 'services_title' );
	$data              = bizberg_get_theme_mod( 'smart_health_pharmacy_services' );
	$data              = json_decode( $data, true ); ?>

	<div class="features-area">
	    <div class="container">
	        <div class="section-title">
	            <span  class="sub-title">
	            	<?php echo esc_html( $services_subtitle ); ?>
	            </span>
	            <h2>
	            	<?php echo esc_html( $services_title ); ?>
	            </h2>
	        </div>

	        <div class="row justify-content-center">

	        	<?php 
	        	if( !empty($data) ){
	        		foreach( $data as $value ){

	        			$icon    = !empty( $value['icon'] ) ? $value['icon'] : '';
		        		$page_id = !empty( $value['page_id'] ) ? $value['page_id'] : '';

		        		$pageObj = get_post( $page_id ); ?>

			            <div class="col-lg-3 col-md-6 col-sm-6">
			                <div  class="software-single-help-desk-box">
			                    <div class="icon"><i class="<?php echo esc_attr( $icon ); ?>"></i></div>
			                    <h3><?php echo esc_html( $pageObj->post_title ); ?></h3>
			                    <p><?php echo esc_html( wp_trim_words( sanitize_text_field( $pageObj->post_content ), 15, ' [...]' ) ); ?></p>
			                    <a class="link-btn" href="<?php echo esc_url( get_permalink( $pageObj ) ); ?>"> <?php esc_html_e( 'Learn More' , 'smart-health-pharmacy' )  ?> <i class="fas fa-chevron-right"></i></a>
			                </div>
			            </div>

		            	<?php
		            } 

	        	} ?>

	        </div>

	    </div>

	</div>

	<?php
}