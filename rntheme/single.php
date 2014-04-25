<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

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

				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php twentythirteen_post_nav(); ?>
				<?php comments_template(); ?>

			<?php endwhile; ?>
            </div> <!-- .right-content -->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
