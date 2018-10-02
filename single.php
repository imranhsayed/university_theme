<?php
/**
 * Page for displaying single post
 *
 * @package Fictional University
 */

get_header();

if( have_posts() ) {
	while ( have_posts() ) : the_post();
		?>
		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
		<hr>
		<?php
		the_content();
	endwhile;
}

get_footer();