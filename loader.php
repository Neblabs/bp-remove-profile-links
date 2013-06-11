<?php 
/*
Plugin Name: BP Remove Profile Links
Plugin URI: http://www.wordpress.com
Description: Removes the Auto Created Links Form BP Profiles. 
No settings just activate it to remove the links.
Version: 1.2
Requires at least: WordPress 3.2 / BuddyPress 1.5.
Tested up to: WordPress 3.5.1 / BuddyPress 1.7.2
License: GNU/GPL 2
Author: @bphelp
Author URI: http://www.wordpress.com
*/

function bp_remove_profile_links_init() {
	require( dirname( __FILE__ ) . '/remove-profile-links.php' );
}
add_action( 'bp_include', 'bp_remove_profile_links_init' );
?>