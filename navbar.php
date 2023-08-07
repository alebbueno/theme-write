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

<nav id="main-nav" class="navbar navbar-expand-lg">

    <!-- Logo  -->
    <div id="logo">
        <?php if (has_custom_logo() && function_exists('custom_logo')) { the_custom_logo(); } else { ?>
            <a class="duo-studio-logo-link"  href="<?php echo get_site_url(); ?>" rel="home" itemprop="url">
                <img class="duo-studio-logo" src="<?php bloginfo('template_directory'); ?>/assets/img/Logo.png" width="186" height="45" alt="Logo da duo-studio" />
            </a>
        <?php } ?>
    </div>

    <!-- Main menu  -->
    <?php
        wp_nav_menu( array(
            'theme_location'	=> 'principal',
            'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
            'container'			=> 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'		=> 'menu-duostudio-fixed',
            'menu_class'        => 'navbar-nav',
            'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
            'walker'			=> new WP_Bootstrap_Navwalker()
        ) );
    ?>

</nav>
