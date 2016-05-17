<?php get_header(); ?>
<?php
$args=array(
    'hide_empty'        => 0,
    'parent'        => 0,
    'title_li' => '',
    'orderby' => 'id',
    'order' => 'DESC',
    'taxonomy'      => 'bares_itens');
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
                           <li><a class="active" href="<?php echo site_url(); ?>/bares">Bares</a></li>
                           <li><a href="<?php echo site_url(); ?>/cadeiras">Cadeiras</a></li>
<!--                           <li><a href="<?php echo site_url(); ?>/sousplats-e-toalha">Sousplats e Toalha</a></li>-->
                           <li><a href="<?php echo site_url(); ?>/lounges">Lounge</a></li>
                           <li><a href="<?php echo site_url(); ?>/mesas-e-aparadores">Mesas e Aparadores</a></li>
                           <li><a href="<?php echo site_url(); ?>/kids">Kids</a></li>
                       </ul>
                   </div>
                   <div class="col-md-2 col-sm-12 col-xs-12 quantidade-itens text-center">
                       <div class="row finalizar-pedido">
                         <a href="<?php echo site_url() ?>/checkout">Finalizar</a>
                       </div>
                        <div class="row">
                       <p><span class="simpleCart_quantity">0</span><span> iten(s)</span></p>                          
                        </div>
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

                                $product_cat_url = get_term_link( $category->slug, 'bares_itens' );
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


    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="container-fluid">
<div class="container">
  <div class="simpleCart_shelfItem col-md-8 col-md-offset-2 text-center single-produtos">
                    <div class="imagem-produto-single">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <h2 class="item_codigo"><?php the_field('cod'); ?></h2>
                    <h4 class="item_name"><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                    <p><a  class="incluir-btn item_add btn-go" href="javascript:;">Incluir no pedido</a></p>
  </div>
</div>
</div>

    <?php endwhile; ?>

<?php get_footer(); ?>