<?php
/**
 * @package Toolbox
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		
	</header><!-- .entry-header -->
	<br class="clear" />
	<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php home_page_posted_on(); ?>
				
			</div><!-- .entry-meta -->
	<?php endif; ?>
	<br class="clear" />
	<div class="main-whole-entry">
		<div class="entry-content">
			<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'toolbox' ) ); ?>
			<br />
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'toolbox' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
	</div>
		
	<div class="main-blog-excerpt-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', '_s' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', '_s' ) );

			if ( ! _s_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', '_s' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', '_s' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'CATEGORY <br />%1$s <br />TAGS <br />%2$s', '_s' );
				} else {
					$meta_text = __( 'CATEGORY <br /> %1$s', '_s' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

	</div>
	
	<br class="clear" />
	<div class="main-excerpt-read-more-link">
		<a href="<?php echo get_permalink(); ?>">Read More...</a>
	</div>

	
	<br class="clear" />
	<hr class="post-break" />
</article><!-- #post-<?php the_ID(); ?> -->
