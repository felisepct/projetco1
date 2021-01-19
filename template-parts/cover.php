<?php
echo get_the_ID();
            echo "<pre>";
            print_r(get_post(get_the_ID()));
            echo "</pre>";

            $title = get_field('titre');
            echo $title;

            $tagline = get_field('tagline');
            echo $tagline;

           
            $image = get_field('fond');
            echo "<pre>";
            print_r($image);
            echo "</pre>";
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; 
?>        