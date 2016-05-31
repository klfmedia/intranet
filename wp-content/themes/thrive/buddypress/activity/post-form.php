<?php

/**
 * BuddyPress - Activity Post Form
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

?>

<form action="<?php bp_activity_post_form_action(); ?>" method="post" id="whats-new-form" name="whats-new-form" role="complementary">

	<?php

	/**
	 * Fires before the activity post form.
	 *
	 * @since BuddyPress (1.2.0)
	 */
	do_action( 'bp_before_activity_post_form' ); ?>

	<div class="row">
		<div class="col-sm-1 col-xs-2 no-pd-right">
			<div id="whats-new-avatar">
				<a href="<?php echo bp_loggedin_user_domain(); ?>">
					<?php bp_loggedin_user_avatar( 'width=' . bp_core_avatar_thumb_width() . '&height=' . bp_core_avatar_thumb_height() ); ?>
				</a>
			</div>
		</div>
		<div class="col-sm-11 col-xs-10">
			<?php 
			$greetings = "";
				if ( bp_is_group() ) {
					$greetings = sprintf( __( "What's new in %s, %s?", 'thrive' ), bp_get_group_name(), bp_get_user_firstname( bp_get_loggedin_user_fullname() ) );
				} else {
					$greetings = sprintf( __( "What are you working on, %s?", 'thrive' ), bp_get_user_firstname( bp_get_loggedin_user_fullname() ) );
				}
			?>
			
			<div id="whats-new-content">
				<div id="whats-new-textarea">
					<textarea placeholder="<?php echo esc_attr($greetings); ?>" class="bp-suggestions" name="whats-new" id="whats-new" cols="50" rows="10"
					<?php if ( bp_is_group() ) : ?>data-suggestions-group-id="<?php echo esc_attr( (int) bp_get_current_group_id() ); ?>" <?php endif; ?>
					><?php if ( isset( $_GET['r'] ) ) : ?>@<?php echo esc_textarea( $_GET['r'] ); ?> <?php endif; ?></textarea>
				</div>

				<div id="whats-new-options">
					<div id="whats-new-submit">
						<input type="submit" name="aw-whats-new-submit" id="aw-whats-new-submit" value="<?php esc_attr_e( 'Post Update', 'thrive' ); ?>" />
					</div>

					<?php if ( bp_is_active( 'groups' ) && !bp_is_my_profile() && !bp_is_group() ) : ?>

					<div id="whats-new-post-in-box">

						<i class="material-icons md-24 top-5 md-dark">filter_list</i>

						<select id="whats-new-post-in" name="whats-new-post-in">
							<option selected="selected" value="0"><?php _e( 'My Profile', 'thrive' ); ?></option>

							<?php /*if ( bp_has_groups( 'user_id=' . bp_loggedin_user_id() . '&type=alphabetical&max=100&per_page=100&populate_extras=0&update_meta_cache=0' ) ) :
							while ( bp_groups() ) : bp_the_group(); ?>

							<option value="<?php bp_group_id(); ?>"><?php bp_group_name(); ?></option>

							<?php endwhile;
							endif; */?>

						</select>
					</div>
					<input type="hidden" id="whats-new-post-object" name="whats-new-post-object" value="groups" />

				<?php elseif ( bp_is_group_home() ) : ?>

				<input type="hidden" id="whats-new-post-object" name="whats-new-post-object" value="groups" />
				<input type="hidden" id="whats-new-post-in" name="whats-new-post-in" value="<?php bp_group_id(); ?>" />

			<?php endif; ?>

			<?php

			/**
			 * Fires at the end of the activity post form markup.
			 *
			 * @since BuddyPress (1.2.0)
			 */
			do_action( 'bp_activity_post_form_options' ); ?>

		</div><!-- #whats-new-options -->
	</div><!-- #whats-new-content -->
</div><!--.col-sm-9-->
</div><!--.row-->
<?php wp_nonce_field( 'post_update', '_wpnonce_post_update' ); ?>
<?php

	/**
	 * Fires after the activity post form.
	 *
	 * @since BuddyPress (1.2.0)
	 */
	do_action( 'bp_after_activity_post_form' ); ?>

</form><!-- #whats-new-form -->
