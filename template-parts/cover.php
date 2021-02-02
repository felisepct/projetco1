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

<div class="sectionVideo">
    <?php 
       $img = get_field('fond');
       if( !empty( $img ) ): ?>
           <img class="homevideo"  src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
       <?php endif; 
    ?>
    <div class="col-12 col-l-5 right_box">
        <h1 class="title" ><?php the_field('titre'); ?></h1>
        <p class="quicksand excerpt__white"><?php the_field('tagline'); ?></p>
        <button class="buttonAchat" ><?php the_field('bouton_intro');?></button>
    </div>
    
    <img src="http://image.flaticon.com/icons/svg/3/3907.svg" id="arrow" class="animated bounce" style="width: 800px; height: 20px;">
</div>