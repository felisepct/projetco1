<?php
$repeaterfeatures = get_field('features_watch');
// echo '<pre>';
//     print_r($repeaterfeatures);
// echo '</pre>';

// $title = $repeaterfeatures['title_features'];
// $img = $repeaterfeatures['img_features'];
// $desc = $repeaterfeatures['desc_features']
?>
<div class="container">
    <article class="sectionFeatures">
        <div class="row">
            <div class="col-12 col-l-6">
                <div class="features">
                    <?php 
                        if ($repeaterfeatures) :?>
                    <ul>

                    <?php

                        foreach ($repeaterfeatures as $featuresItem ) {
                            $title = $featuresItem['title_features'];
                            $img = $featuresItem['img_features'];
                            $desc = $featuresItem['desc_features'];
                    ?>

                    <h5 class="quicksand subtitle"><?php echo $title; ?></h5>
                    <img class="img__features"  src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>"/>
                    <p class="quicksand excerpt col-12 col-l-9"><?php echo $desc; ?></p>

                    <?php
                        }
                    ?>

                    </ul>

                    <?php 
                        endif;

                    ?>
                </div>
            </div>
        </div>
    </article>
</div>

<?php



  
    


