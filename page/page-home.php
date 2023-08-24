<?php
/**
 * Template Name: Home
 * Theme padrão desenvolvimento duo-studio WebPack
 *
 * @link https://duo-studio.com.br/
 *
 * @package duo-studio_theme
 *
 */

get_header();
?>
<!-- conteudo site -->
<main class="main">

<section class="container-fluid p-0 section-header-home">
  <div class="container ">
    <div class="row align-items-center">
      <div class="col-12 col-md-6 m-auto" data-aos="fade-left">
        <div class="content-header">
          <h1><?php the_field( 'titulo_header' ); ?></h1>
          <svg xmlns="http://www.w3.org/2000/svg" width="37" height="4" viewBox="0 0 37 4">
            <rect id="Retângulo_3" data-name="Retângulo 3" width="37" height="4" fill="#ffc43d"/>
          </svg>
          <p><?php the_field( 'subtitulo_header' ); ?></p>          
        </div>
      </div>
    </div>
  </div>
  <div class="img-paralax" style="background-image:url(<?php the_field( 'imagem_destaque_header' ); ?>);">
    <?php $link_cta_header = get_field( 'link_cta_header' ); ?>
    <?php if ( $link_cta_header ) : ?>
      <a class="btn-header" href="<?php echo esc_url( $link_cta_header) ; ?>"><?php the_field( 'texto_cta_header' ); ?></a>
    <?php endif; ?>
  </div>
  
</section>

<!-- section services home -->
<section class="container-fluid section-services-home">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 m-auto text-center" data-aos="fade-up">
        <h4><?php the_field( 'sub_titulo_services' ); ?></h4>
        <h2><?php the_field( 'titulo_services' ); ?></h2>
      </div>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="col-12 col-md-4">
        <a href="<?php  get_site_url(); ?>/service/content-writing-services/">
        <div class="box-services-home">
          <img src="<?php echo get_bloginfo('template_url') . '/assets/img/Technical-Documentation.png'; ?>" alt="">
          <div class="content-box">
            <h3>Technical Documentation</h3>
            <p>Embed professional technical writers into your team to collaborate and manage tech projects. We research, write, and edit documentation like:</p>
            <ul>
              <li><i class="fas fa-check"></i> API Documentation</li>
              <li><i class="fas fa-check"></i> User Guides</li>
              <li><i class="fas fa-check"></i> Tutorials</li>
              <li><i class="fas fa-check"></i> Technical Manuals</li>
            </ul>
            
          </div>
        </div>
        </a>
      </div>

      <div class="col-12 col-md-4">
      <a href="<?php  get_site_url(); ?>/service/content-writing-services/">
        <div class="box-services-home">
          <img src="<?php echo get_bloginfo('template_url') . '/assets/img/Content-Writing.png'; ?>" alt="">
          <div class="content-box">
            <h3>Content Writing</h3>
            <p>We will strategize and generate content that pushes prospects in your direction. Our content writers have experience with audiences in your industry and will create:</p>
            <ul>
              <li><i class="fas fa-check"></i> Blogs</li>
              <li><i class="fas fa-check"></i> Brochures</li>
              <li><i class="fas fa-check"></i> White Papers</li>
              <li><i class="fas fa-check"></i> LinkedIn Articles</li>
            </ul>
          </div>
        </div>
        </a>
      </div>

      <div class="col-12 col-md-4">
        <a href="<?php  get_site_url(); ?>/service/design-editing-services/">
        <div class="box-services-home">
          <img src="<?php echo get_bloginfo('template_url') . '/assets/img/Design-&-Editing.png'; ?>" alt="">
          <div class="content-box">
            <h3>Design & Editing</h3>
            <p>Our experienced designers and video editors will transform your ideas into captivating visual masterpieces to leave a lasting impression on your audience. We design and build:</p>
            <ul>
              <li><i class="fas fa-check"></i> Infographics</li>
              <li><i class="fas fa-check"></i> Posts for social media</li>
              <li><i class="fas fa-check"></i> Flyers</li>
              <li><i class="fas fa-check"></i> Brochures</li>
            </ul>
          </div>
        </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- section benefits  -->
