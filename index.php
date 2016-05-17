<?php get_header(); ?>
<div class="row content-main">
    <div class="container-fluid">
        <div class="container  container-prod">
        <div class="stick-novidades">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/novidades-tag.png"  class="img-responsive" height="101" width="51" alt="">
        </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 novidades">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/novidades-1.jpg" class="img-responsive" height="240" width="940" alt="">
                </div>
            </div>

            <div class="row">
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <?php
                    $args = array(
                      'post_type' => 'page',
                      'orderby' => 'title',
                      'order' => 'ASC',
                      'post__in' => array(29,31,34,26,13,11,36)
                      );
                    query_posts($args);
                    ?>
                    <?php $my_query = new WP_Query($args);
                    while ($my_query->have_posts()) : $my_query->the_post();
                    $do_not_duplicate = $post->ID;?>

                            <a href="<?php the_permalink(); ?> ">
                                <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-1 box-mini-produtos">
                                    <div class="prod-main-img col-md-12 col-xs-12">
                                        <img class="img-responsive" src="<?php the_field('imagem_da_home'); ?>" alt="<?php the_title(); ?> ">
                                    </div>
                                    <div class="prod-main-link text-center">
                                      <p><span><?php the_title(); ?></span></p>
                                    </div>
                                </div>
                            </a>

                    <?php endwhile;
                        // Reset Post Data
                    wp_reset_postdata();
                    ?>

<!--                 <a href="http://suporteventos.com.br/acessorios/">
                    <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-1 box-mini-produtos">
                        <div class="prod-main-img col-md-12 col-xs-12">
                            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/acessorios.jpg" alt="">
                        </div>
                        <div class="prod-main-link text-center">
                          <p><span>Acessórios</span></p>
                        </div>
                    </div>
                </a>

                <a href="http://suporteventos.com.br/bares">
                    <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-1 box-mini-produtos">
                        <div class="prod-main-img col-md-12 col-xs-12">
                            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/bares.jpg" alt="">
                        </div>
                        <div class="prod-main-link text-center">
                          <p><span>Bares</span></p>
                        </div>
                    </div>
                </a>

                <a href="http://suporteventos.com.br/cadeiras">
                    <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-1 box-mini-produtos">
                        <div class="prod-main-img col-md-12 col-xs-12">
                            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cadeiras.jpg" alt="">
                        </div>
                        <div class="prod-main-link text-center">
                          <p><span>Cadeiras</span></p>
                        </div>
                    </div>
                </a>

                <a href="http://suporteventos.com.br/sousplats-e-toalha/">
                    <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-1 box-mini-produtos">
                        <div class="prod-main-img col-md-12 col-xs-12">
                            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/soustoa1.jpg" alt="">
                        </div>
                        <div class="prod-main-link text-center">
                          <p><span>Sousplats e Toalha</span></p>
                        </div>
                    </div>
                </a>

                <a href="http://suporteventos.com.br/lounges">
                    <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-1 box-mini-produtos">
                        <div class="prod-main-img col-md-12 col-xs-12">
                            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/lounge.jpg" alt="">
                        </div>
                        <div class="prod-main-link text-center">
                          <p><span>Lounge</span></p>
                        </div>
                    </div>
                </a>
                <a href="http://suporteventos.com.br/mesas-e-aparadores/">
                    <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-1 box-mini-produtos">
                        <div class="prod-main-img col-md-12 col-xs-12">
                            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/mesas.jpg" alt="">
                        </div>
                        <div class="prod-main-link text-center">
                          <p><span>Mesas e Aparadores</span></p>
                        </div>
                    </div>
                </a>
                <a href="http://suporteventos.com.br/kids">
                    <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-1 box-mini-produtos">
                        <div class="prod-main-img col-md-12 col-xs-12">
                            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kids.png" alt="">
                        </div>
                        <div class="prod-main-link text-center">
                          <p><span>Kids</span></p>
                        </div>
                    </div>
                </a> -->
                </div>
           </div>
            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>
