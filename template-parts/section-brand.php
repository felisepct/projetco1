<?php

// section-brand


            $image = get_field('section_brand_img');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; 

            $title = get_field('section_brand_title');
            $desc = get_field('section_brand_desc');
            
?>        
    <div class="cover-brand"> 

       <h1 class="section-brand-title"> <?php echo $title; ?></h1>
        <p class="section-brand-desc"> <?php echo $desc; ?> </p>
        <img class="section-brand-image">  <?php echo $image; ?></img>
    </div>