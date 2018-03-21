<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>
	<header class="page-header">
		<h2 class="page-title"><?php _e( 'Posts', 'twentyseventeen' ); ?></h2>
	</header>
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main child" role="main">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>

                <!-- On définit un id, et des classes, the_ID() permet de récupérer l'id de l'article -->
                <article id="article-<?php the_ID() ?>" class="article article-<?php the_ID() ?> wf3_post">

                    <!-- On crée un lien qui contient l'image mise en avant de l'article -->
                    <!-- On utilise the_permalink() pour récupérer le lien de l'article -->
                    <div class="wf3_post_thumbnail">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="wf3_thumbnail_permalink">
                                <!-- On affiche l'image de l'article -->
                                <?php the_post_thumbnail('profile') ?>
                            </a>
                        <?php endif; ?>
                    </div>

                    <div class="wf3_post_content">
                        <!-- On affiche le titre de l'article -->
                        <a href="<?php the_permalink(); ?>" class="wf3_content_title">
                            <h1 class="wf3_post_title"><?php the_title(); ?></h1>
                        </a>
                
                        <div class="wf3_content">
                            <!-- On affiche l'extrait de l'article -->
                            <?php the_excerpt(); ?>
                        </div>

                        <div class="wf3_meta">
                            <!--
                                On utilise notre fonction custom qui formate
                                pour nous les métas de l'article
                                (définie dans functions.php)
                            -->
                            <?php display_wf3_meta(); ?>
                        </div>
                    </div>
                </article>

            <?php

				endwhile;

				the_posts_pagination( array(
					'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
				) );

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
