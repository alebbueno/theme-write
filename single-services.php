<?php get_header();

get_header();
$featured_image_url = get_the_post_thumbnail_url();
?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


<!-- conteudo site -->
<main class="main">

<section class="container-fluid header-page">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
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
    <div class="col-12">
      <h2><?php the_field( 'sub_titulo' ); ?></h2>
      <p><?php the_field( 'texto_destaque' ); ?></p>
    </div>
  </div>
</section>

<!-- section servicos -->
<section class="container-fluid">
  <div class="container section-servicos" >
    <?php if (have_rows('servicos')) : ?>
      <?php $numero = 0; ?>    
      <?php while (have_rows('servicos')) : the_row(); ?>
        <?php $numero++; ?>         
        <?php if ($numero % 2 == 0) { ?>
          <div class="item-servicos" id="usinagem">
            <div class="row">              
              <div class="col-12 col-md-6" data-aos="fade-left">
                <div class="content-servicos">
                  <img class="img-fluid" src="<?php echo the_sub_field( 'imagem_texto' ); ?>" alt="">
                  <h2><?php echo the_sub_field( 'titulo' ); ?></h2>

                  <?php echo the_sub_field( 'texto' ); ?>

                  <?php $link_cta = get_sub_field( 'link_cta' ); ?>
                  <?php if ( $link_cta ) : ?>
                    <a href="<?php echo esc_url( $link_cta) ; ?>"><?php the_sub_field( 'texto_cta' ); ?></a>
                  <?php endif; ?>    
                </div>
              </div>
              <div class="col-12 col-md-6" data-aos="fade-right">
                <img class="img-fluid" src="<?php echo the_sub_field( 'imagem_destaque' ); ?>" alt="">
              </div>
            </div>
          </div>
        <?php } else { ?>
          <div class="item-servicos" id="usinagem">
            <div class="row">
              <div class="col-12 col-md-6" data-aos="fade-left">
                <img class="img-fluid" src="<?php echo the_sub_field( 'imagem_destaque' ); ?>" alt="">
              </div>
              <div class="col-12 col-md-6" data-aos="fade-right">
                <div class="content-servicos">
                  <img class="img-fluid" src="<?php echo the_sub_field( 'imagem_texto' ); ?>" alt="">
                  <h2><?php echo the_sub_field( 'titulo' ); ?></h2>

                  <?php echo the_sub_field( 'texto' ); ?>

                  <?php $link_cta = get_sub_field( 'link_cta' ); ?>
                  <?php if ( $link_cta ) : ?>
                    <a href="<?php echo esc_url( $link_cta) ; ?>"><?php the_sub_field( 'texto_cta' ); ?></a>
                  <?php endif; ?>    

                </div>
              </div>
            </div>
          </div>
        <?php }?>
      <?php endwhile; ?>
    <?php endif; ?>  
        
  </div>
</section>

<!-- section teans -->
<section class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="slide-teans">
          <?php if (have_rows('teans', Home_id())) : ?>
            <?php while (have_rows('teans', Home_id())) : the_row(); ?>
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

<!-- section benefits  -->
<section class="container-fluid section-benefits">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 m-auto text-center">
        <h4><?php the_field( 'sub_titulo_benefits' ); ?></h4>
        <h2><?php the_field( 'titulo_benefits' ); ?></h2>
      </div>
    </div>

    <div class="row">
      <div class="content-box-benefits">
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
      <div class="col-12">        
        <?php $link_cta_benefits = get_field( 'link_cta_benefits' ); ?>
        <?php if ( $link_cta_benefits ) : ?>
          <a class="btn-bg-azul m-auto" href="<?php echo esc_url( $link_cta_benefits) ; ?>"><?php the_field( 'texto_cta_benefits' ); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- section services home -->
<section class="container-fluid section-services-home">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 m-auto text-center">
        <h4><?php the_field( 'sub_titulo_services' ); ?></h4>
        <h2><?php the_field( 'titulo_services' ); ?></h2>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-4">
        <div class="box-services-home">
          <img src="<?php echo get_bloginfo('template_url') . '/assets/img/Technical-Documentation.png'; ?>" alt="">
          <div class="content-box">
            <h3>Technical Documentation</h3>
            <p>Embed professional technical writers into your team to collaborate and manage tech projects. We research, write, and edit documentation like:</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="box-services-home">
          <img src="<?php echo get_bloginfo('template_url') . '/assets/img/Technical-Documentation.png'; ?>" alt="">
          <div class="content-box">
            <h3>Technical Documentation</h3>
            <p>Embed professional technical writers into your team to collaborate and manage tech projects. We research, write, and edit documentation like:</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="box-services-home">
          <img src="<?php echo get_bloginfo('template_url') . '/assets/img/Technical-Documentation.png'; ?>" alt="">
          <div class="content-box">
            <h3>Technical Documentation</h3>
            <p>Embed professional technical writers into your team to collaborate and manage tech projects. We research, write, and edit documentation like:</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</main>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>