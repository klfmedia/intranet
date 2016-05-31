<?php

/**
 * Fires before the activity directory listing.
 *
 * @since BuddyPress (1.5.0)
 */
do_action( 'bp_before_directory_activity' ); ?>

<div id="buddypress">

	<?php

	/**
	 * Fires before the activity directory display content.
	 *
	 * @since BuddyPress (1.2.0)
	 */
	do_action( 'bp_before_directory_activity_content' ); ?>

	<?php if ( is_user_logged_in() ) : ?>

		<?php bp_get_template_part( 'activity/post-form' ); ?>

	<?php endif; ?>

	<?php

	/**
	 * Fires towards the top of template pages for notice display.
	 *
	 * @since BuddyPress (1.0.0)
	 */
	do_action( 'template_notices' ); ?>

	<?php

	/**
	 * Fires before the display of the activity list.
	 *
	 * @since BuddyPress (1.5.0)
	 */
	do_action( 'bp_before_directory_activity_list' ); ?>
	<div id="item-body">
		<div class="activity">
			<?php bp_get_template_part( 'activity/activity-loop' ); ?>
		</div><!-- .activity -->
	</div>
	<?php

	/**
	 * Fires after the display of the activity list.
	 *
	 * @since BuddyPress (1.5.0)
	 */
	do_action( 'bp_after_directory_activity_list' ); ?>

	<?php

	/**
	 * Fires inside and displays the activity directory display content.
	 */
	do_action( 'bp_directory_activity_content' ); ?>

	<?php

	/**
	 * Fires after the activity directory display content.
	 *
	 * @since BuddyPress (1.2.0)
	 */
	do_action( 'bp_after_directory_activity_content' ); ?>

	<?php

	/**
	 * Fires after the activity directory listing.
	 *
	 * @since BuddyPress (1.5.0)
	 */
	do_action( 'bp_after_directory_activity' ); ?>

</div>
