<?php
/**
 * footer.php
 *
 * The template for displaying the footer.
 */
$footer_style = marketo_option( 'footer_style',marketo_defaults('footer_style') );

?>
<div class="xs-sidebar-group">
    <div class="xs-overlay bg-black"></div>
    <div class="xs-minicart-widget">
        <div class="widget-heading media">
            <h3 class="widget-title align-self-center d-flex"><?php echo esc_html__( 'Shopping cart', 'marketo' ); ?></h3>
            <div class="media-body">
                <a href="#" class="close-side-widget">
                    <i class="icon icon-cross"></i>
                </a>
            </div>
        </div>
        <div class="widget woocommerce widget_shopping_cart"><div class="widget_shopping_cart_content"></div></div>
    </div>
</div>
<?php get_template_part( 'template-parts/footer/footer', $footer_style ); ?>
<?php wp_footer(); ?>
</body>
</html>