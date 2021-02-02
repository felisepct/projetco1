<?php /* Template Name: custom-montre */ ?>

<!-- notre montre -->


<?php 
    /** @link https://developer.wordpress.org/reference/functions/get_header/ */
    get_header();

    /** @link https://developer.wordpress.org/themes/basics/the-loop/  */
    if( have_posts() ): 
        while( have_posts() ) : the_post();
        get_template_part( 'template-parts/cover' );
        
        //test wp_query
    ?>   
        <div class="container">
            <div class="sectionSuivi">
                <div class="row">
                    <div class="col-12 col-l-4">
                    <ul>
        <?php
        while (have_rows('tracking_watch')) : the_row();
            $title = get_sub_field ('title_tracking_watch');
            $img = get_sub_field ('img');
            $desc = get_sub_field ('desc_tracking_watch');
        ?>
        <li>
            <h2 class="quicksand excerpt__suivi suivi" ><?php echo $title ?></h2>
            <p><?php echo $desc ?></p>
            <img class="imgSuivi" src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>"/>
        </li>
        <?php
        endwhile;
        ?>
        </ul>
        
                    </div>
                </div>
            </div>
        </div>

       <?php
        //fin test wp_query
       
        get_template_part( 'template-parts/features' );
        get_template_part( 'template-parts/slider' );
        
        endwhile;
        
       

    endif;

    /** @link https://developer.wordpress.org/reference/functions/get_footer/ */
    get_footer();
?>