<?php

add_theme_support('post-thumbnails');


// https://codex.wordpress.org/Post_Types
//
// Toutes les options que l'on peut utiliser pour créer nos custom post types
// https://codex.wordpress.org/Function_Reference/register_post_type
add_action('init', 'tgp_custom_post_type', 0);

add_action('init', 'tgp_add_taxonomies', 0);

function tgp_custom_post_type()
{
    $labels = array(
        'name'                  => _x('Annonces', 'Post Type General Name'),
        'singular_name'         => _x('Annonce', 'Post Type Singular Name'),
        'menu_name'             => __('Gérer les annonces'),
        'all_items'             => __('Toutes les annonces'),
        'view_items'            => __('Voir les annonces'),
        'add_new_item'          => __('Ajouter une nouvelle annonce'),
        'add_new'               => __('Ajouter'),
        'edit_item'             => __('Editer l\'annonce'),
        'update_item'           => __('Modifier l\'annonce'),
        'search_items'          => __('Rechercher une annonce'),
        'not_found'             => __('Non trouvée'),
        'not_found_in_trash'    => __('Non trouvée dans la corbeille')
    );

    $custompost = array(
        'label'         => __('Annonces'),
        'description'   => __('Des annonces par milliers'),
        'labels'        => $labels,
        'supports'      => array('title', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields'),
        'hierarchical'  => false,
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'annonces')
    );

    register_post_type('annonces', $custompost);

}

function tgp_add_taxonomies()
{
    $labels_categories = array(
        'name' => _x('Catégories d\'annonce', 'taxonomy general name'),
        'singular_name' => _x('Catégorie d\'annonce', 'taxonomy singular name'),
        'search_items' => __('Rechercher une catégorie'),
        'popular_items' => __('Catégories populaires'),
        'all_items' => __('Toutes les catégories'),
        'edit_item' => __('Editer une catégorie'),
        'update_item' => __('Mettre à jour une catégorie'),
        'add_new_item' => __('Ajoute une nouvelle catégorie'),
        'new_item_name' => __('Nom de la catégorie'),
        'add_or_remove_items' => __('Ajouter ou supprimer une catégorie'),
        'choose_from_most_used' => __('Choisir parmi les catégories les plus utilisées'),
        'not_found' => __('Pas de catégorie trouvée'),
        'menu_name' => __('Catégories d\'annonce')
    );

    $categories_annonces = array(
        'hierarchical' => true,
        'labels' => $labels_categories,
        'show_ui' => true,
        'show_admin_columns' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'categories-annonces')
    );

    register_taxonomy('categoriesannonces', 'annonces', $categories_annonces);
}

?>