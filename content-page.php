<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

	<div class="navigation">
		<?php
		// Bring $wp_query into the scope of the function
		global $wp_query;

		// Backup the original property value
		$backup_page_total = $wp_query->max_num_pages;

		// Copy the custom query property to the $wp_query object
		$wp_query->max_num_pages = max_num_pages;
		?>

		<!-- now show the paging links -->
		<div class="alignleft"><?php previous_posts_link('Next Ideas'); ?></div>
		<div class="alignright"><?php next_posts_link('Previous Ideas'); ?></div>

		<?php
		// Finally restore the $wp_query property to it's original value
		$wp_query->max_num_pages = $backup_page_total;
		?>
	</div>

</article><!-- #post-## -->
