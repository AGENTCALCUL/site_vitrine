<?php

add_action( 'bizberg_before_homepage_blog', 'smart_health_pharmacy_homepage_funfact' );
function smart_health_pharmacy_homepage_funfact(){

	$data = bizberg_get_theme_mod( 'smart_health_pharmacy_fun_facts' );
	$data = json_decode( $data, true );

	if( empty( $data ) ){
		return;
	} ?>

	<div  class="software-funfacts-area bg-f9f9f9 pb-100">
	    <div  class="container">
	        <div  class="row justify-content-center">
	        	<?php 
	        	foreach( $data as $value ){ 
	        		
	        		$icon    = !empty( $value['icon'] ) ? $value['icon'] : '';
	        		$page_id = !empty( $value['page_id'] ) ? $value['page_id'] : '';

	        		$pageObj = get_post( $page_id ); ?>

		            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
		                <div class="software-funfacts-item">
		                    <div class="icon">
		                    	<i class="<?php echo esc_attr( $icon ); ?>"></i>
		                    </div>
		                    <h3><?php echo esc_html( number_format( preg_replace('/[^0-9]/', '', $pageObj->post_content ) ) ); ?></h3>
		                    <span><?php echo esc_html( $pageObj->post_title ); ?></span>
		                </div>
		            </div>
		            <?php 
		        } ?>
	        </div>
	    </div>
	</div>

	<?php
}