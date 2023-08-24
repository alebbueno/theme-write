<?php get_header(); 
// Single post geral
$post_id = get_the_ID();
$post_url = get_permalink($post_id);

$categories = get_the_category();
?>
<!-- conteudo site -->
<main class="main">
<section class="container-fluid header-page-blog">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-5 m-auto text-center">
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

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<section class="container content-single">
  <div class="row">
    <div class="col-12 col-md-8">
      <div class="content-blog-post">
      
        <h1><?php the_title(); ?></h1>

        <div class="share-to-back">    
          <ul class="wrap_btns_social">
            <li>Share on:</li>
            <li>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>">

                <svg xmlns="http://www.w3.org/2000/svg" width="8.931" height="16.676" viewBox="0 0 8.931 16.676">
                  <path id="facebook-f-brands" d="M31.236,9.38,31.7,6.362H28.8V4.4a1.509,1.509,0,0,1,1.7-1.63h1.316V.2A16.054,16.054,0,0,0,29.485,0C27.1,0,25.541,1.445,25.541,4.062v2.3H22.89V9.38h2.651v7.3H28.8V9.38Z" transform="translate(-22.89)" fill="#395196"/>
                </svg>
                </a>
            </li>

            <li>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $post_url; ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18.472" height="18.472" viewBox="0 0 18.472 18.472">
                    <path id="linkedin-in-brands" d="M4.135,18.482H.305V6.149h3.83ZM2.218,4.467A2.228,2.228,0,1,1,4.436,2.228,2.237,2.237,0,0,1,2.218,4.467Zm16.25,14.015H14.647v-6c0-1.431-.029-3.266-1.991-3.266-1.991,0-2.3,1.554-2.3,3.163v6.107H6.534V6.149h3.673V7.831h.054A4.024,4.024,0,0,1,13.884,5.84c3.876,0,4.588,2.552,4.588,5.867v6.774Z" transform="translate(0 -0.01)" fill="#3d83d9"/>
                  </svg>
                </a>
            </li>

            <li>
                <a href="https://wa.me/?text=<?php echo $post_url; ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18.006" height="14.624" viewBox="0 0 18.006 14.624">
                    <path id="twitter-brands" d="M16.155,51.727c.011.16.011.32.011.48a10.428,10.428,0,0,1-10.5,10.5A10.429,10.429,0,0,1,0,61.05a7.634,7.634,0,0,0,.891.046,7.391,7.391,0,0,0,4.582-1.577,3.7,3.7,0,0,1-3.45-2.559,4.653,4.653,0,0,0,.7.057,3.9,3.9,0,0,0,.971-.126A3.691,3.691,0,0,1,.731,53.269v-.046a3.717,3.717,0,0,0,1.668.468,3.7,3.7,0,0,1-1.143-4.936,10.49,10.49,0,0,0,7.609,3.862,4.166,4.166,0,0,1-.091-.845,3.694,3.694,0,0,1,6.387-2.525,7.266,7.266,0,0,0,2.342-.891,3.68,3.68,0,0,1-1.622,2.034,7.4,7.4,0,0,0,2.125-.571A7.933,7.933,0,0,1,16.155,51.727Z" transform="translate(0 -48.082)" fill="#00a9ff"/>
                  </svg>
                </a>
            </li>

            <li>
                <a href="https://wa.me/?text=<?php echo $post_url; ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16.606" height="16.606" viewBox="0 0 16.606 16.606">
                    <path id="whatsapp-brands" d="M14.119,34.413a8.232,8.232,0,0,0-12.951,9.93L0,48.606l4.363-1.145a8.2,8.2,0,0,0,3.933,1h0a8.177,8.177,0,0,0,5.82-14.049ZM8.3,47.076a6.827,6.827,0,0,1-3.484-.953l-.248-.148-2.587.678.689-2.524-.163-.259a6.853,6.853,0,1,1,12.711-3.636A6.916,6.916,0,0,1,8.3,47.076Zm3.751-5.123c-.2-.1-1.216-.6-1.4-.667s-.326-.1-.463.1-.53.667-.652.808-.241.156-.445.052a5.6,5.6,0,0,1-2.8-2.446c-.211-.363.211-.337.6-1.123a.381.381,0,0,0-.019-.36c-.052-.1-.463-1.116-.634-1.527s-.337-.345-.463-.352-.256-.007-.393-.007a.762.762,0,0,0-.549.256,2.311,2.311,0,0,0-.719,1.716,4.028,4.028,0,0,0,.838,2.128,9.188,9.188,0,0,0,3.514,3.106,4.024,4.024,0,0,0,2.469.515,2.106,2.106,0,0,0,1.386-.979,1.72,1.72,0,0,0,.119-.979C12.392,42.1,12.255,42.053,12.051,41.953Z" transform="translate(0 -32)" fill="#00b456"/>
                  </svg>
                </a>
            </li>
          </ul>
          
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="6.866" height="11.313" viewBox="0 0 6.866 11.313">
              <path id="chevron-up-solid" d="M11.754,123.677l5.035,5.035a.622.622,0,0,1,0,.879l-.587.587a.622.622,0,0,1-.878,0l-4.009-3.99L7.3,130.18a.622.622,0,0,1-.878,0l-.587-.587a.622.622,0,0,1,0-.879l5.035-5.035a.622.622,0,0,1,.879,0Z" transform="translate(-123.495 16.971) rotate(-90)" fill="#ffc43d"/>
            </svg>
            Go back to the blog
          </a>
        </div>

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

        <div class="content-single-post">
          <?php the_content(); ?>
        </div>

      </div>
    </div>

    <div class="col-12 col-md-1"></div>

    <div class="col-12 col-md-3">
      <?php get_sidebar(); ?>
    </div>
    
  </div>
</section>




<?php endwhile; ?>
<?php endif; ?>

</main>
<?php get_footer(); ?>