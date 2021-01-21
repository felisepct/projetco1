<?php
$groupeSlider = get_field('slider');

$btn = $groupeSlider['button-slider'];
$title = $groupeSlider['title-slider'];
$repeaterSlider = $groupeSlider['gallery']

?>
    <div id="gallery">
        
        <?php
            if ($repeaterSlider) :?>
                <ul>

                <?php

                foreach ($repeaterSlider as $sliderItem ) {
                    $imgSlide = $sliderItem['img-repeter'];
                    
                    ?>

                <img src="<?php echo esc_url( $imgSlide['url'] ); ?>" alt="<?php echo esc_attr( $imgSlide['alt'] ); ?>"/>

                    <?php
                }
                ?>

                </ul>

                <?php 
            endif;

        ?>

        <h2><?php echo $title; ?></h2>

        <button><?php echo $btn; ?></button>
        
    </div>

