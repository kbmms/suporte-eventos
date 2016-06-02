<?php get_header(); ?>
<div class="row contato-box-full" id="contato-go">
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


<div class="row">
  <div class="container-fluid bg-trabalhe-na-suporte">
        <?php query_posts('category_name=trabalhe-na-suporte&orderby=title&order=ASC' ); ?>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="container">
      <div class="col-md-6 col-md-offset-3 trabalhe-na-suporte-box text-center">
      <h3><?php the_title(); ?></h3>
      <?php the_content(); ?>
      </div>


    </div>
        <?php endwhile; else: ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
  </div>
</div>

<div class="como-chegar">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mapa_Como_Chegar.jpg" class="img-responsive" alt="">
</div>

<!--   <div class="row newsletter">
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
    </div> -->
    <div class="btn-fazer-pedido">
        <a href="http://suporteventos.com.br/acessorios">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/comprar1.png" height="100" width="130" alt="">
        </a>
    </div>
    <?php get_footer(); ?>