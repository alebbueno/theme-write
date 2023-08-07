<?php 
    get_header(); 
    $selectCat = get_queried_object();
?>
    <section class="container-fluid content-banner-blog-categoria">
        <div class="container">
            <div class="m-auto">
                <h1>Aqui estão os <br>resultados para:</h1>
                <p><?php single_cat_title( '', true ); ?></p>
            </div>
        </div>
    </section>

    <section class="container-fluid content-categoria-blog">
        <div class="container">
            <div class="row">
                <?php
                $getPost = array(
                    'cat' => $selectCat->cat_ID,
                    'posts_per_page' => 9
                );
                $query = new WP_Query($getPost);
                $totalPages = $query->max_num_pages;
                if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                        get_template_part( 'template-parts/content-listagem', get_post_format() );
                    endwhile;
                endif; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>