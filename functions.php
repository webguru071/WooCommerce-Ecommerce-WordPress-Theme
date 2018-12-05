<?php
/**
 * functions.php
 *
 * The theme's functions and definitions.
 */
/**
 * 1.0 - Define constants. Current Version number & Theme Name.
 */
define('MARKETO_THEME', 'Marketo WordPress Theme');
define('MARKETO_VERSION', '1.0');

define('MARKETO_THEMEROOT', get_template_directory_uri());
define('MARKETO_THEMEROOT_DIR', get_parent_theme_file_path());
define('MARKETO_IMAGES', MARKETO_THEMEROOT . '/assets/images');
define('MARKETO_IMAGES_DIR', MARKETO_THEMEROOT_DIR . '/assets/images');
define('MARKETO_IMAGES_URI', MARKETO_THEMEROOT . '/assets/images');
define('MARKETO_CSS', MARKETO_THEMEROOT . '/assets/css');
define('MARKETO_CSS_DIR', MARKETO_THEMEROOT_DIR . '/assets/css');
define('MARKETO_SCRIPTS', MARKETO_THEMEROOT . '/assets/js');
define('MARKETO_SCRIPTS_DIR', MARKETO_THEMEROOT_DIR . '/assets/js');
define('MARKETO_PHPSCRIPTS', MARKETO_THEMEROOT . '/assets/php');
define('MARKETO_PHPSCRIPTS_DIR', MARKETO_THEMEROOT_DIR . '/assets/php');
define('MARKETO_INC', MARKETO_THEMEROOT_DIR . '/inc');
define('MARKETO_CUSTOMIZER_DIR', MARKETO_INC . '/customizer/');
define('MARKETO_SHORTCODE_DIR', MARKETO_INC . '/shortcode/');
define('MARKETO_SHORTCODE_DIR_STYLE', MARKETO_INC . '/shortcode/style');
define('MARKETO_REMOTE_CONTENT', esc_url('http://xpeedstudio.net/demo-content/marketo'));
define('MARKETO_PLUGINS_DIR', MARKETO_INC . '/includes/plugins');
define('MARKETO_REMOTE_URL', 'https://wp.xpeedstudio.com/demo-content/marketo/plugins');


/**
 * ----------------------------------------------------------------------------------------
 * 3.0 - Set up the content width value based on the theme's design.
 * ----------------------------------------------------------------------------------------
 */
if (!isset($content_width)) {
    $content_width = 800;
}


/**
 * ----------------------------------------------------------------------------------------
 * 4.0 - Set up theme default and register various supported features.
 * ----------------------------------------------------------------------------------------
 */
if (!function_exists('marketo_setup')) {

    function marketo_setup()
    {
        /**
         * Make the theme available for translation.
         */
        $lang_dir = MARKETO_THEMEROOT . '/languages';
        load_theme_textdomain('marketo', $lang_dir);

        /**
         * Add support for post formats.
         */
        add_theme_support('post-formats', array()
        );

        /**
         * Add support for automatic feed links.
         */
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /**
         * Add support for post thumbnails.
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(750, 465, array('center', 'center')); // Hard crop center center

        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');

        /**
         * Register nav menus.
         */
        register_nav_menus(
            array(
                'primary' => esc_html__('Primary Menu', 'marketo'),
                'mobile_nav' => esc_html__('Mobile Menu', 'marketo'),
                'vertical_nav' => esc_html__('Vertical Menu', 'marketo'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));

    }

    add_action('after_setup_theme', 'marketo_setup');
}

/**
 * ----------------------------------------------------------------------------------------
 * 7.0 - theme INC.
 * ----------------------------------------------------------------------------------------
 */
include_once get_template_directory() . '/inc/init.php';
include_once get_template_directory() . '/inc/mav-menu-custom-fields.php';
$footer_style = marketo_option( 'footer_style',marketo_defaults('footer_style') );


add_filter('marketo_footer_widget_1_width', 'marketo_footer_1_width');
function marketo_footer_1_width(){ 
    return marketo_option('footer_widget_1_grid');
}

add_filter('marketo_footer_widget_2_width', 'marketo_footer_2_width');
function marketo_footer_2_width(){ 
    return marketo_option('footer_widget_2_grid');
}

add_filter('marketo_footer_widget_3_width', 'marketo_footer_3_width');
function marketo_footer_3_width(){ 
    return marketo_option('footer_widget_3_grid');
}

add_filter('marketo_footer_widget_4_width', 'marketo_footer_4_width');
function marketo_footer_4_width(){ 
    return marketo_option('footer_widget_4_grid');
}

add_filter('marketo_footer_widget_5_width', 'marketo_footer_5_width');
function marketo_footer_5_width(){ 
    return marketo_option('footer_widget_5_grid');
}

add_filter('marketo_footer_widget_6_width', 'marketo_footer_6_width');
function marketo_footer_6_width(){ 
    return marketo_option('footer_widget_6_grid');
}

add_filter('marketo_footer_widget_7_width', 'marketo_footer_7_width');
function marketo_footer_7_width(){ 
    return marketo_option('footer_widget_7_grid');
}

add_filter('marketo_footer_widget_8_width', 'marketo_footer_8_width');
function marketo_footer_8_width(){ 
    return marketo_option('footer_widget_8_grid');
}

add_filter('marketo_footer_widget_9_width', 'marketo_footer_9_width');
function marketo_footer_9_width(){ 
    return marketo_option('footer_widget_9_grid');
}

add_filter('marketo_footer_widget_10_width', 'marketo_footer_10_width');
function marketo_footer_10_width(){ 
    return marketo_option('footer_widget_10_grid');
}

add_filter('marketo_footer_widget_11_width', 'marketo_footer_11_width');
function marketo_footer_11_width(){ 
    return marketo_option('footer_widget_11_grid');
}

add_filter('marketo_footer_widget_12_width', 'marketo_footer_12_width');
function marketo_footer_12_width(){ 
    return marketo_option('footer_widget_12_grid');
}

add_filter('woocommerce_add_to_cart_fragments', 'marketo_cart_button_item_count', 30);
function marketo_cart_button_item_count($array_s)
{
    $xs_product_count = WC()->cart->cart_contents_count;
    ob_start();
    ?>
    <span class="xs-item-count highlight xscart"><?php echo esc_html($xs_product_count); ?></span>
    <?php
    $array_s['span.xscart'] = ob_get_clean();
    return $array_s;

}
add_action( 'admin_menu', 'marketo_remove_theme_settings', 999 );
function marketo_remove_theme_settings() {
    remove_submenu_page( 'themes.php', 'fw-settings' );
}

