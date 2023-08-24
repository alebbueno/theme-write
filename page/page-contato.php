<?php
/**
 * Template Name: Contato
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
  <div class="row section-contact">
    <div class="col-12 col-md-8 m-auto text-center" data-aos="fade-up">
      <h4><?php the_field( 'sub_titulo_form' ); ?></h4>
      <h2><?php the_field( 'titulo_form' ); ?></h2>
    </div>
  </div>

  <div class="row">
    <div class="col-12" data-aos="fade-up">      
      <?php echo do_shortcode(get_field('embed_cf7'));  ?>
    </div>
  </div>
</section>

<!-- section dados contato -->
<section class="container-fluid section-box-contato">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4">
        <div class="box-contato" data-aos="fade-up">
          <img src="<?php the_field( 'icone_telefone' ); ?>" alt="">
          <h3><?php the_field( 'telefone' ); ?></h3>
          <p><?php the_field( 'texto_telefone' ); ?></p>
        </div>
      </div>

      <div class="col-12 col-md-4" data-aos="fade-up">
        <div class="box-contato">
          <img src="<?php the_field( 'icone_email' ); ?>" alt="">
          <h3><?php the_field( 'email' ); ?></h3>
          <p><?php the_field( 'texto_email' ); ?></p>
        </div>
      </div>

      <div class="col-12 col-md-4" data-aos="fade-up">
        <div class="box-contato">
          <img src="<?php the_field( 'icone_endereco' ); ?>" alt="">
          <h3><?php the_field( 'endereco' ); ?></h3>
          <p><?php the_field( 'texto_endereco' ); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="mapa" style="background-image:url(<?php echo the_field( 'imagem_mapa' ); ?>);">  
</div>

</main>
<?php
get_footer();
?>