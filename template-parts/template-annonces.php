<div id="annonces" class="container">
    <div class="row">

        <?php
            if (have_posts()) :
                while ( have_posts()) : the_post()
        ?>

        <div class="col-4">
            <div class="card" id="annonce-<?php the_ID(); ?>">
                <?php
                    if (has_post_thumbnail()) :
                        the_post_thumbnail('medium', array('class' => 'card-img-top'));
                    endif;
                ?>
                <div class="card-body">
                    <h5 class="card-title text-primary">
                        <?php the_title(); ?>
                    </h5>
                    <p class="card-text">
                        <small class="muted-text">
                            Publié le <?php echo get_the_date(); ?> par <?php echo get_the_author(); ?>
                        </small>
                    </p>
                    <p class="card-text">
                        <?php the_content(); ?>
                    </p>
                    
                    <p class="card-text">
                        <?php the_terms($post->ID, 'categoriesannonces') ?>
                    </p>

                    <p class="card-text">
                        <?php echo get_post_custom_values('vendeur', $post->ID)[0]; ?>
                    </p>

                    <?php

                    ?>

                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Voir</a>

                    <!--
                        // https://codex.wordpress.org/Function_Reference/edit_post_link
                        // On affiche un lien pour éditer l'annonce
                    -->
                    <?php edit_post_link('Editer l\'annonce', null, null, null, 'btn btn-success'); ?>
                </div>

            </div>
        </div>

        <?php
                endwhile;
            endif;
        ?>

    </div>
</div>