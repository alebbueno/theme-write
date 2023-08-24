<?php
/**
 * Template Name: Serviços
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
    <div class="col-12 col-md-6 m-auto text-center" data-aos="fade-up">
      <h4>YOUR PROJECT NEEDS</h4>
      <h2>Best-in-class Technical Writing Services</h2>
    </div>
  </div>
</section>

<!-- section services home -->
<section class="container-fluid section-services-home section-services">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 m-auto text-center">
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

</main>
<?php
get_footer();
?>