<?php

// cover-brand

            $logo = get_field('logo_brand');
            if( !empty( $logo ) ): ?>
                <img class="logo-cover-brand logo__marque" width="250px" height="90px" alt="logo" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
            <?php endif; 
           
          $image = get_field('img_brand');
            if( !empty( $image ) ): ?>
                <img class="image-fond-cover-brand img__cover" alt="cover marque" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif;   

            $title = get_field('title_brand');
            $desc = get_field('desc_brand');
            
?> 
<html>
    <div class="cover-brand cover__marque"> 
            <div class="cover__marque--text">
             <h1 class="title-cover-brand large titre_histo"> <?php echo $title; ?></h1>
             <p class="desc-cover-brand quicksand excerpt col-12 col-l-11 intro__marque"> <?php echo $desc; ?> </p> 
            </div>

    </div>
<html>