<section class="container-fluid section-benefits">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 m-auto text-center" data-aos="fade-up">
        <h4><?php the_field( 'sub_titulo_benefits' ); ?></h4>
        <h2><?php the_field( 'titulo_benefits' ); ?></h2>
      </div>
    </div>

    <div class="row">
      <div class="content-box-benefits" data-aos="fade-up">
      <?php if (have_rows('benefits')) : ?>
        <?php while (have_rows('benefits')) : the_row(); ?>
          <div class="box-benefits">
            <img src="<?php echo the_sub_field('icone'); ?>" alt="">
            <p><?php echo the_sub_field('texto'); ?></p>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
    </div>

    <div class="row">
      <div class="col-12" data-aos="fade-up">        
        <?php $link_cta_benefits = get_field( 'link_cta_benefits' ); ?>
        <?php if ( $link_cta_benefits ) : ?>
          <a class="btn-bg-azul m-auto" href="<?php echo esc_url( $link_cta_benefits) ; ?>"><?php the_field( 'texto_cta_benefits' ); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- section about home -->
<section class="container section-about-home">
  <div class="row align-items-center">

    <div class="col-12 col-md-6" data-aos="fade-left">
      <div class="img-left">
        <img src="<?php the_field( 'imagem_destaque_about' ); ?>" alt="">
      </div>
    </div>

    <div class="col-12 col-md-6">
      <div class="content-text-right" data-aos="fade-right">
        <h4><?php the_field( 'sub_titulo_about' ); ?></h4>
        <h2><?php the_field( 'titulo_about' ); ?></h2>
        <p class="subtitile">
          <?php the_field( 'texto_destaque_about' ); ?>
        </p>
        <p><?php the_field( 'texto_about' ); ?></p>
        <br>
        <?php $link_cta_about = get_field( 'link_cta_about' ); ?>
        <?php if ( $link_cta_about ) : ?>
          <a class="btn-border-azul" href="<?php echo esc_url( $link_cta_about) ; ?>"><?php the_field( 'texto_cta_about' ); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- section cases -->
<section class="container section-cases-home">
  <div class="row align-items-center">  
    <div class="col-12 col-md-6 order-1 order-md-0" data-aos="fade-left">
      <div class="content-text-left">
        <h4><?php the_field( 'sub_titulo_cases' ); ?></h4>
        <h2><?php the_field( 'titulo_cases' ); ?></h2>
        <p class="subtitile">
        <?php the_field( 'texto_destaque_cases' ); ?>
        </p>
        <p><?php the_field( 'texto_cases' ); ?></p>
        <?php $link_cta_cases = get_field( 'link_cta_cases' ); ?>
        <?php if ( $link_cta_cases ) : ?>
          <a class="btn-border-azul" href="<?php echo esc_url( $link_cta_cases) ; ?>"><?php the_field( 'texto_cta_cases' ); ?></a>
        <?php endif; ?>
      </div>
    </div>

    <div class="col-12 col-md-6 order-0 order-md-1" data-aos="fade-right">
      <div class="img-right">
        <img src="<?php the_field( 'imagem_destaque_cases' ); ?>" alt="">
      </div>
    </div>
  </div>
</section>

<!-- section teans -->
<section class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-12" data-aos="fade-up">
        <div class="slide-teans">
          <?php if (have_rows('teans')) : ?>
            <?php while (have_rows('teans')) : the_row(); ?>
              <div class="item-team">
                <img src="<?php echo the_sub_field('thumb'); ?>" alt="">
                <h2><?php echo the_sub_field('nome'); ?></h2>
                <p class="cargo"><?php echo the_sub_field('cargo'); ?></p>
                <p><?php echo the_sub_field('descricao'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- section Docs -->
<section class="container-fluid section-docs-home" style="background-image:url(<?php the_field( 'image_fundo' ); ?>)">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 m-auto text-center" data-aos="fade-up">
        <h4><?php the_field( 'sub_titulo_docs' ); ?></h4>
        <h2><?php the_field( 'titulo_docs' ); ?></h2>
        <p><?php the_field( 'texto_docs' ); ?></p>
        <?php $link_cta_docs = get_field( 'link_cta_docs' ); ?>
        <?php if ( $link_cta_docs ) : ?>
          <a class="btn-amarelo-page" href="<?php echo esc_url( $link_cta_docs) ; ?>"><?php the_field( 'texto_cta_docs' ); ?></a>
        <?php endif; ?>        
      </div>
    </div>
  </div>
</section>

</main>
<script>
    var typed = new Typed('#element', {
      strings: ['clear', 'simple', 'global'],
      typeSpeed: 70,
      backDelay: 1700,
      loop: true,
    });
  </script>
<?php
get_footer();
?>