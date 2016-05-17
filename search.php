<?php get_header() ?>
<section id="primary" class="content-area">
  <div id="content" class="site-content" role="main">

    <?php if ( have_posts() ) : ?>

    <header class="page-header text-center">
      <h1 class="page-title"><?php printf( __( 'Resultados por: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
    </header><!-- .page-header -->

    <div class="container">          
      <div class="col-md-10 col-md-offset-1">
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="simpleCart_shelfItem col-md-6 col-sm-6 col-xs-8 col-xs-offset-2 produtos-box">
          <div class="imagem-produto">
            <a href="<?php the_permalink() ?>"class="item_thumb"><?php the_post_thumbnail(); ?></a>
          </div>
          <div class="texto-e-btn text-center">
            <h2 class="item_codigo"><?php the_field('cod'); ?></h2>
            <h4><a class="item_name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p><a  class="item_add btn-go" href="javascript:;">Incluir no pedido</a></p>
            <p class="pull-right"> <a class="ver-evento" href="<?php the_permalink(); ?>">VEJA NO EVENTO</a></p>
          </div>
        </div>


        <?php endwhile; ?>



        <?php else : ?>
        <div class="nada-encontrado text-center">
        <br>
        <p><img src="http://suporteventos.com.br/wp-content/uploads/2016/05/logo-topo-1.png" alt=""></p>
        <h1>Desculpe, não econtrados nada com o termo inserido.</h1>
        <p><a href="http://suporteventos.com.br">Voltar para home</a></p>  
        <br>
        </div>
        

        <?php endif; ?>
      </div>

    </div>
    <?php get_footer(); ?>