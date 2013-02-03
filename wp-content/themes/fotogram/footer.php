</div>
</div>
</div>

<div id="footer">

<div id="footercontent">
<div id="footertext">
Copyright &copy; <a title="<?php bloginfo('title')?>" href="<?php echo site_url()?>"><?php bloginfo('title')?></a>
</div>


<div id="icons">
<div id="socialicons"><?php $options = get_option( 'fotogram_theme_options' ); ?>
<?php if ( $options['facebookurl'] != '' ) : ?>
<div id="icon003"><h5><a href="<?php echo $options['facebookurl']; ?>" title="<?php bloginfo('name')?> <?php _e('on','fotogram');?> <?php _e( 'Facebook', 'fotogram' ); ?>"><span><?php _e( 'Facebook', 'fotogram' ); ?></span></a></h5></div>
<?php endif; ?>
<?php if ( $options['twitterurl'] != '' ) : ?>
<div id="icon004"><h5><a href="<?php echo $options['twitterurl']; ?>" title="<?php bloginfo('name')?> <?php _e('on','fotogram');?> <?php _e( 'Twitter', 'fotogram' ); ?>"><span><?php _e( 'Twitter', 'fotogram' ); ?></span></a></h5></div>
<?php endif; ?>
<?php if ( $options['youtubeurl'] != '' ) : ?>
<div id="icon005"><h5><a href="<?php echo $options['youtubeurl']; ?>" title="<?php bloginfo('name')?> <?php _e('on','fotogram');?> <?php _e( 'Youtube', 'fotogram' ); ?>"><span><?php _e( 'Youtube', 'fotogram' ); ?></span></a></h5></div>
<?php endif; ?>
</div>
<div id="wordpressicons"><?php printf( __( '<div id="icon002"><h5><a href="http://www.wordpress.org" title="%1$s"><span>%2$s</span></a></h5></div><div id="icon001"><h5><a href="http://www.ekitchen.org.uk" title="%3$s"><span>%4$s</span></a></h5></div>', 'fotogram' ), esc_attr('www.WordPress.org'), esc_attr( 'www.WordPress.org'), esc_attr('www.ekitchen.org.uk'), esc_attr( 'www.ekitchen.org.uk' )); ?></div>
</div>
</div>
</div>
<div id="tagline"><?php bloginfo('description'); ?></div>
<?php wp_footer()?>
</body>
</html>