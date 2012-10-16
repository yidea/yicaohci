<?php
/*

Plugin Name: Most Popular Posts

Plugin URI: http://www.phpbits.info/

Description: This plugin will show most popular posts under each posts based on the post views.

Version: 1.0

Author: Thamizhchelvan

Author URI: http://www.freshpeak.com/

*/

function wp_popular_articles($content)
{
if(is_single())
{
global $table_prefix, $post;
$count = get_post_meta($post->ID,'wp_popularity',$single=true);
		delete_post_meta($post->ID,'wp_popularity');
		$count++;
		add_post_meta($post->ID,'wp_popularity',$count);
	$sql = "SELECT P.ID,P.post_title FROM ".$table_prefix."posts P, ".$table_prefix."postmeta PM WHERE P.ID = PM.post_id AND PM.meta_key='wp_popularity' AND P.ID <> $post->ID ORDER BY PM.meta_value DESC LIMIT 5";
	$result = mysql_query($sql);
	$output = "<fieldset><legend>Popular Posts</legend><ul>";
	if(mysql_num_rows($result) == 0)
	{
	$output .= "<li>No Popular Post Available</li>";
	}
	while($row = mysql_fetch_assoc($result))
	{
	$output .= "<li><a href='".get_permalink($row['ID'])."'>".$row['post_title']."</a></li>";		
	}
	
	$output .= "</ul></fieldset>	";
 $content .= $output;
}
return $content;
}

add_action('the_content','wp_popular_articles');
?>