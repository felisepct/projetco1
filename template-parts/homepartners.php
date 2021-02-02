<div class="container">
    <div class="row">
        <div class="col-12 col-l-6">
            <div class="sectionPartnershome">
                <h2 class="large"><?php the_field('title_partners'); ?></h2>
                <p class="quicksand excerpt col-12 col-l-10"><?php the_field('desc_partners');?></p>
                <button class="buttonAutre"><?php the_field('button_partners');?></button>
            </div>
        </div>
        <div class="col-12 col-l-5">
            <?php 
                $img = get_field('image_partners');
                if( !empty( $img ) ): ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                <?php endif; 
            ?>
        </div>
    </div>
</div>

<?php  
    // $title = get_field('title_partners');
    // echo $title; 
    
    // $desc = get_field('desc_partners');
    // echo $desc;

    // $btn = get_field('button_partners');
    // echo $btn;

?>