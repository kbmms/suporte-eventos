<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="col-md-6">

        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <h1>ola taxonomy puro!!</h1>
    </div>
<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>