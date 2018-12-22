<?php
/**
 * Template Name: Home page
 * Description: The main williamgill.de home page
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

	<div class="circle-container">
		<div class="circle">I like making stuff. Web stuff, maps stuff. Apps. Change. I like people who like making stuff. </div>
	</div>
	
	<div class="home-section" id="home-section-blog">
		<div class="home-overview-content-title-icon home-overview-content-title-icon-blog"></div>
		<h1 id="home-section-blog-h1"><a href="wills-blog/" title="William Gill's blog">Blog</a></h1>
		<hr />
		
		
		<?php

		query_posts(array(
		'post_type'      => 'post', // You can add a custom post type if you like
		'paged'          => $paged,
		'posts_per_page' => 3
		));
	
		if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content-main-excerpt', get_post_format() );
				?>
			<?php endwhile; ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'toolbox' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'toolbox' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>
		
		<a href="/wills-blog">Read more posts and view the archives.</a>
		<br class="clear" />
		<div style="margin-top: 3em;">
			<?php /*echo do_shortcode('[jetpack_subscription_form title="Get new articles by email" subscribe_text="Enter your email address and you&#39;ll receive an email whenever I post a new article. (Your email address will never be used for any other reason.)"]'); */?>
		</div>
	</div>
	
<?php get_footer(); ?>