<div class="sidebar" id="leftcol">


<?php wp_nav_menu( array( 'theme_location' => 'side-menu', 'depth' => '1' ) ); ?>

<?php if ( ! dynamic_sidebar( 'sidebar-area' ) ) : ?>

<div class="widgetcontainer">
<h2><?php _e('Pages','fotogram');?></h2>
<ul>
<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
</ul>
</div>

<div class="widgetcontainer">
<h2><?php _e('Categories','fotogram');?></h2>
<ul>
<?php wp_list_categories('title_li=&show_count=0'); ?>
</ul>
</div>

<div class="widgetcontainer">
<h2><?php _e('Archives','fotogram');?></h2>
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>
</div>

<div class="widgetcontainer">
<h2><?php _e('Links','fotogram');?></h2>
<ul>
<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
</ul>
</div>

<?php endif; // end sidebar widget area ?>


</div>