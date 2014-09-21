<?php
/**
 * Plugin Name: Mienko Media tags
 * Plugin URI: http://mienko.no	
 * Description: Adds tags to media attachments.
 * Author: Mienko
 * Version: 0.1.0
 * Author URI: http://mienko.no
 * License: GPL2+
 */

function mek_register_media_tags() {
	register_taxonomy_for_object_type( 'post_tag' , 'attachment' );
}
add_action( 'init' , 'mek_register_media_tags' );
?>
