<?php
/**
 Template Name: sousplatstoalha
 */

get_header(); ?>

<?php
$args=array(
    'hide_empty'        => 0,
    'parent'        => 0,
    'title_li' => '',
    'taxonomy'      => 'sousplatstoalha_itens');
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
                           <li><a href="<?php echo site_url(); ?>/acessorios">Acessórios</a></li>
                           <li><a href="<?php echo site_url(); ?>/bares">Bares</a></li>
                           <li><a href="<?php echo site_url(); ?>/cadeiras">Cadeiras</a></li>
                           <li><a class="active" href="<?php echo site_url(); ?>/sousplats-e-toalha">Sousplats e Toalha</a></li>
                           <li><a href="<?php echo site_url(); ?>/lounges">Lounge</a></li>
                           <li><a href="<?php echo site_url(); ?>/mesas-e-aparadores">Mesas e Aparadores</a></li>
                           <li><a href="<?php echo site_url(); ?>/kids">Kids</a></li>
                       </ul>
                   </div>
                   <div class="col-md-2 col-sm-12 col-xs-12 quantidade-itens text-center">
                       <div class="finalizar-pedido">
                         <a href="<?php echo site_url() ?>/checkout">Finalizar</a>
                       </div>
                       <p>Finalizar Pedido</p>
                       <p class="simpleCart_quantity">0 itens</p>
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
                       <?php echo wp_list_categories($args); ?>
<!--                             <?php
                            foreach($categories as $category) {

                                $product_cat_url = get_term_link( $category->slug, 'sousplatstoalha_itens' );
                             ?>
                           <li> <?php echo '<a class="cat-title" href="' . $product_cat_url .'">' . $category->name.'</a>'; ?></li>
                           <?php
                           }

                            ?> -->
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
<?php
query_posts('post_type=sousplats-e-toalha&order=ASC&showposts=-1');
if (have_posts()) : while (have_posts()): the_post();
?>
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
<?php  endwhile;  endif;   wp_reset_query(); ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>