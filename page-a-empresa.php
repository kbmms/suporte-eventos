<?php get_header(); ?>
<div class="container-fluid aempresa-full">
<div class="container">
  <div class="col-md-10 col-md-offset-1">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="text-center aempresa-box">

     <h1><?php the_field('titulo_principal'); ?></h1>
     <?php the_content() ?>
<!--       <h1>A suporte Eventos</h1>
      <p>A Suporte Eventos é uma empresa especializada na locação de móveis, voltada para o atendimento a empresas e profissionais de festas e eventos, oferecendo uma diversidade de opções na escolha dos móveis em diversos estilos com design do contemporâneo ao clássico.</p>
      <p>O seu diferencial está na qualidade absoluta e elegância, que refletem uma sofisticada visão profissional de ambientação.</p>
      <p>A Suporte possui toda a estrutura necessária para atender eventos de pequeno, médio e grande porte, possuindo sede e logística própria.</p> -->
    </div>
  </div>

<!--   <div class="col-md-6 col-md-offset-3 telefones">

    <div class="tels col-md-4 text-center">
              <p>Fixo<br>
              <span><?php the_field('fixo_1'); ?></span><br><span><?php the_field('fixo_2'); ?></span></p>
              <p>Logística<br>
              <span><?php the_field('logistica_1'); ?></span>
              <span><?php the_field('logistica_2'); ?></span>
              </p>
    </div>
     <div class="tels col-md-4 text-center">
          <p>Vivo<br>
          <span><?php the_field('vivo_1'); ?></span>
          <span><?php the_field('vivo_2'); ?></span>
          <p>
            Oi <br>
            <span><?php the_field('oi_1'); ?></span><br>
            <span><?php the_field('oi_2'); ?></span>
          </p>
          </p>
    </div>
    <div class="tels col-md-4 text-center">
          <p>
            Tim <br>
            <span><span><?php the_field('tim_1'); ?></span><br><span><?php the_field('tim_2'); ?></span></span>
          </p>
          <p>
            Claro <br>
            <span><span><?php the_field('claro_1'); ?></span><br><span><?php the_field('claro_2'); ?></span></span>
          </p>
    </div>

  </div> -->

<!--   <div class="col-md-6 col-md-offset-3 telefones">

    <div class="tels col-md-4 text-center">
              <p>Fixo<br>
              <span>3287-1165</span></p>
              <p>Logística<br>
              <span>9212-9596</span><br>
              <span>8128-5105</span>
              </p>
    </div>
     <div class="tels col-md-4 text-center">
          <p>Vivo<br>
          <span>9966-1165</span>
          <span>9212-9272</span>
          <p>
            Oi <br>
            <span>8610-1165</span>
          </p>
          </p>
    </div>
    <div class="tels col-md-4 text-center">
          <p>
            Tim <br>
            <span>9242-3526</span>
          </p>
          <p>
            Claro <br>
            <span>8296-3003</span>
          </p>
    </div>

  </div> -->
</div>
<?php the_field('imagem_da_home'); ?>
</div>
 <?php endwhile; else : ?>
  <p><?php _e( 'Desculpa, nenhum post encontrado.' ); ?></p>
<?php endif; ?>
<div class="btn-fazer-pedido">
    <a href="http://suporteventos.com.br/acessorios">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/comprar1.png" height="100" width="130" alt="">
    </a>
</div>
<?php get_footer() ?>