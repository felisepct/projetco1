<?php
$repeaterfeatures = get_field('features_watch');
// echo '<pre>';
//     print_r($repeaterfeatures);
// echo '</pre>';

// $title = $repeaterfeatures['title_features'];
// $img = $repeaterfeatures['img_features'];
// $desc = $repeaterfeatures['desc_features']


if ($repeaterfeatures) :?>
    <ul>

    <?php

    foreach ($repeaterfeatures as $featuresItem ) {
        $title = $featuresItem['title_features'];
        $img = $featuresItem['img_features'];
        $desc = $featuresItem['desc_features'];
        ?>

        <li><?php echo $title; ?></li>
        <img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>"/>
        <li><?php echo $desc; ?></li>

        <?php
    }
    ?>

    </ul>

    <?php 
endif;

?>


  
    


