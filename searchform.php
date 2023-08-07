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

<form action="<?php echo home_url( '/' ); ?>" method="get" accept-charset="utf-8" id="searchform" role="search">
    <div class="search-wp-class">
        <input type="search" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Pesquisar"/>
        <input type="submit" class="d-none" id="searchsubmit" value="" />
    </div>
</form>