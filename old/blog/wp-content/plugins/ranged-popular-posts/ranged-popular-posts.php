<?php
/*
Plugin Name: Ranged Popular Posts Widget
Plugin URI: http://suhanto.net/ranged-popular-posts-widget-wordpress/
Description: Creates a ranged most popular posts for your WordPress blog based on the number of comments. You can choose the following posts interval to include as popular posts: all time, year(s), month(s), and week(s). Use widget control panel to manage the settings.
Author: Agus Suhanto
Version: 1.1
Author URI: http://suhanto.net/

Copyright 2010 Agus Suhanto (email : agus@suhanto.net)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

// WordPress plugin action hook
add_action('plugins_loaded', 'ranged_popular_posts_init');

// Initialization function
global $ranged_popular_posts;
function ranged_popular_posts_init() {
   $ranged_popular_posts = new ranged_popular_posts();
}

/*
 * This is the namespace for the 'ranged_popular_posts' plugin / widget.
 */
class ranged_popular_posts {

   protected $_name = "Ranged Popular Posts";
   protected $_folder;
   protected $_path;
   protected $_width = 250;
   protected $_height = 300;
   protected $_link = 'http://suhanto.net/ranged-popular-posts-widget-wordpress/';
   
   /*
    * Constructor
    */
   function __construct() {
      $path = __FILE__;
      if (!$path) { $path = $_SERVER['PHP_SELF']; }
         $current_dir = dirname($path);
      $current_dir = str_replace('\\', '/', $current_dir);
      $current_dir = explode('/', $current_dir);
      $current_dir = end($current_dir);
      if (empty($current_dir) || !$current_dir)
         $current_dir = 'ranged-popular-posts';
      $this->_folder = $current_dir;
      $this->_path = '/wp-content/plugins/' . $this->_folder . '/';

      $this->init();
   }
   
   /*
    * Initialization function, called by plugin_loaded action.
    */
   function init(){
      add_filter("plugin_action_links_$plugin", array(&$this, 'link'));
      load_plugin_textdomain($this->_folder, false, $this->_folder);
      if (!function_exists('register_sidebar_widget') || !function_exists('register_widget_control'))
         return;
      register_sidebar_widget($this->_name, array(&$this, "widget"));
      register_widget_control($this->_name, array(&$this, "control"), $this->_width, $this->_height);
   }
   
   /*
    * Options validation.
    */
   function validate_options(&$options) {
      if (!is_array($options)) {
         $options = array(
            'title' => 'Popular Posts',
            'num_of_posts' => '5', 
            'range_count' => '1', 
            'range_type' => 'year', 
            'show_num_of_comments' => 'checked',
            'link_to_us' => '');
      }
   }
   
   /*
    * Called by register_sidebar_widget() function.
    * Rendering of the widget happens here.
    */
   function widget($args) {
      global $wpdb;
   
      extract($args);
   
      $options = get_option($this->_folder);
      $this->validate_options($options);
   
      $popular_sql = "SELECT ID, post_title, comment_count FROM $wpdb->posts WHERE post_type = 'post' && post_status = 'publish' && comment_count > 0";
      if ($options['range_type'] != 'all time')
         $popular_sql .= " AND date_sub(curdate(), interval '" . $options['range_count'] . "' " . $options['range_type'] . ") < post_date";
      $popular_sql .= " ORDER BY comment_count DESC LIMIT " . $options['num_of_posts'];
      
      $populars = $wpdb->get_results($popular_sql);
      
      echo $before_widget;
      echo $before_title;
      echo $options['title'];
      echo $after_title;
      
      echo '<ul>';
      if (!empty($populars)) {
         foreach ($populars as $popular) {
            if ($options['show_num_of_comments'] == 'checked')
               $num_of_comments = ' (' . $popular->comment_count . ')';
               echo "\t" . '<li><a href="' . get_permalink($popular->ID) . '">' . $popular->post_title . '</a>' . $num_of_comments . '</li>' . "\n";
         }
      } else {
         _e('No posts to display', $this->_folder);
      }
      echo '</ul>';
      if ($options['link_to_us'] == 'checked') {
         echo '<div class="rpp-link"><a href="' . $this->_link . '" target="_blank">'. __('Get this widget for your own blog free!', $this->_folder) . '</a></div>';
      }
      
      echo $after_widget;
   }
   
