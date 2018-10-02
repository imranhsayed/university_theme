<?php
/**
 * The page is used to display pages.
 *
 * @package Fictional University
 */
get_header();

if( have_posts() ) {
	while ( have_posts() ) : the_post();
		?>
		<div class="page-banner">
			<div class="page-banner__bg-image" style="background-image: url(<?php echo get_template_directory_uri() . '/images/ocean.jpg'; ?>);"></div>
			<div class="page-banner__content container container--narrow">
				<h1 class="page-banner__title"><?php the_title(); ?></h1>
				<div class="page-banner__intro">
					<p>Learn how the school of your dreams got started.</p>
				</div>
			</div>
		</div>


		<div class="container container--narrow page-section">

			<?php
			$post_parent_id = $post->post_parent;
			if ( is_page() && $post_parent_id ) {
				?>
				<div class="metabox metabox--position-up metabox--with-home-link">
					<p><a class="metabox__blog-home-link" href="<?php echo get_page_link( $post_parent_id ); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title( $post_parent_id ); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
				</div>
				<?php
			} ?>

			<div class="page-links">
				<h2 class="page-links__title"><a href="<?php echo get_page_link( $post_parent_id ); ?>"><?php echo get_the_title( $post_parent_id ); ?></a></h2>
				<ul class="min-list">
					<?php
					$findChildrenOf = ( $post_parent_id ) ? $post_parent_id : get_the_ID();
					wp_list_pages( array(
							'title_li' => NULL,
							'child_of' => $findChildrenOf,
							'sort_column' => 'menu_order'
					) );
					?>
				</ul>
			</div>

			<div class="generic-content">
				<?php the_content(); ?>
			</div>

		</div>
		<?php
	endwhile;
}

get_footer();