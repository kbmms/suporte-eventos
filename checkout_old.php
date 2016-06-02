<?php
/**
 Template Name: checkout
 */

 ?>
<?php get_header(); ?>
<div class="container">
    <div class="retorno-busca text-center">
        <h2>MEU PEDIDO</h2>
    </div>
</div>

<div class="meupedidofull">
                <div class="meu-pedido-box">
                        <div class="simpleCart_items meu-pedido-itens">

                        </div>
                </div>

                <div class="finalizar-pedido text-center">
                    <p><a href="<?php echo site_url() ?>/finalizar">Finalizar o pedido</a></p>

                </div>
</div>
<?php get_footer(); ?>