   /*
    * Plugin control funtion, used by admin screen.
    */
   function control() {
      $options = get_option($this->_folder);
      $this->validate_options($options);
         
      if ($_POST[$this->_folder . '-submit']) {
         $options['title'] = htmlspecialchars(stripslashes($_POST[$this->_folder . '-title']));
   	     $options['range_count'] = htmlspecialchars($_POST[$this->_folder . '-range_count']);
   	     $options['range_type'] = htmlspecialchars($_POST[$this->_folder . '-range_type']);
         $options['num_of_posts'] = htmlspecialchars($_POST[$this->_folder . '-num_of_posts']);
         $options['show_num_of_comments'] = htmlspecialchars($_POST[$this->_folder . '-show_num_of_comments']);
         $options['link_to_us'] = htmlspecialchars($_POST[$this->_folder . '-link_to_us']);
         update_option($this->_folder, $options);
      }
?>
      <p>
         <label for="<?php echo($this->_folder) ?>-title"><?php _e('Title: ', $this->_folder); ?> </label>
         <input type="text" id="<?php echo($this->_folder) ?>-title" name="<?php echo($this->_folder) ?>-title" value="<?php echo $options['title'];?>" />
      </p>
      <p>
         <label for="<?php echo($this->_folder) ?>-range_count"><?php _e('Posts Interval: ', $this->_folder); ?> </label>
         <input type="text" id="<?php echo($this->_folder) ?>-range_count" name="<?php echo($this->_folder) ?>-range_count" value="<?php echo $options['range_count'];?>" size="1" />
         <select id="<?php echo($this->_folder) ?>-range_type" name="<?php echo($this->_folder) ?>-range_type">
   	        <option value="all time" <?php echo $options['range_type'] == 'all time' ? 'selected="true"' : ''; ?>><?php _e('all time', $this->_folder) ?></option>
   	        <option value="year" <?php echo $options['range_type'] == 'year' ? 'selected="true"' : ''; ?>><?php _e('year(s)', $this->_folder) ?></option>
   	        <option value="month" <?php echo $options['range_type'] == 'month' ? 'selected="true"' : ''; ?>><?php _e('month(s)', $this->_folder) ?></option>
   	        <option value="week" <?php echo $options['range_type'] == 'week' ? 'selected="true"' : ''; ?>><?php _e('week(s)', $this->_folder) ?></option>
   	     </select>
      </p>
      <p>
         <label for="<?php echo($this->_folder) ?>-num_of_posts"><?php _e('Number of posts to display: ', $this->_folder); ?></label>
         <input type="text" id="<?php echo($this->_folder) ?>-num_of_posts" name="<?php echo($this->_folder) ?>-num_of_posts" value="<?php echo $options['num_of_posts'];?>" size="5" />
      </p>
      <p>
         <input type="checkbox" id="<?php echo($this->_folder) ?>-show_num_of_comments" name="<?php echo($this->_folder) ?>-show_num_of_comments" value="checked" <?php echo $options['show_num_of_comments'];?>" />
         <label for="<?php echo($this->_folder) ?>-show_num_of_comments"><?php _e('Show number of comments', $this->_folder); ?></label>
         <input type="hidden" id="<?php echo($this->_folder) ?>-submit" name="<?php echo($this->_folder) ?>-submit" value="1" />
      </p>
      <p>
          <input type="checkbox" id="<?php echo($this->_folder) ?>-link_to_us" name="<?php echo($this->_folder) ?>-link_to_us" value="checked" <?php echo $options['link_to_us'];?> /> <?php _e('Link to us (optional)', $this->_folder) ?> (<a href="<?php echo $this->_link?>#link-to-us" target="_blank">?</a>) 
      </p>
      <p><?php printf(__('More details about these options, visit <a href="%s" target="_blank">Plugin Home</a>', $this->_folder), $this->_link) ?></p>
      <input type="hidden" id="<?php echo($this->_folder) ?>-submit" name="<?php echo($this->_folder) ?>-submit" value="1" />
<?php
   }
   
   /*
    * Add extra link to widget list.
    */
   function link($links) {
      $options_link = '<a href="' . $this->_link . '">' . __('Donate', $this->_folder) . '</a>';
      array_unshift($links, $options_link);
      return $links;
   }

}
?>