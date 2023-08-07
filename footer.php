<footer class="footer-write">
  <section class="container-fluid">
    <div class="container">
      <div class="row logo-footer">
        <div class="col-12 col-md-6 d-flex">
          <img src="<?php bloginfo('template_url')?>/assets/img/logotipo.svg" alt="">
        </div>
        <div class="col-12 col-md-6">
        <a href="http://#" class="btn-whatspp-footer">
          Entre em Contato <i class="fab fa-whatsapp"></i>
          </a>

        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-4 institucional-footer">
          <p>
          Nossa empresa é especilizada em oferecer soluções em peças técnicas metálicas, que exijam precisão, qualidade e compromisso com o cliente
          </p>
        </div>
        <div class="col-1"></div>
        <div class="col-12 col-md-3">
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
        <div class="col-1"></div>
        <div class="col-12 col-md-3">

         
          <div class="endereco-footer">
            <h3><span>ONDE</span> ESTAMOS</h3>
            <p>R. Alice Cestari Mantovani, 611 - Desvio Rizzo, Caxias do Sul - RS, 95112-290</p>
          </div>

          <div class="endereco-footer">
            <h3><span>ENTRE EM</span> CONTATO</h3>
            <p>54 3289.2400 <br>
            <a href="mailto:contato@writetech.com.br">contato@writetech.com.br</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="button-footer container-fluid">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-12 col-md-2">
          <div class="redes-footer">
          <?php
            wp_nav_menu( array(
                'menu' => 'header-redes',
                'theme_location' => 'header-redes',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'justify-content-md-end',
                'container_id' => 'menu-redes',
                'menu_class' => 'menu-redes nav navbar-nav',
                )
            );
          ?>
          </div>
        </div>
        <div class="col-12 col-md-7">
          <div class="politicas-footer">
            <?php
              wp_nav_menu( array(
                  'menu' => 'footer-politicas',
                  'theme_location' => 'footer-politicas',
                  'depth' => 2,
                  'container' => 'div',
                  'container_class' => 'justify-content-md-end',
                  'container_id' => 'menu-redes',
                  'menu_class' => 'menu-redes nav navbar-nav',
                  )
              );
            ?>
          </div>
        </div>
        <div class="col-12 col-md-3 copy-right">
          <p>CNPJ: 28.330.251/0001-53 <br>
          © 2023, write Tece. Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </section>
</footer>

<a class="btn-whats" href="https://api.whatsapp.com/send?phone=555432892400" target="_blank">

        <i class="fab fa-whatsapp"></i>
</a>

<?php wp_footer(); ?>
</body>

</html>