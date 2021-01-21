<div>
    <h2><?php the_field('title_partners'); ?></h2>

    <p><?php the_field('desc_partners');?></p>

    <button><?php the_field('button_partners');?></button>

    <?php 
       $img = get_field('image_partners');
       if( !empty( $img ) ): ?>
           <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
       <?php endif; 
    ?>
</div>



<?php 
    // $title = get_field('title_partners');
    // echo $title; 
    
    // $desc = get_field('desc_partners');
    // echo $desc;

    // $btn = get_field('button_partners');
    // echo $btn;

?>