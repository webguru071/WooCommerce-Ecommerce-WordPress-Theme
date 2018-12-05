<?php
/**
 * header.php
 *
 * The header for the theme.
 */
?>
<!DOCTYPE html>
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<?php wp_head(); ?>
    </head>
	<?php
	$header_layout = marketo_option( 'header_layout' );
	if ( $header_layout == 2 || $header_layout == 5 ) {
		$header_layout = 5;
	}
	$rtl	 = marketo_option( 'marketo_rtl' );
	$class[]  = '';
	if ( $rtl ) {
		$class[] = 'rtl';
	}
	if($header_layout == 5 ){
	    array_push($class,'xs-header-5');
    }
	get_header( $header_layout );
	get_template_part( 'template-parts/navigation/mobile', 'nav' );

	global $yith_woocompare;
	?>
    <body <?php body_class( $class ); ?> data-spy="scroll" data-target="#header">



