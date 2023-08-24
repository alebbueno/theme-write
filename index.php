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

get_header();
?>

<section class="container-fluid header-page-blog">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-5 m-auto text-center" data-aos="fade-up">
        <h1>Blog</h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="4" viewBox="0 0 37 4">
          <rect id="Retângulo_3" data-name="Retângulo 3" width="37" height="4" fill="#ffc43d"/>
        </svg>
        <p>Discover the latest and most important updates and fresh content on our blog.</p>
      </div>
    </div>
  </div>
</section>
<div class="bg-header-blog" style="background-image:url(<?php echo get_bloginfo('template_url') . '/assets/img/bg-header-blog.jpg'; ?>);"></div>

<section class="container">
  <div class="content-post-destaque">
    <?php 
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'orderby' => 'date', // Ordenar por data
        'order' => 'DESC', // Ordem decrescente para obter o último post
      );

      $last_post_query = new WP_Query($args);

      if ($last_post_query->have_posts()) {
        while ($last_post_query->have_posts()) {
            $last_post_query->the_post();
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            // Exibir a categoria do post
            $categories = get_the_category();

            ?>

          <div class="row">
            <div class="col-12 col-md-6" data-aos="fade-left">
              <img class="img-fluid" src="<?php echo $thumbnail_url; ?>" alt="">
            </div>

            <div class="col-12 col-md-6" data-aos="fade-right">
              <div class="text-post-destaque">
                <div class="data-categoria">
                  <div>
                    <i class="far fa-calendar-alt"></i>
                    <?php echo get_the_date(); ?>
                  </div>
                  <div>
                    <i class="fas fa-tag"></i>
                    <?php echo esc_html($categories[0]->name); ?>
                  </div>
                </div>

                <h2><?php the_title(); ?></h2>

                <p><?php echo get_excerpt(255, get_the_content()); ?></p>

                <a href="<?php echo get_permalink(); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="46" height="3" viewBox="0 0 46 3">
                    <rect id="Retângulo_2562" data-name="Retângulo 2562" width="46" height="3" rx="1.5" fill="#425768"/>
                  </svg> Read more
                </a>
              </div>
            </div>
          </div>
        <?php }
        wp_reset_postdata();
      }
    ?>
  </div>
</section>

<section class="container section-featured">
  <div class="row">
    <div class="col-12" data-aos="fade-up">
      <h2>Featured Content</h2>
    </div>
  </div>
  <div class="content-post-featured">
    <?php 
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'category_name' => 'Featured', // Nome da categoria desejada
        'orderby' => 'date', // Ordenar por data
        'order' => 'DESC', // Ordem decrescente para obter os últimos posts
      );

      $last_post_query = new WP_Query($args);

      if ($last_post_query->have_posts()) {
        while ($last_post_query->have_posts()) {
            $last_post_query->the_post();
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            // Exibir a categoria do post
            $categories = get_the_category();

            ?>
          <a href="<?php echo get_permalink(); ?>">
            <div class="row" data-aos="fade-up">
              <div class="col-12 col-md-4">
                <img class="img-fluid" src="<?php echo $thumbnail_url; ?>" alt="">
              </div>

              <div class="col-12 col-md-8">
                <div class="text-post-featured">
                  <div class="data-categoria">
                    <div><?php echo get_the_date(); ?></div>
                    <div><?php echo esc_html($categories[0]->name); ?></div>
                  </div>

                  <h2><?php the_title(); ?></h2>

                  <p><?php echo get_excerpt(255, get_the_content()); ?></p>
                </div>
              </div>
            </div>
          </a>
        <?php }
        wp_reset_postdata();
      }
    ?>
  </div>
</section>

<section class="container section-latest">
  <div class="row">
    <div class="col-12" data-aos="fade-up">
      <h2>Latest Contents</h2>
    </div>
  </div>
  <div class="content-post-latest">
    <?php 
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'orderby' => 'date', // Ordenar por data
        'order' => 'DESC', // Ordem decrescente para obter os últimos posts
        'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
      );

      $last_post_query = new WP_Query($args);

      if ($last_post_query->have_posts()) {
        while ($last_post_query->have_posts()) {
            $last_post_query->the_post();
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            // Exibir a categoria do post
            $categories = get_the_category();

            ?>
          <a href="<?php echo get_permalink(); ?>" >
            <div class="row" data-aos="fade-up">            
              <div class="col-12 col-md-5">
                <img class="img-fluid" src="<?php echo $thumbnail_url; ?>" alt="">
              </div>

              <div class="col-12 col-md-7">
                <div class="text-post-latest">
                  <div class="data-categoria">
                    <div><?php echo get_the_date(); ?></div>
                    <div><?php echo esc_html($categories[0]->name); ?></div>
                  </div>

                  <h2><?php the_title(); ?></h2>

                  <p><?php echo get_excerpt(255, get_the_content()); ?></p>
                </div>
              </div>            
            </div>
          </a>
        <?php }
        wp_reset_postdata();
      }
    ?>
  </div>

  <div class="more-posts">

  </div>

  <div class="row row-loadmore">
    <div class="col-12 text-center" data-aos="fade-up">
      <button class="btn-load-more-posts">Load more content +</button>
    </div>
  </div>
</section>

<section class="container-fluid section-newsletter-blog">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-3" data-aos="fade-left">
        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="4" viewBox="0 0 37 4">
          <rect id="Retângulo_3" data-name="Retângulo 3" width="37" height="4" fill="#ffc43d"/>
        </svg>
        <h3>Subscribe to our newsletter</h3>
      </div>

      <div class="col-12 col-md-9" data-aos="fade-right">
        <div class="form-newsletter-blog">
          <?php echo do_shortcode( '[contact-form-7 id="8dec321" title="Newsletter Blog"]' ); ?>          
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>