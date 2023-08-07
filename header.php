<?php
/**
 *
 * Theme padrão desenvolvimento duo-studio WebPack
 *
 * @link https://duo-studio.com.br/
 *
 * @package duo-studio_theme
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="masthead">
        <div class="container-fluid content-menu-header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light d-block d-md-flex px-0 justify-content-between">

                    <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) { ?>
                        <a href="<?php echo home_url(); ?>">
                            <img class="img-fluid" alt=""
                                src="<?php echo esc_url( $logo[0] ); ?>">
                        </a>                        
                    <?php } ?>
                    
                    <div class="content-menu">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu-mobile" aria-controls="menu-mobile" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="navbar-nav collapse navbar-collapse" id="menu-mobile">
                            <div class="nav-header">
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'principal',
                                        'depth' => 2,
                                        'container' => 'div',
                                        'container_class' => 'justify-content-md-end menu-header',
                                        'container_id' => 'menu-header',
                                        'menu_class' => 'nav navbar-nav',
                                        'fallback_cb'   => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker' => new WP_Bootstrap_Navwalker())
                                    );
                                ?>
                            </div>
                            <div class="redes-sociais">
                                <?php
                                    wp_nav_menu( array(
                                        'menu' => 'header-redes',
                                        'theme_location' => 'header-redes',
                                        'depth' => 2,
                                        'container' => 'div',
                                        'container_class' => 'justify-content-md-end',
                                        'container_id' => 'menu-redes',
                                        'menu_class' => 'menu-redes nav navbar-nav',
                                        )
                                    );
                                ?>
                            </div>
                        </div>
                    </div>
                    
                </nav>
            </div>
        </div>
    </header><!-- #masthead -->