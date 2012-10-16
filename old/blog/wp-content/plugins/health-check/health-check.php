<?php
/*
	Plugin Name: Health Check
	Plugin URI: http://wordpress.org/extend/plugins/health-check/
	Description: Checks the health of your WordPress install
	Author: The WordPress.org community
	Version: 0.2.1
	Author URI: http://wordpress.org/extend/plugins/health-check/
 */
define('HEALTH_CHECK_PHP_VERSION', '5.2.4');
define('HEALTH_CHECK_MYSQL_VERSION', '5.0');

class HealthCheck {

	function action_plugins_loaded() {
		if ( get_transient( 'health-check-version-test' ) )
			add_action('admin_notices', array('HealthCheck', 'action_admin_notice'));
	}

	function action_activate() {
		set_transient( 'health-check-version-test', '1', 300 );
	}

	function action_admin_notice() {
		global $wpdb;
		$php_version_check = version_compare(HEALTH_CHECK_PHP_VERSION, PHP_VERSION, '<=');
		$mysql_version_check = version_compare(HEALTH_CHECK_MYSQL_VERSION, $wpdb->db_version(), '<=');
		$db_dropin = file_exists( WP_CONTENT_DIR . '/db.php' );
		$message ='';
		
		if ( !$php_version_check ) 
			$message .= "<p><strong>".__('Warning:', 'health-check')."</strong> ".sprintf(__('Your server is running PHP version %1$s. WordPress 3.2 will require PHP version %2$s.', 'health-check'), PHP_VERSION, HEALTH_CHECK_PHP_VERSION)."</p>";
		if ( !$mysql_version_check ) {
			$message .= "<p><strong>".__('Warning:', 'health-check')."</strong> ".sprintf(__('Your server is running MySQL version %1$s. WordPress 3.2 will require MySQL version %2$s', 'health-check'), $wpdb->db_version(), HEALTH_CHECK_MYSQL_VERSION)."</p>";
			
			if ( $db_dropin )
				$message .= "<p><strong>".__('Note:', 'health-check')."</strong> ".__('You are using a <code>wp-content/db.php</code> drop-in which may not being using a MySQL database.', 'health-check')."</p>";
		}

		if ( $php_version_check && $mysql_version_check ) {
			$message .= "<p><strong>".__('Excellent:', 'health-check')."</strong> ".sprintf(__('Your server is running PHP version %1$s and MySQL version %2$s which will be great for WordPress 3.2 onward.', 'health-check'), PHP_VERSION, $wpdb->db_version())."</p>";
			$message = "<div id='health-check-warning' class='updated'>" . $message . "</div>";
		} else {
			$message .= "<p>".__('Once your host has upgraded your server you can re-activate the plugin to check again.', 'health-check')."</p>";
			$message = "<div id='health-check-warning' class='error'>" . $message . "</div>";
		}
		echo $message;

		delete_transient( 'health-check-version-test' );
	}

}
/* Initialize ourselves */
add_action('plugins_loaded', array('HealthCheck','action_plugins_loaded'));
register_activation_hook( __FILE__, array( 'HealthCheck', 'action_activate' ) );
?>
