<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="span9 offset3">
			<p class="postImage postImage0"></p>
		</div>
	</div>
	<div class="row">
		<?php twentyfourteen_post_thumbnail(); ?>

		<!-- <header class="entry-header"> -->
		<div class="span3">
			<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
			<div class="entry-meta">
				<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>
			</div>
			<?php
				endif;

				if ( is_single() ) :
					the_title( '<p class="postTitle">', '</p>' );
				else :
					the_title( '<p class="postTitle"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></p>' );
				endif;
			?>

			<div class="entry-meta">
				<?php
					if ( 'post' == get_post_type() )
						twentyfourteen_posted_on();

					if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
				?>
				<!-- <span class="comments-link"><?php /*comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) );*/ ?></span> -->
				<?php
					endif;

					edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
				?>
			</div><!-- .entry-meta -->
		</div>
		<!-- </header> --> <!-- .entry-header -->

		<?php if ( is_search() ) : ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>

		<!-- <div class="entry-content"> -->
		<div class="span9">
			<?php
				the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			?>
		</div>
		<!-- </div> --> <!-- .entry-content -->
		<?php endif; ?>

		<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
	</div>
</article><!-- #post-## -->
