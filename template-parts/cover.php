<?php
// echo get_the_ID();
            // echo "<pre>";
            // print_r(get_post(get_the_ID()));
            // echo "</pre>";

            // $title = get_field('titre');
            // echo $title;

            // $tagline = get_field('tagline');
            // echo $tagline;

            // $button = get_field('bouton_intro');
            // echo $button;
?>  

<div>
    <h1><?php the_field('titre'); ?></h1>

    <p><?php the_field('tagline'); ?></p>

    <?php 
       $img = get_field('fond');
       if( !empty( $img ) ): ?>
           <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
       <?php endif; 
    ?>

    <button><?php the_field('bouton_intro');?></button>
</div>