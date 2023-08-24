<footer class="footer-write">
  <section class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4 newsletter-footer">
          <h2>Newsletter</h2>
          <?php echo do_shortcode( '[contact-form-7 id="4d6f9e8" title="Newsletter"]' ); ?>
          <ul class="redes-footer">
            <li><a href="#facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#twitter"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#linkedin"><i class="fab fa-linkedin-in"></i></a></li>
          </ul>
        </div>
        <div class="col-12 col-md-2">
          <div class="navfooter-nav">
            <?php
              wp_nav_menu( array(
                'menu' => 'footer',
                'theme_location' => 'footer',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'menu-footer',
                'container_id' => 'menu-footer',
                'menu_class' => 'menu-footer nav navbar-nav',
                )
              );
            ?>
          </div>
        </div>
        <div class="col-12 col-md-3">
          <div class="navfooter-nav-service">
            <?php
              wp_nav_menu( array(
                'menu' => 'footer-service',
                'theme_location' => 'footer-service',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'menu-footer',
                'container_id' => 'menu-footer-service',
                'menu_class' => 'menu-footer menu-footer-service nav navbar-nav',
                )
              );
            ?>
          </div>
        </div>
        <div class="col-12 col-md-3">         
          <div class="endereco-footer">
            <h3>BRAZILIAN OFFICE</h3>
            <p>Write Choice Ltda Rua Jornalista Tito Carvalho 155, Florianópolis, Brazil</p>
          </div>

          <div class="endereco-footer">
            <h3>E-MAIL</h3>            
            <a href="mailto:cassiano@writechoice.com.br">cassiano@writechoice.com.br</a></p>
          </div>

          <div class="endereco-footer">
            <h3>WHATSAPP</h3>            
            <a href="tel: +55 46 99927-4442">+55 46 99927-4442</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="button-footer container-fluid">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-12 copy-right">
          <img src="<?php echo get_bloginfo('template_url') . '/assets/img/write-choice-footer.png'; ?>" alt="">
          <p>© 2023, White Choice. Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </section>
</footer>

<a class="btn-flutuante" href="/contato">
  Start Your Project
</a>

<?php wp_footer(); ?>
</body>

</html>