<div class="row contato-box-full">
  <div class="container" id="comochegar">
    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 box-como-chegar">
      <?php query_posts('category_name=contato&orderby=title&order=ASC' ); ?>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <div class="col-md-12 col-md-offset-0  col-sm-12 col-xs-12 text-center como-chegar-texto">
            <!--  <h2><?php the_title() ?></h2> -->
            <?php the_content(); ?>
          </div>
          <?php endwhile; else: ?>
            <?php endif; ?>
              <?php wp_reset_postdata();
  ?>
    </div>
  </div>
</div>


<div class="como-chegar">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mapa_Como_Chegar.jpg" class="img-responsive" alt="">
</div>


<footer>
  <div class="row newsletter">
    <div class="container-fluid">
      <div class="text-center col-md-4 col-md-offset-4">
        <h3>Inscreva-se em nossa newsletter</h3>
        <p>Informe seu nome e e-mail abaixo e receba novidades, produtos e ofertas.</p>
        <p>
          <input type="text" class="form-control" placeholder="nome">
          <br>
          <input type="text" class="form-control" placeholder="E-mail">
          <br>
          <button class="btn btn-primary">OK</button>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="container-fluid copyright-fluid">
        <div class="copyright container text-center">
          <p>Copyright © 2015 - Suporte Eventos. Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
    </footer>


  </div>




</div>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.12.3.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/simpleCart.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/tema.js"></script>


<script type="text/javascript">
  $(document).ready(function () {
    $('.imagem-produto img').addClass("item_thumb");
    $('.imagem-produto-single img').addClass("item_thumb");
    // Scroll the whole document
    // $('#box-links').localScroll({
    //    target:'body'

    // });

    // // Scroll the content inside the #scroll-container div
    // $('#small-box-links').localScroll({
    //    target:'#small-box-container'

    // });
  });
  simpleCart.bind('beforeCheckout', function (data) {
    data.nome = document.getElementById("nome").value;
    data.empresa = document.getElementById("empresa").value;
    data.email = document.getElementById("email").value;
    data.telefone = document.getElementById("telefone").value;
    data.comments = document.getElementById("comments").value;
    data.celular = document.getElementById("celular").value;
    data.cidade = document.getElementById("cidade").value;
    data.estado = document.getElementById("estado").value;
    data.data = document.getElementById("data").value;

  });
  $('.quantidade-itens-scroll').hide();
  $(document).scroll(function () {
    var y = $(this).scrollTop();

    if (y > 800) {
      $('.quantidade-itens-scroll').fadeIn();
      $('.quantidade-itens-scroll').show();
    } else {
      $('.quantidade-itens-scroll').fadeOut();
    }
  });
</script>
<?php wp_footer(); ?>
</body>

</html>