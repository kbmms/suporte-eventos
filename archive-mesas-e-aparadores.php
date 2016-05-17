<?php get_header(); ?>
<?php
$args=array(
    'hide_empty'        => 0,
    'parent'        => 0,
    'taxonomy'      => 'mesasaparadores');
 $categories=get_categories($args);



?>
<!-- --------------------------------------------------------------- -->

<div class="row">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
            <div class="container">
                <div class="col-md-10 col-md-offset-1 menu-produtos-main-container">
                   <div class="col-md-10 col-sm-12 col-xs-12 menu-prdoutos-main text-center">
                       <ul>
<!--                            <li><a href="#">Acessórios</a></li>
                           <li><a href="#">Bares</a></li>
                           <li><a href="#">Cadeiras</a></li>
                           <li><a href="#">Sousplats e Toalha</a></li> -->
                           <li><a href="<?php echo site_url(); ?>/lounges_itens/mesa-de-canto/">Lounge</a></li>
                           <li><a href="<?php echo site_url(); ?>/mesasaparadores/aparadores">Mesas e Aparadores</a></li>
                         <!--   <li><a href="#">Kids</a></li> -->
                       </ul>
                   </div>
                   <div class="col-md-2 col-sm-12 col-xs-12 quantidade-itens text-center">
                       <p>Finalizar Pedido</p>
                       <p>0 itens</p>
                   </div>
                </div>
           </div>
            </div>

        </div>
    </div>
</div>





<div class="row">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
            <div class="container">
                <div class="col-md-10 col-md-offset-1 menu-produtos-main-container-sub">
                   <div class="col-md-12 menu-prdoutos-main text-center">
                       <ul>
                            <?php
                            foreach($categories as $category) {

                                $product_cat_url = get_term_link( $category->slug, 'mesasaparadores' );
                             ?>
                           <li> <?php echo '<a class="cat-title" href="' . $product_cat_url .'">' . $category->name.'</a>'; ?></li>
                           <?php
                           }

                            ?>
                       </ul>
                   </div>
                </div>
           </div>
            </div>

        </div>
    </div>
</div>


<div class="row">
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-md-6 col-sm-6 col-xs-8 col-xs-offset-2 produtos-box">
                <div class="imagem-produto">
                   <a href="<?php the_permalink() ?>"class="item_thumb"><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="texto-e-btn text-center">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p><a  class="btn-go"href="#">Incluir no pedido</a></p>
                    <p class="pull-right"> <a class="ver-evento" href="<?php the_permalink(); ?>">VEJA NO EVENTO</a></p>
                </div>
            </div>
<?php endwhile; else : ?>
    <p><?php _e( 'Nenhum Produto Cadastrado!' ); ?></p>
<?php endif; ?>

        </div>
    </div>
</div>


<?php get_footer(); ?>