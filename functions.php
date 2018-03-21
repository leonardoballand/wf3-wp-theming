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


// Child theme functions

/**
 * Affiche l'auteur et la date préformatés
 * @param void
 * @return String - <p> qui contient le nom de l'auteur et la date de l'article
 */
function display_wf3_meta()
{
    $author = get_the_author();
    $date = get_the_date();

    echo "<p>
            Publié par 
            <span class='wf3_meta_author'>$author</span>
            le
            <span class='wf3_meta_date'>$date</span>
        </p>
    ";
}

/**
 * Affiche un menu avec toutes les pages du site
 * @param Array pages - Un tableau contenant les pages du site (retourné par get_pages())
 * @return String - <li> contenant un lien vers la page
 */
function displayWF3Menu($pages)
{
    foreach($pages as $page)
    {
        $post_permalink = get_page_link($page->ID);
        $post_title = $page->post_title;

        echo "<li>
            <a href='$post_permalink'>
                $post_title
            </a>
        </li>
        ";
    }
}

/**
 * Affiche la liste des catégories en choisissant
 * si on personnalise le titre ou pas
 * @param Bool - Afficher le titre ou non
 * @param String - Le titre du titre à afficher
 */
function getCategoriesList($displayTitle, $title)
{
    if ($displayTitle) {
        wp_list_categories(array(
            'title_li' => $title
        ));
    } else {
        wp_list_categories(array(
            'title_li' => ''
        ));
    }
}




?>