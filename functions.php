<?php

// Charge parent styles

add_action('wp_enqueue_scripts', 'charge_theme_parent');

function charge_theme_parent()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

?>