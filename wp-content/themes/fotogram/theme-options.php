<?php

add_action( 'admin_init', 'fotogram_options_init' );
add_action( 'admin_menu', 'fotogram_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function fotogram_options_init(){
	register_setting( 'fotogram_options', 'fotogram_theme_options', 'fotogram_options_validate' );
}

/**
 * Load up the menu page
 */
function fotogram_options_add_page() {
	add_theme_page( __( 'Theme Options', 'fotogram' ), __( 'Theme Options', 'fotogram' ), 'edit_theme_options', 'theme_options', 'fotogram_options_do_page' );
}

/**
 * Create the options page
 */
function fotogram_options_do_page() {

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;
	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . wp_get_theme() . __( ' Theme Options', 'fotogram' ) . "</h2>"; ?>
		<p><?php _e( 'These options will let you setup the social icons at the top right of the theme. Add the URLs of your profiles to have the icons show up.', 'fotogram' ); ?></p>
		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'fotogram' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'fotogram_options' ); ?>
			<?php $options = get_option( 'fotogram_theme_options' ); ?>

			<table class="form-table">


				<?php
				/**
				 * Your Facebook Link
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Your Facebook Profile', 'fotogram' ); ?></th>
					<td>
						<input id="fotogram_theme_options[facebookurl]" class="regular-text" type="text" name="fotogram_theme_options[facebookurl]" value="<?php echo esc_url( $options['facebookurl'] ); ?>" />
						<label class="description" for="fotogram_theme_options[facebookurl]"><?php _e( 'Leave blank to hide Facebook Icon', 'fotogram' ); ?></label>
					</td>
				</tr>
				
				<?php
				/**
				 * Your Twitter Link
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Your Twitter Account', 'fotogram' ); ?></th>
					<td>
						<input id="fotogram_theme_options[twitterurl]" class="regular-text" type="text" name="fotogram_theme_options[twitterurl]" value="<?php echo esc_url( $options['twitterurl'] ); ?>" />
						<label class="description" for="fotogram_theme_options[twitterurl]"><?php _e( 'Leave blank to hide Twitter Icon', 'fotogram' ); ?></label>
					</td>
				</tr>
				
								<?php
				/**
				 * Your Youtube Link
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Your Youtube Channel', 'fotogram' ); ?></th>
					<td>
						<input id="fotogram_theme_options[youtubeurl]" class="regular-text" type="text" name="fotogram_theme_options[youtubeurl]" value="<?php echo esc_url( $options['youtubeurl'] ); ?>" />
						<label class="description" for="fotogram_theme_options[youtubeurl]"><?php _e( 'Leave blank to hide Youtube Icon', 'fotogram' ); ?></label>
					</td>
				</tr>
	
				
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'fotogram' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function fotogram_options_validate( $input ) {


	// Our text option must be safe text with no HTML tags
	$input['twitterurl'] = wp_filter_nohtml_kses( $input['twitterurl'] );
	$input['facebookurl'] = wp_filter_nohtml_kses( $input['facebookurl'] );
	$input['youtubeurl'] = wp_filter_nohtml_kses( $input['youtubeurl'] );
	
	// Encode URLs
	$input['twitterurl'] = esc_url_raw( $input['twitterurl'] );
	$input['facebookurl'] = esc_url_raw( $input['facebookurl'] );
	$input['youtubeurl'] = esc_url_raw( $input['youtubeurl'] );
	return $input;
}
?>