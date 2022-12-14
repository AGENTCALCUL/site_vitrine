<?php
/**
 * Admin "Welcome" page content component
 *
 * Footer.
 *
 * @package    Reykjavik
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.0
 * @version  2.1.0
 */

if ( ! class_exists( 'Reykjavik_Welcome' ) ) {
	return;
}

?>

</div> <!-- /.welcome-content -->

<br>
<hr>

<p>
	<?php echo Reykjavik_Welcome::get_info_support(); ?>
	<br>
	<?php echo Reykjavik_Welcome::get_info_like(); ?>
</p>

<p><small><em><?php esc_html_e( 'You can disable this page in Appearance &raquo; Customize &raquo; Theme Options &raquo; Others.', 'reykjavik' ); ?></em></small></p>
