<?php get_header(); ?>

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                <div id="product-desc">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
<h1>single-products.php</h1>
        <?php if( get_post_meta($post->ID, 'price', true)): ?>
            Price: <?php echo get_post_meta($post->ID, 'price', true); ?>
        <?php endif; ?>

        <div>

    <?php endwhile; ?>

<?php get_footer(); ?>