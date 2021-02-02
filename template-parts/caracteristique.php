<?php
$groupeCaracteristique = get_field('section_caracteristique');

$image = $groupeCaracteristique['fond'];
$buttonLink = $groupeCaracteristique['bouton_link'];
$repeaterCaracteristiques = $groupeCaracteristique['caracteristiques']

// echo '<pre>';
//     print_r();
// echo '</pre>';

// foreach ($repeaterCaracteristiques as $caracteristiqueItem ) {
//     $title = $caracteristiqueItem['title'];
//     $icon = $caracteristiqueItem['icon'];
//     $description = $caracteristiqueItem['description'];
// }


?>

<div class="container">
    <article class="sectionAdvantage">
        <img class="background__image" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"/>
        <div class="row">
            <div class="col-12">
                <button class="buttonAutre buttonAdvantage"><?php echo $buttonLink; ?></button>
            </div>
            
               
                    <?php
                        if ($repeaterCaracteristiques) :?>
                        

                        <?php

                            foreach ($repeaterCaracteristiques as $caracteristiqueItem ) {
                                $title = $caracteristiqueItem['titre'];
                                $icon = $caracteristiqueItem['icon'];
                                $description = $caracteristiqueItem['description'];
                        ?>
                        <div class="col-12 col-l-4">
                            <div class="advantage">
                                <li><?php echo $icon; ?></li>
                                <h5 class="quicksand subtitle"><?php echo $title; ?></h5>
                                <p class="quicksand excerpt"><?php echo $description; ?></p>
                            </div>
                        </div>
                        <?php
                            }
                        ?>

                <?php 
                    endif;

                ?>
               
            
        </div>
    


    </article>
</div>
        
       

       

 
        


