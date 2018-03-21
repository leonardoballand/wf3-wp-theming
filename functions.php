<?php

// Charge parent styles

add_action('wp_enqueue_scripts', 'charge_theme_parent');

function charge_theme_parent()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// https://developer.wordpress.org/reference/functions/add_image_size/
// On enregistre une nouvelle taille d'image spécifique appelée 'profile'
// qui reproportionnera l'image téléversée aux dimensions spécifiées
// add_theme_support('post_thumbnails');
add_image_size('profile_1x', 175, 175, array('left', 'top')); // on crop en définissant la position de départ
add_image_size('profile_retina', 500, 500, true); // on crop
add_image_size('profile_2x', 250, 250, true); // on crop
add_image_size('profile_3x', 400, 400, true); // on crop

?>