<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage rntheme
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <div id="content" class="site-content container clearfix" role="main">
            <!-- widget area -->
            <div class="left_content">
                <?php get_sidebar(); ?>
                <a id="facebook_button" href="https://www.facebook.com/pages/R%C3%B3zs%C3%A1tnevet%C5%91-Waldorf-%C3%93voda/288125094648612" target="_blank">Rózsátnevető<br>Waldorf Óvoda<br>a Facebookon</a>
            </div> <!-- .left_content -->
            <!-- main stuff -->
            <div class="right_content"> 
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php global $wp_query; var_dump(get_object_vars($wp_query));?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

        <?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
            </div> <!-- .right-content -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
