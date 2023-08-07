<?php
/**
 *
 * Theme padrão desenvolvimento duo-studio WebPack
 *
 * @link https://duostudio.com.br/
 *
 * @package duostudio_theme
 *
 */

// Get the theme version
define('THEME_VERSION', wp_get_theme()->get('Version'));


/*------------------------------------*\
    Functions
\*------------------------------------*/
// Load Styles
function public_assets(){
    wp_register_style('duo_studio_theme_styles', get_template_directory_uri() . '/assets/dist/app.css', array(), THEME_VERSION);
    wp_enqueue_style('duo_studio_theme_styles'); // Enqueue it!
}
add_action('wp_enqueue_scripts', 'public_assets', 99); // Add Theme Stylesheet

function header_scripts(){
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        wp_dequeue_script('jquery');
        wp_deregister_script('jquery');
        global $wp_query;
        wp_register_script('duo_studio_theme_scripts', get_template_directory_uri() . '/assets/dist/app.js', array(), THEME_VERSION); // Custom scripts
        wp_enqueue_script('duo_studio_theme_scripts'); // Enqueue it!
        //linkar admin-ajax.php
        $wpajax = [
            'ajaxurl' => admin_url('admin-ajax.php')
        ];
        wp_localize_script( 'duo_studio_theme_scripts', 'wp', $wpajax );
    }
}
add_action('init', 'header_scripts'); // Add Custom Scripts to wp_head



/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
// CPT
require_once get_template_directory() . '/inc/custom-post-type.php';

/*------------------------------------*\
    Theme Support
\*------------------------------------*/

// Sidebar Widget
// if (function_exists('register_sidebar')){
//     register_sidebar(array(
//         'before_title' => '<h3>',
//         'after_title' => '</h3>',
//         'before_widget' => '<div class="row"><div class="col-md-12">',
//         'after_widget' => '</div></div>',
//     ));
// }

// Theme Suporte
if (function_exists('add_theme_support')){
    add_theme_support('custom-logo'); // Add Custom Logo Support
    // Suporte a post thumbnail
    add_theme_support('post-thumbnails');
    add_image_size( 'blog-first', 1280, 1080, true);
    add_image_size( 'blog-third', 389, 150, true);
    add_image_size( 'blog-fourth', 410, 350, true);
}

// Registra Walker de Navegação Personalizada
function register_navwalker(){
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}


// Registra menu

function duo_studio_theme_menu(){
    register_nav_menus( array(
        'principal' => __('Menu principal', 'menu-duostudio'), // Main Navigation
        'header-redes' => __('Menu Redes Sociais', 'menu-redes'), // Main Navigation
        'footer' => __('Menu Footer', 'menu-footer'), // Main Navigation
        'footer-politicas' => __('Menu Footer Politicas', 'menu-footer-politicas'), // Main Navigation
    ));
}

function nav_terms_category(){
    $cats = wp_count_terms('category');
    $category = get_terms(array(
        'taxonomy' => 'category',
        'number' => $cats,
        'offset' => 4
    ));
    return $category;
}

// Custom logo
function custom_logo(){
    // The logo
    $custom_logo_id = get_theme_mod('custom_logo');
    // If has logo
    if ($custom_logo_id) {
        // Attr
        $custom_logo_attr = array(
            'class'    => 'duo-studio-logo',
            'itemprop' => 'logo',
        );

        // Image alt
        $image_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true);
        if (empty($image_alt)) {
            $custom_logo_attr['alt'] = get_bloginfo('name', 'display');
        }

        // Get the image
        $html = sprintf(
            '<a href="%1$s" class="duo-studio-logo-link" rel="home" itemprop="url">%2$s</a>',
            home_url(),
            wp_get_attachment_image($custom_logo_id, 'full', false, $custom_logo_attr)
        );
    }else {
        $html = 'Inserir um logo';
    }
    // Return
    return $html;
}



