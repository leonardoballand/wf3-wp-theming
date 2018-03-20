<?php
/**
 * Template Name: Accueil
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();
    ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <header>
                <h1 class="monsupertitre">
                <?php
                    the_content();
                ?>
                </h1>
            </header>

            <div>
                <?php
                    the_title();
                ?>
            </div>

        </article><!-- #post-## -->

<?php

    // End the loop.
    endwhile;
    ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>