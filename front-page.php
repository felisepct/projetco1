<!-- home -->

<?php 
    /** @link https://developer.wordpress.org/reference/functions/get_header/ */
    get_header();

    /** @link https://developer.wordpress.org/themes/basics/the-loop/  */
    if( have_posts() ): 
        while( have_posts() ) : the_post();
        get_template_part( 'template-parts/cover' );
        
        endwhile; 
    endif;

    /** @link https://developer.wordpress.org/reference/functions/get_footer/ */
    get_footer();
?>