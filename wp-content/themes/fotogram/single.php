<?php get_header(); ?>



	<div id="pagecontent">
	
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div <?php post_class()?>>
			<h1><?php the_title()?></h1>
			
			
<?php the_content()?>
			
			<div class="postfooter">
			<?php the_date()?> <a href="<?php the_permalink(); ?>"><?php _e('Permalink','fotogram');?></a> <?php wp_link_pages( array( 'before' => __('Pages', 'fotogram'), 'after' =>'' ) ); ?><br/>
			<?php _e('Categories','fotogram');?>: <?php the_category(', '); ?> <?php if(has_tag()){the_tags( _e('Tags','fotogram') . ': ', ', ');}?>
			</div>
			
		
		</div>
		
		
<?php comments_template( '', true ); ?>
		<?php endwhile;endif;?>
	</div>
	

<div id="postnavigation">
<div id="previousposts"><?php previous_post_link('%link'); ?></div>
<div id="nextposts"><?php next_post_link('%link'); ?></div>
</div>


</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>