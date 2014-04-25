<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
global $wp_query;
get_header(); ?>

	<div id="primary" class="content-area">
        <div id="content" class="site-content container clearfix" role="main">
            <!-- widget area -->
            <div class="left_content">
                <?php get_sidebar(); ?>
                <a id="facebook_button" href="http://www.google.com">Rózsátnevető<br>Waldorf Óvoda<br>a Facebookon</a>
            </div> <!-- .left_content -->
            <!-- main stuff -->
            <div class="right_content"> 
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

                    <div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
                </article><!-- #post -->

                <!-- This is a little ugly, but whatever.
                If the  -->

                <?php /* The loop */
                    if (is_front_page()) {
                    // save original wp_query
                    $old_wp_query = $wp_query;
                    // The Query
                    $wp_query = new WP_Query('category_name=kezdolap');

                    // The Loop
                    if ( $wp_query->have_posts() ) {
                        echo "<h1>Aktuális</h1>";
                        while ($wp_query->have_posts() ) {
                            $wp_query->the_post();
                            get_template_part( 'content-brief', get_post_format());
                        }
                    } else {
                        // no posts found
                    }
                    /* Restore original Post Data */
                    $wp_query = $old_wp_query; }
                ?>

				<?php comments_template(); ?>
			<?php endwhile; ?>
            </div> <!-- .right-content -->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
