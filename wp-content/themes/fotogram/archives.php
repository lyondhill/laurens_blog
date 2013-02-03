<?php get_header(); ?>

<?php if (have_posts()) : ?>

<div id="pageheader">
<h1>
<?php
							if ( is_category() ) {
								printf( __( 'Category Archives: %s', 'fotogram' ), '<span>' . single_cat_title( '', false ) . '</span>' );

							} elseif ( is_tag() ) {
								printf( __( 'Tag Archives: %s', 'fotogram' ), '<span>' . single_tag_title( '', false ) . '</span>' );

							} elseif ( is_author() ) {
								printf( __( 'Author News Archive %s', 'fotogram' ), '<span>' . single_tag_title( '', false ) . '</span>' );

							} elseif ( is_day() ) {
								printf( __( 'Daily Archives: %s', 'fotogram' ), '<span>' . get_the_date() . '</span>' );

							} elseif ( is_month() ) {
								printf( __( 'Monthly Archives: %s', 'fotogram' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

							} elseif ( is_year() ) {
								printf( __( 'Yearly Archives: %s', 'fotogram' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

							} else {
								_e( 'Archives', 'fotogram' );

							}
						?>
						</h1>
 	  <?php } ?>
</div>

<?php while (have_posts()) : the_post(); ?>




<div class="postcontainer">
<div class="postdate"><?php echo get_the_date('jS M y'); ?></div>
<div class="postimage"><a href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a></div>
<div class="postinfo">
<h3><a href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title_attribute(); ?></a></h3>
<?php the_excerpt(); ?>
</div>
<div class="postnav">
<span class="postread"><a href="<?php the_permalink()?>" title="<?php _e('Read more on','fotogram');?> <?php the_title_attribute(); ?>"><?php _e('Read more','fotogram');?></a></span>
<span class="postcomment"><a href="<?php the_permalink()?>#comments" title=""><?php comments_number( '0', '1', '%' ); ?></a></span>
</div>
</div>


<?php endwhile; ?>




<div id="postnavigation">
<div id="previousposts"><?php next_posts_link( __( 'Previous Posts', 'fotogram' ) ); ?></div>
<div id="nextposts"><?php previous_posts_link( __( 'Next Posts', 'fotogram' ) ); ?></div>
</div>

<?php else : ?>
<?php endif; ?>


</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>