// Retorna Excerpt
/*******************************************************************************
 * Limite de caracteres para o exerpt só chamar o metodo
 * onde queira com o echo get_excerpt(120, texto da sua preferencia); 
 * o numero define a quantidade de caracteres retornado.
 * E o texto pode ser qualquer variavel de texto que queira
 * Ser for hook do wp usar o metodo get ex get_the_title(), get_the_content()
*******************************************************************************/
function get_excerpt( $count, $text ) {
    $excerpt = strip_tags($text);
    $conttxt = strlen($excerpt);
    if($conttxt >= $count){
        $reduz = mb_substr($excerpt, 0, $count, 'UTF-8');
        $excerpt = $reduz.'...';
    } else{
        $excerpt = $excerpt;
    }
    return $excerpt;
}

// Retorna Excerpt get_option('page_on_front')
function Home_id(){
    $IDh = get_option('page_on_front');
    return $IDh;
}

// add defer attribute to enqueued script
function script_defer_attribute($tag, $handle, $src){
    if ($handle === 'duo_studio_theme_scripts') {
        if (false === stripos($tag, 'defer')) {
            $tag = str_replace('<script ', '<script defer ', $tag);
        }
    }
    return $tag;
}

// Remove Admin bar
function remove_admin_bar(){
    return false;
}

// Remove Block Library CSS from WordPress
function wpassist_remove_block_library_css() {
    wp_dequeue_style( 'wp-block-library' );
}

// Remove Global styles from WordPress
function remove_global_styles(){
    wp_dequeue_style( 'global-styles' );
}

// Wp Login: change login headertitle
function change_login_headertitle(){
    return get_option('blogname');
}

// Wp Login: change login headerurl
function change_login_headerurl($value){
    return home_url();
}

// Wp Customizer Remove Sections
function customizer_removes($wp_customize){
    $wp_customize->remove_section('static_front_page');
    $wp_customize->remove_section('custom_css');
    $wp_customize->remove_panel('nav_menus');
    $wp_customize->remove_panel('widgets');
}

function get_page_id($page_name){
    global $wpdb;
    $page_name = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$page_name."'");
    return $page_name;
}

/****************************************************
* Tempo de leitura
****************************************************/
function tt_reading_time() {
    $content = get_post_field('post_content');
    $char_count = mb_strlen(strip_tags($content), "UTF-8");
    
    $min = ceil($char_count / 1200); // tempo médio de leitura: 1200 caracteres
   
    $tempo = '<span class="time-to-read">';
    if ($min <= 1) {
        $tempo .= '1 minutos';
    }
    else {
        $tempo .= $min . ' minutos';
    }
    //$tempo .= ' <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="2.5" cy="2.5" r="2.5" fill="#9C9C9C"/></svg></span>';
    return $tempo;
}

/*------------------------------------*\
    Actions
\*------------------------------------*/
// Add Actions
add_action('after_setup_theme', 'register_navwalker'); // Registra Walker de Navegação Personalizada
add_action('customize_register', 'customizer_removes', 50); // Remove static_front_page from Wp Customizer
add_action('init', 'duo_studio_theme_menu'); // Registra menu
add_action('init', 'Home_id'); // Return get_option('page_on_front')
add_action('wp_enqueue_scripts', 'wpassist_remove_block_library_css' ); // Remove Block Library CSS from WordPress
add_action('wp_enqueue_scripts', 'remove_global_styles' ); // Remove Global styles from WordPress

// Add Filters
add_filter('login_headertitle', 'change_login_headertitle'); // Change admin header title
add_filter('login_headerurl', 'change_login_headerurl'); // Change admin logo url
add_filter('script_loader_tag', 'script_defer_attribute', 10, 3); // Add defer to enqueued script
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('get_custom_logo', 'custom_logo'); // Custom logo

// Remove Actions
remove_action('wp_head', 'print_emoji_detection_script', 7); // Remove wp emoji
remove_action('wp_print_styles', 'print_emoji_styles'); // Remove wp emoji
remove_action('admin_print_scripts', 'print_emoji_detection_script' ); // Remove wp emoji
remove_action('admin_print_styles', 'print_emoji_styles' ); // Remove wp emoji

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});