





<footer>

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
    $('.enviado-com-sucesso a').click(function(){
              $('a:first-child').html('<a href="http://www.suporteventos.com.br">Voltar</a>');
            });

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


  // var imageHeight, wrapperHeight, overlap, container = $('.slider-box');

  //   function centerImage() {
  //       imageHeight = container.find('img').height();
  //       wrapperHeight = container.height();
  //       overlap = (wrapperHeight - imageHeight) / 2;
  //       container.find('img').css('margin-top', overlap);
  //   }

  //   $(window).on("load resize", centerImage);

  //   var el = document.getElementById('wrapper');
  //   if (el.addEventListener) {
  //       el.addEventListener("webkitTransitionEnd", centerImage, false); // Webkit event
  //       el.addEventListener("transitionend", centerImage, false); // FF event
  //       el.addEventListener("oTransitionEnd", centerImage, false); // Opera event
  //   }

  });
  simpleCart.bind('beforeCheckout', function (data) {
    data.nome = document.getElementById("nome").value;
    data.empresa = document.getElementById("empresa").value;
    data.email = document.getElementById("email").value;
    data.telefone = document.getElementById("telefone").value;
    data.comments = document.getElementById("comments").value;
    data.celular = document.getElementById("celular").value;
    data.cidade = document.getElementById("cidade").value;
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