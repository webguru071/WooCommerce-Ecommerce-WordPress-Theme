<?php
$show_promotional_card = marketo_option('show_promotional_card');
$show_topbar = marketo_option('show_topbar');
$category_selector = marketo_option('category_selectors');
$show_header_bottom = marketo_option('show_header_bottom');
$show_header_cta = marketo_option('show_header_cta');
$cta_btn_title = marketo_option('cta_btn_title', marketo_defaults('cta_btn_title'));
$cta_btn_subtitle = marketo_option('cta_btn_subtitle', marketo_defaults('cta_btn_subtitle'));
$cta_btn_link = marketo_option('cta_btn_link', marketo_defaults('cta_btn_link'));
$logo = marketo_option('site_logo');
$retina_logo = marketo_option('retina_site_logo');
if($logo == null){
    $logo = marketo_get_image( 'menu_logo', MARKETO_IMAGES . '/logo.png' );
}
if($show_promotional_card){
    get_template_part( 'template-parts/navigation/content', 'nav-top-coupon' );
}

if($show_topbar){
    get_template_part( 'template-parts/navigation/content', 'nav-top' );
}

$header_fullwidth = marketo_option('header_fullwidth');
if($header_fullwidth){
    $container = 'container container-fullwidth';
}else{
    $container = 'container';
}
?>
<header class="xs-header header-shadow">
    <!-- nav bar section -->
    <div class="xs-navBar navbar-orange navbar-style2">
        <div class="<?php echo esc_attr($container); ?>">
            <div class="row">
                <div class="col-lg-3 col-sm-4 xs-order-1 flex-middle">
                    <div class="xs-logo-wraper">
                        <a class="xs_default_logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo esc_url( $logo ) ?>" alt="<?php bloginfo( 'name' ); ?>">
                        </a>
                        <?php if(!empty($retina_logo)): ?>
                            <a class="xs_retina_logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo esc_url( $retina_logo ) ?>" alt="<?php bloginfo( 'name' ); ?>">
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-3 xs-order-3 xs-menus-group">
                    <?php get_template_part( 'template-parts/navigation/nav-part/nav', 'search' ); ?>
                </div>
                <div class="col-lg-3 col-sm-5 xs-order-2 xs-wishlist-group">
                    <div class="xs-wish-list-item">
                        <?php if(class_exists( 'YITH_WCWL' )): ?>
                            <span class="xs-wish-list">
                                <a href="<?php echo esc_url(YITH_WCWL()->get_wishlist_url()); ?>" class="xs-single-wishList">
                                    <span class="xs-item-count xswhishlist"><?php echo YITH_WCWL()->count_products(); ?></span>
                                    <i class="icon icon-heart"></i>
                                </a>
                            </span>
                        <?php endif; ?>
                        <?php if ( class_exists( 'WooCommerce' ) ) { ?>
                            <div class="xs-miniCart-dropdown">
                                <?php  $xs_product_count = WC()->cart->cart_contents_count; ?>
                                <a href="<?php echo esc_url( wc_get_cart_url() ); ?>"  class ="xs-single-wishList offset-cart-menu">
                                    <span class="xs-item-count highlight xscart"><?php echo esc_html($xs_product_count); ?></span>
                                    <i class="icon icon-bag"></i>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </div>    <!-- End nav bar section -->

    <!-- nav down section -->
    <div class="xs-navDown navDown-v7">
        <div class="<?php echo esc_attr($container); ?>">
            <div class="row">
                <div class="col-lg-3 d-none d-md-none d-lg-block">
                    <!-- vertical menu bar -->
                    <div class="cd-dropdown-wrapper xs-vartical-menu">
                        <a class="cd-dropdown-trigger" href="#0">
                            <i class="fa fa-list-ul"></i> All Categories
                        </a>
                        <nav class="cd-dropdown">
                            <h2>Marketpress</h2>
                            <a href="#0" class="cd-close">Close</a>
                            <?php get_template_part( 'template-parts/navigation/nav-part/vertical', 'nav' ); ?>
                        </nav> <!-- .cd-dropdown -->
                    </div> <!-- .cd-dropdown-wrapper -->                <!-- End vertical menu bar -->
                </div>
                <div class="col-lg-6">
                    <nav class="xs-menus xs_nav-landscape">
                        <div class="nav-header">
                            <div class="nav-toggle"></div>
                        </div><!-- .nav-header END -->
                        <div class="nav-menus-wrapper" style="transition-property: none;"><span class="nav-menus-wrapper-close-button">✕</span>
                            <!-- menu list area -->
                            <?php get_template_part( 'template-parts/navigation/nav-part/primary', 'nav' ); ?>                     <!-- END menu list area -->
                        </div><!-- .nav-menus-wrapper END -->
                        <div class="nav-overlay-panel"></div>
                    </nav><!-- .xs-menus END -->
                </div>
                <?php if($show_header_cta): ?>
                    <div class="col-lg-3 col-lg-3 d-none d-md-none d-lg-block">
                        <a href="<?php echo esc_url($cta_btn_link); ?>" class="btn btn-outline-primary btn-lg">
                            <strong><?php echo esc_html($cta_btn_title); ?></strong>
                            <?php echo esc_html($cta_btn_subtitle); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </div>    <!-- End nav down section -->
    <!-- <div class="nav-cover"></div> -->
    <div class="nav-cover"></div>
</header>