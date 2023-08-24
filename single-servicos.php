<?php get_header();

get_header();
$featured_image_url = get_the_post_thumbnail_url();
?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


<!-- conteudo site -->
<main class="main">

<section class="container-fluid header-page header-service">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center" data-aos="fade-up">
        <h1>Services</h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="4" viewBox="0 0 37 4">
          <rect id="Retângulo_3" data-name="Retângulo 3" width="37" height="4" fill="#ffc43d"/>
        </svg>
      </div>
    </div>
  </div>
</section>

<section class="container">
  <div class="row section-case">
    <div class="col-12 col-md-6 m-auto text-center" data-aos="fade-up">
      <h4><?php the_field( 'sub_titulo' ); ?></h4>
      <h2><?php the_field( 'texto_destaque' ); ?></h2>
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
          <div class="item-servicos section-about-home" id="usinagem">
            <div class="row align-items-center">              
              <div class="col-12 col-md-6" data-aos="fade-left">
                <div class="content-servicos">
                  <div class="content-text-left">
                    <img class="img-fluid" src="<?php echo the_sub_field( 'imagem_texto' ); ?>" alt="">
                    <h2><?php echo the_sub_field( 'titulo' ); ?></h2>

                    <?php echo the_sub_field( 'texto' ); ?>

                    <?php $link_cta = get_sub_field( 'link_cta' ); ?>
                    <?php if ( $link_cta ) : ?>
                      <a class="btn-border-azul" href="<?php echo esc_url( $link_cta) ; ?>"><?php the_sub_field( 'texto_cta' ); ?></a>
                    <?php endif; ?>  
                  </div>  
                </div>
              </div>
              <div class="col-12 col-md-6" data-aos="fade-right">
                <div class="img-right">
                  <img class="img-fluid" src="<?php echo the_sub_field( 'imagem_destaque' ); ?>" alt="">
                </div>
              </div>
            </div>
          </div>
        <?php } else { ?>
          <div class="item-servicos section-about-home" id="usinagem">
            <div class="row align-items-center">
              <div class="col-12 col-md-6" data-aos="fade-left">
                <div class="img-left">
                  <img class="img-fluid" src="<?php echo the_sub_field( 'imagem_destaque' ); ?>" alt="">
                </div>
              </div>
              <div class="col-12 col-md-6" data-aos="fade-right">
                <div class="content-servicos">
                  <div class="content-text-right">
                    <img class="img-fluid" src="<?php echo the_sub_field( 'imagem_texto' ); ?>" alt="">
                    <h2><?php echo the_sub_field( 'titulo' ); ?></h2>

                    <?php echo the_sub_field( 'texto' ); ?>

                    <?php $link_cta = get_sub_field( 'link_cta' ); ?>
                    <?php if ( $link_cta ) : ?>
                      <a class="btn-border-azul" href="<?php echo esc_url( $link_cta) ; ?>"><?php the_sub_field( 'texto_cta' ); ?></a>
                    <?php endif; ?>    
                  </div>
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
      <div class="col-12" data-aos="fade-up">
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
      <div class="col-12 col-md-8 m-auto text-center" data-aos="fade-up">
        <h4><?php the_field( 'sub_titulo_benefits', Home_id() ); ?></h4>
        <h2><?php the_field( 'titulo_benefits', Home_id() ); ?></h2>
      </div>
    </div>

    <div class="row">
      <div class="content-box-benefits">
      <?php if (have_rows('benefits', Home_id())) : ?>
        <?php while (have_rows('benefits', Home_id())) : the_row(); ?>
          <div class="box-benefits" data-aos="fade-up">
            <img src="<?php echo the_sub_field('icone'); ?>" alt="">
            <p><?php echo the_sub_field('texto'); ?></p>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
    </div>

  </div>
</section>


</main>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>