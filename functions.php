<?php
// add_theme_support( 'post-thumbnails');
 if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support('post-thumbnails');
        // set_post_thumbnail_size( 275, 150, true ); // Normal post thumbnails

        // TAMANHO SLIDER PRINCIPAL
        add_image_size('itens-principal', 277, 184, true);
        }
        // add_image_size( 'img-slider', 2000, 0, array( 'center', 'center' ));

/**
 * Adicionamos uma acção no inicio do carregamento do WordPress
 * através da função add_action( 'init' )
 */

// add_action( 'init', 'product_register' );
// function product_register() {
//   $labels = array(
//     'name' => _x('Products', 'post type general name'),
//     'singular_name' => _x('Product', 'post type singular name'),
//     'add_new' => _x('Add New', 'Product'),
//     'add_new_item' => __('Add New Product'),
//     'edit_item' => __('Edit Product'),
//     'new_item' => __('New Product'),
//     'all_items' => __('All Products'),
//     'view_item' => __('View Products'),
//     'search_items' => __('Search Products'),
//     'not_found' =>  __('No products found'),
//     'not_found_in_trash' => __('No products found in Trash'),
//     'parent_item_colon' => '',
//     'menu_name' => 'Produtos'

//   );
//   $args = array(
//     'labels' => $labels,
//     'public' => true,
//     'publicly_queryable' => true,
//     'show_ui' => true,
//     'show_in_menu' => true,
//     'query_var' => true,
//     'rewrite' => true,
//     'capability_type' => 'post',
//     'hierarchical' => false,
//     'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
//   );
//   register_post_type('products',$args);


// $labels = array(
//     'name' => _x( 'Product Categories', 'taxonomy general name' ),
//     'singular_name' => _x( 'Product Category', 'taxonomy singular name' ),
//     'search_items' =>  __( 'Search Product Categories' ),
//     'all_items' => __( 'All Product Categories' ),
//     'parent_item' => __( 'Parent Category' ),
//     'parent_item_colon' => __( 'Parent Category:' ),
//     'edit_item' => __( 'Edit Product Category' ),
//     'update_item' => __( 'Update Product Category' ),
//     'add_new_item' => __( 'Add Product Category' ),
//     'new_item_name' => __( 'New Product Category' ),
//     'menu_name' => __( 'Product Categories' )
//   );

// register_taxonomy('product_categories',array('products'), array(
//     'hierarchical' => true,
//     'labels' => $labels,
//     'query_var' => true,
//     'show_ui' => true
//  ));
// }















