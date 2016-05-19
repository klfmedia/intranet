<?php
/**
 * BuddyPress Uploader templates
 *
 * This template is used to create the BuddyPress Uploader Backbone views
 *
 * @since 2.3
 *
 * @package BuddyPress
 * @subpackage bp-attachments
 */
?>
<script type="text/html" id="tmpl-upload-window">
	<?php if ( ! _device_can_upload() ) : ?>
		<h3 class="upload-instructions"><?php esc_html_e( 'The web browser on your device cannot be used to upload files.', 'thrive' ); ?></h3>
	<?php elseif ( is_multisite() && ! is_upload_space_available() ) : ?>
		<h3 class="upload-instructions"><?php esc_html_e( 'Upload Limit Exceeded', 'thrive' ); ?></h3>
	<?php else : ?>
		<div id="{{data.container}}">
			<div id="{{data.drop_element}}">
				<div class="drag-drop-inside">
					<p class="drag-drop-info"><?php esc_html_e( 'Drop your file here', 'thrive' ); ?></p>
					<p><?php _ex( 'or', 'Uploader: Drop your file here - or - Select your File', 'thrive' ); ?></p>
					<p class="drag-drop-buttons"><input id="{{data.browse_button}}" type="button" value="<?php esc_attr_e( 'Select your File', 'thrive' ); ?>" class="button" /></p>
				</div>
			</div>
		</div>
	<?php endif; ?>
</script>

<script type="text/html" id="tmpl-progress-window">
	<div id="{{data.id}}">
		<div class="bp-progress">
			<div class="bp-bar"></div>
		</div>
		<div class="filename">{{data.filename}}</div>
	</div>
</script>