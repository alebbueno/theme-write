<?php
/**
 * Template Name: About
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

<!-- section our team -->
<section class="container section-about-home">
  <div class="row align-items-center">
    <div class="col-12 col-md-6" data-aos="fade-left">
      <div class="img-left">
        <img src="<?php the_field( 'imagem_destaque_team' ); ?>" alt="">
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="content-text-right" data-aos="fade-right">
        <h2><?php the_field( 'titulo_team' ); ?></h2>
        <p class="texto-detalhe">
          <?php the_field( 'texto_destaque_team' ); ?>
        </p>
        <?php the_field( 'texto_team' ); ?>
      </div>
    </div>
  </div>
</section>

<!-- section who we are -->
<section class="container  section-about-home">
  <div class="row align-items-center">
    <div class="col-12 col-md-6 order-1 order-md-0" data-aos="fade-left">
      <div class="content-text-left">
        <h2><?php the_field( 'titulo_who' ); ?></h2>
        <p class="texto-detalhe">
          <?php the_field( 'texto_destaque_who' ); ?>
        </p>

        <?php the_field( 'texto_who' ); ?>
      </div>
    </div>

    <div class="col-12 col-md-6 order-0 order-md-1" data-aos="fade-right">
      <div class="img-right">
        <img src="<?php the_field( 'imagem_destaque_who' ); ?>" alt="">
      </div>
    </div>
  </div>
</section>

<!-- section our team -->
<section class="container section-about-team">
  <div class="row">
    <div class="col-12 text-center" data-aos="fade-up">
      <h4><?php the_field( 'sub_titulo_team' ); ?></h4>
      <h2><?php the_field( 'titulo_team' ); ?></h2>
    </div>
  </div>

  <div class="row">
      <?php if (have_rows('team')) : ?>
        <?php while (have_rows('team')) : the_row(); ?>
          <div class="col-12 col-md-3" data-aos="fade-up">
            <div class="item-about-team">
              <img src="<?php echo the_sub_field('thumb'); ?>" alt="">
              <h3><?php echo the_sub_field('nome'); ?></h3>
              <span><?php echo the_sub_field('cargo'); ?></span>
              <a href="<?php echo the_sub_field('linkedin'); ?>" target="_blank">ACCESS LINKEDIN <i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
  </div>
</section>


<!-- section abouts -->
<section class="container-fluid section-abouts">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 m-auto text-center" data-aos="fade-up">
        <h3><?php the_field( 'sub_titulo_abouts' ); ?></h3>
        <h2><?php the_field( 'titulo_abouts' ); ?></h2>
        <p><?php the_field( 'texto_abouts' ); ?></p>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="item-abouts" data-aos="fade-up">
          <?php if (have_rows('itens_abouts')) : ?>
            <?php while (have_rows('itens_abouts')) : the_row(); ?>
              <div class="about">
                <img src="<?php echo the_sub_field('icone'); ?>" alt="">
                <p><?php echo the_sub_field('texto'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="container-fluid p-0">
  <div class="slide-abouts">
    <?php //if (have_rows('imagens')) : ?>
      <?php //while (have_rows('imagens')) : the_row(); ?>
        <img src="<?php //echo the_sub_field('imagem'); ?>" alt="">
      <?php //endwhile; ?>
    <?php //endif; ?>
  </div>
</section> -->

</main>
<?php
get_footer();
?>