// Mesas e Aparadores
add_action( 'init', 'mesas_aparadores' );
function mesas_aparadores() {
  $labels = array(
    'name' => _x('Mesas e Aparadores', 'post type general name'),
    'singular_name' => _x('Mesas e Aparadores', 'post type singular name'),
    'add_new' => _x('Adicionar Nova', 'Mesas e Aparadores'),
    'add_new_item' => __('Adicionar Nova Mesas e Aparadores'),
    'edit_item' => __('Editar Mesas e Aparadores'),
    'new_item' => __('Nova Mesas e Aparadores'),
    'all_items' => __('Todas  Mesas e Aparadores'),
    'view_item' => __('Ver  Mesas e Aparadores'),
    'search_items' => __('Procurar  Mesas e Aparadores'),
    'not_found' =>  __('Nenhum produto encontrado'),
    'not_found_in_trash' => __('Nenhum produto encontrado'),
    'parent_item_colon' => '',
    'menu_name' => 'Mesas e Aparadores'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
  );
  register_post_type('mesas-e-aparadores',$args);


$labels = array(
    'name' => _x( 'Mesas e Aparadores Categoria', 'taxonomy general name' ),
    'singular_name' => _x( 'Mesa e Aparador Categoria', 'taxonomy singular name' ),
    'search_items' =>  __( 'Procurar Categorias de Mesas e Aparadores' ),
    'all_items' => __( 'All Mesas e Aparadores Categories' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Editar Categoria de Mesas e Aparadores' ),
    'update_item' => __( 'Atualizar Cateforia de Mesas e Aparadores' ),
    'add_new_item' => __( 'Adicionar Categoria para Mesas e Aparadores' ),
    'new_item_name' => __( 'Nova Categoria para Mesas e Aparadores' ),
    'menu_name' => __( 'Mesas e Aparadores Categorias' )
  );

register_taxonomy('mesasaparadores',array('mesas-e-aparadores'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'query_var' => true,
    'show_ui' => true
 ));
}


















// LOUNGE
add_action( 'init', 'lounges_prod' );
function lounges_prod() {
  $labels = array(
    'name' => _x('Lounges', 'post type general name'),
    'singular_name' => _x('Lounge', 'post type singular name'),
    'add_new' => _x('Adicionar Novo', 'Lounges'),
    'add_new_item' => __('Adicionar Novo Lounge'),
    'edit_item' => __('Editar Lounge'),
    'new_item' => __('Novo Lounge'),
    'all_items' => __('Todos Lounges'),
    'view_item' => __('Ver  Lounges'),
    'search_items' => __('Procurar Lounges'),
    'not_found' =>  __('Nenhum produto encontrado'),
    'not_found_in_trash' => __('Nenhum produto encontrado'),
    'parent_item_colon' => '',
    'menu_name' => 'Lounges'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
  );
  register_post_type('lounges',$args);


$labels = array(
    'name' => _x( 'Mesas e Aparadores Categoria', 'taxonomy general name' ),
    'singular_name' => _x( 'Lounge Categoria', 'taxonomy singular name' ),
    'search_items' =>  __( 'Procurar Categorias de Lounges' ),
    'all_items' => __( 'Todos Categorias de Lounges' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Editar Categoria de Lounges' ),
    'update_item' => __( 'Atualizar Categoria de Lounges' ),
    'add_new_item' => __( 'Adicionar Categoria para Lounges' ),
    'new_item_name' => __( 'Nova Categoria para Lounges' ),
    'menu_name' => __( 'Lounges Categorias' )
  );

register_taxonomy('lounges_itens',array('lounges'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'query_var' => true,
    'show_ui' => true
 ));
}








//KIDS
add_action( 'init', 'kidss_prod' );
function kidss_prod() {
  $labels = array(
    'name' => _x('Kids', 'post type general name'),
    'singular_name' => _x('Acessorios', 'post type singular name'),
    'add_new' => _x('Adicionar Novo', 'Kids'),
    'add_new_item' => __('Adicionar Novo Kids'),
    'edit_item' => __('Editar Kids'),
    'new_item' => __('Novo Kids'),
    'all_items' => __('Todos Kids'),
    'view_item' => __('Ver Kids'),
    'search_items' => __('Procurar Kids'),
    'not_found' =>  __('Nenhum produto encontrado'),
    'not_found_in_trash' => __('Nenhum produto encontrado'),
    'parent_item_colon' => '',
    'menu_name' => 'Kids'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
  );
  register_post_type('kids',$args);


$labels = array(
    'name' => _x( 'Kids Categoria', 'taxonomy general name' ),
    'singular_name' => _x( 'Kids Categoria', 'taxonomy singular name' ),
    'search_items' =>  __( 'Procurar Categorias de Kids' ),
    'all_items' => __( 'Todos Categorias de Kids' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Editar Categoria de Kids' ),
    'update_item' => __( 'Atualizar Categoria de Kids' ),
    'add_new_item' => __( 'Adicionar Categoria para Kids' ),
    'new_item_name' => __( 'Nova Categoria para Kids' ),
    'menu_name' => __( 'Kids Categorias' )
  );

register_taxonomy('kids_itens',array('kids'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'query_var' => true,
    'show_ui' => true
 ));
}



















//Acessórios
add_action( 'init', 'acessorios_prod' );
function acessorios_prod() {
  $labels = array(
    'name' => _x('Acessórios', 'post type general name'),
    'singular_name' => _x('Acessorios', 'post type singular name'),
    'add_new' => _x('Adicionar Novo', 'Acessório'),
    'add_new_item' => __('Adicionar Novo Acessório'),
    'edit_item' => __('Editar Acessório'),
    'new_item' => __('Novo Acessório'),
    'all_items' => __('Todos Acessórios'),
    'view_item' => __('Ver Acessórios'),
    'search_items' => __('Procurar Acessório'),
    'not_found' =>  __('Nenhum produto encontrado'),
    'not_found_in_trash' => __('Nenhum produto encontrado'),
    'parent_item_colon' => '',
    'menu_name' => 'Acessórios'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
  );
  register_post_type('acessorios',$args);


$labels = array(
    'name' => _x( 'Acessórios Categoria', 'taxonomy general name' ),
    'singular_name' => _x( 'Acessórios Categoria', 'taxonomy singular name' ),
    'search_items' =>  __( 'Procurar Categorias de Acessórios' ),
    'all_items' => __( 'Todos Categorias de Acessórios' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Editar Categoria de Acessórios' ),
    'update_item' => __( 'Atualizar Categoria de Acessórios' ),
    'add_new_item' => __( 'Adicionar Categoria para Acessórios' ),
    'new_item_name' => __( 'Nova Categoria para Acessórios' ),
    'menu_name' => __( 'Acessórios Categorias' )
  );

register_taxonomy('acessorios_itens',array('acessorios'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'query_var' => true,
    'show_ui' => true
 ));
}
















//BARES
add_action( 'init', 'bares_prod' );
function bares_prod() {
  $labels = array(
    'name' => _x('Bares', 'post type general name'),
    'singular_name' => _x('Bares', 'post type singular name'),
    'add_new' => _x('Adicionar Novo', 'Bares'),
    'add_new_item' => __('Adicionar Novo Bares'),
    'edit_item' => __('Editar Bares'),
    'new_item' => __('Novo Bares'),
    'all_items' => __('Todos Bares'),
    'view_item' => __('Ver Bares'),
    'search_items' => __('Procurar Bares'),
    'not_found' =>  __('Nenhum produto encontrado'),
    'not_found_in_trash' => __('Nenhum produto encontrado'),
    'parent_item_colon' => '',
    'menu_name' => 'Bares'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
  );
  register_post_type('bares',$args);


$labels = array(
    'name' => _x( 'Acessórios Categoria', 'taxonomy general name' ),
    'singular_name' => _x( 'Acessórios Categoria', 'taxonomy singular name' ),
    'search_items' =>  __( 'Procurar Categorias de Acessórios' ),
    'all_items' => __( 'Todos Categorias de Acessórios' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Editar Categoria de Acessórios' ),
    'update_item' => __( 'Atualizar Categoria de Acessórios' ),
    'add_new_item' => __( 'Adicionar Categoria para Acessórios' ),
    'new_item_name' => __( 'Nova Categoria para Acessórios' ),
    'menu_name' => __( 'Acessórios Categorias' )
  );

register_taxonomy('bares_itens',array('bares'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'query_var' => true,
    'show_ui' => true
 ));
}


















//cadeiras
add_action( 'init', 'cadeiras_prod' );
function cadeiras_prod() {
  $labels = array(
    'name' => _x('Cadeiras', 'post type general name'),
    'singular_name' => _x('Cadeiras', 'post type singular name'),
    'add_new' => _x('Adicionar Nova', 'Cadeira'),
    'add_new_item' => __('Adicionar Nova Cadeira'),
    'edit_item' => __('Editar Cadeiras'),
    'new_item' => __('Nova Cadeira'),
    'all_items' => __('Todas Cadeiras'),
    'view_item' => __('Ver Cadeiras'),
    'search_items' => __('Procurar Cadeiras'),
    'not_found' =>  __('Nenhum produto encontrado'),
    'not_found_in_trash' => __('Nenhum produto encontrado'),
    'parent_item_colon' => '',
    'menu_name' => 'Cadeiras'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
  );
  register_post_type('cadeiras',$args);


$labels = array(
    'name' => _x( 'Cadeiras Categoria', 'taxonomy general name' ),
    'singular_name' => _x( 'Cadeiras Categoria', 'taxonomy singular name' ),
    'search_items' =>  __( 'Procurar Categorias de Cadeiras' ),
    'all_items' => __( 'Todos Categorias de Cadeiras' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Editar Categoria de Cadeiras' ),
    'update_item' => __( 'Atualizar Categoria de Cadeiras' ),
    'add_new_item' => __( 'Adicionar Categoria para Cadeiras' ),
    'new_item_name' => __( 'Nova Categoria para Cadeiras' ),
    'menu_name' => __( 'Cadeiras Categorias' )
  );

register_taxonomy('cadeiras_itens',array('cadeiras'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'query_var' => true,
    'show_ui' => true
 ));
}











add_action( 'init', 'slider_init' );
function slider_init() {
  $labels = array(
    'name' => _x('Slider', 'post type general name'),
    'singular_name' => _x('Slider', 'post type singular name'),
    'add_new' => _x('Adicionar Novo', 'Slider'),
    'add_new_item' => __('Adicionar Novo Slider'),
    'edit_item' => __('Editar Slider'),
    'new_item' => __('Novo Slider'),
    'all_items' => __('Todos os Sliders'),
    'view_item' => __('Ver Slider'),
    'search_items' => __('Procurar Slider'),
    'not_found' =>  __('Nenhum encontrado'),
    'not_found_in_trash' => __('Nenhum  encontrado'),
    'parent_item_colon' => '',
    'menu_name' => 'Slider Home'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
  );
  register_post_type('slider',$args);

}
//add_action( 'init', 'sousplatstoalha_prod' );
//function sousplatstoalha_prod() {
//  $labels = array(
//    'name' => _x('Sousplats Toalha', 'post type general name'),
//    'singular_name' => _x('Sousplats Toalha', 'post type singular name'),
//    'add_new' => _x('Adicionar Nova', 'Cadeira'),
//    'add_new_item' => __('Adicionar Nova Cadeira'),
//    'edit_item' => __('Editar Sousplats Toalha'),
//    'new_item' => __('Nova Cadeira'),
//    'all_items' => __('Todas Sousplats Toalha'),
//    'view_item' => __('Ver Sousplats Toalha'),
//    'search_items' => __('Procurar Sousplats Toalha'),
//    'not_found' =>  __('Nenhum produto encontrado'),
//    'not_found_in_trash' => __('Nenhum produto encontrado'),
//    'parent_item_colon' => '',
//    'menu_name' => 'Sousplats e Toalha'
//
//  );
//  $args = array(
//    'labels' => $labels,
//    'public' => true,
//    'publicly_queryable' => true,
//    'show_ui' => true,
//    'show_in_menu' => true,
//    'query_var' => true,
//    'rewrite' => true,
//    'capability_type' => 'post',
//    'hierarchical' => false,
//    'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
//  );
//  register_post_type('sousplats-e-toalha',$args);
//
//
//$labels = array(
//    'name' => _x( 'Sousplats e Toalha Categoria', 'taxonomy general name' ),
//    'singular_name' => _x( 'Sousplats e Toalha Categoria', 'taxonomy singular name' ),
//    'search_items' =>  __( 'Procurar Categorias de Sousplats e Toalha' ),
//    'all_items' => __( 'Todos Categorias de Sousplats e Toalha' ),
//    'parent_item' => __( 'Parent Category' ),
//    'parent_item_colon' => __( 'Parent Category:' ),
//    'edit_item' => __( 'Editar Categoria de Sousplats e Toalha' ),
//    'update_item' => __( 'Atualizar Categoria de Sousplats e Toalha' ),
//    'add_new_item' => __( 'Adicionar Categoria para Sousplats e Toalha' ),
//    'new_item_name' => __( 'Nova Categoria para Sousplats e Toalha' ),
//    'menu_name' => __( 'Sousplats e Toalha Categorias' )
//  );
//
//register_taxonomy('sousplatstoalha_itens',array('sousplats-e-toalha'), array(
//    'hierarchical' => true,
//    'labels' => $labels,
//    'query_var' => true,
//    'show_ui' => true
// ));
//}

?>