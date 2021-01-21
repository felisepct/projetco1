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
    <div id="section_caracteristique">
        
        <?php
            if ($repeaterCaracteristiques) :?>
                <ul>

                <?php

                foreach ($repeaterCaracteristiques as $caracteristiqueItem ) {
                    $title = $caracteristiqueItem['titre'];
                    $icon = $caracteristiqueItem['icon'];
                    $description = $caracteristiqueItem['description'];
                    ?>

                    <li><?php echo $title; ?></li>
                    <li><?php echo $icon; ?></li>
                    <li><?php echo $description; ?></li>

                    <?php
                }
                ?>

                </ul>

                <?php 
            endif;

        ?>

        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"/>

        <button><?php echo $buttonLink; ?></button>
        
    </div>

