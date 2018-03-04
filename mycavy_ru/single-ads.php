<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mycavy_ru
 */

get_header();
?>


  <section class="main-block-1">

<?php
get_sidebar();

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-ads', get_post_type() );

		endwhile; // End of the loop.
		?>

  </section>
</div>

<?php

get_footer();
