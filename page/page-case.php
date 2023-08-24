<?php
/**
 * Template Name: Cases
 * Theme padrão desenvolvimento duo-studio WebPack
 *
 * @link https://duo-studio.com.br/
 *
 * @package duo-studio_theme
 *
 */

get_header();
$featured_image_url = get_the_post_thumbnail_url();
?>

<!-- conteudo site -->
<main class="main">

<section class="container-fluid header-page">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center" data-aos="fade-up">
        <h1><?php the_title(); ?></h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="4" viewBox="0 0 37 4">
          <rect id="Retângulo_3" data-name="Retângulo 3" width="37" height="4" fill="#ffc43d"/>
        </svg>
      </div>
    </div>
  </div>
</section>

<section class="container">
  <div class="row section-case">
    <div class="col-12 col-md-4 m-auto text-center" data-aos="fade-up">
      <h4><?php the_field( 'sub_titulo' ); ?></h4>
      <h2><?php the_field( 'texto_destaque' ); ?></h2>
    </div>
  </div>
</section>

<!-- section cases -->
<section class="container-fluid">
  <div class="container" >
    <?php if (have_rows('cases')) : ?>
      <?php $numero = 0; ?>    
      <?php while (have_rows('cases')) : the_row(); ?>
        <?php $numero++; ?>         
        <?php if ($numero % 2 == 0) { ?>
          <div class="section-cases" >
            <div class="row align-items-center">              
              <div class="col-12 col-md-6 order-1 order-md-0" data-aos="fade-left">
                <div class="content-text-left content-cases">
                  <img class="img-fluid" src="<?php echo the_sub_field( 'imagem_texto' ); ?>" alt="">
                  <h2><?php echo the_sub_field( 'titulo' ); ?></h2>

                  <?php echo the_sub_field( 'texto' ); ?>

                </div>
              </div>
              <div class="col-12 col-md-6 order-0 order-md-1" data-aos="fade-right">
                <div class="img-right">
                  <img class="img-fluid" src="<?php echo the_sub_field( 'imagem_destaque' ); ?>" alt="">
                </div>
              </div>
            </div>
          </div>
        <?php } else { ?>
          <div class="section-cases" >
            <div class="row align-items-center">
              <div class="col-12 col-md-6" data-aos="fade-left">
                <div class="img-left">
                  <img class="img-fluid" src="<?php echo the_sub_field( 'imagem_destaque' ); ?>" alt="">
                </div>
              </div>
              <div class="col-12 col-md-6" data-aos="fade-right">
                <div class="content-text-right content-cases">
                  <img class="img-fluid" src="<?php echo the_sub_field( 'imagem_texto' ); ?>" alt="">
                  <h2><?php echo the_sub_field( 'titulo' ); ?></h2>

                  <?php echo the_sub_field( 'texto' ); ?>

                </div>
              </div>
            </div>
          </div>
        <?php }?>
      <?php endwhile; ?>
    <?php endif; ?>  
        
  </div>
</section>

</main>
<?php
get_footer();
?>