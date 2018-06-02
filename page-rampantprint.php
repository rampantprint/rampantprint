<?php
/**
 * Template Name: rampantprint
 *
 *
 * @package rampantprint
 */

get_header(); ?>

	<div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="about-graphics">
                <div class="circle-header">
                    <div class="about-role">Web Dev <span>|</span> Design</div>
                    <div class="about-title">rampantprint</div>
                </div>

                <img src="https://www.rampantprint.com/wp-content/uploads/2016/06/dev-design-head.png" alt="Chad Curtis Web Dev" class="dev-design-logo">
            </div>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
