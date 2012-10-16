	<div id="sidebar" class="grid_5">
		<ul class="nobullet">
			<li><?php if(function_exists('get_search_form')) : ?>
				<?php get_search_form(); ?>
				<?php else : ?>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
				<?php endif; ?></li>
				
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			

			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2>Author</h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>-->
			
			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <?php the_time('F, Y'); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the year <?php the_time('Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

			<?php } ?>

			</li> <?php }?>

			<?php //wp_list_pages('title_li=<h2>Pages</h2>' ); ?>

			<?php wp_list_categories('title_li=<h2>Categories</h2>'); ?>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
			<?php } ?>

			<?php endif; ?>

			<li>
			<h2>My UED Reading(finished)</h2>
		<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab" id="Player_ada82b94-5d43-4795-8d4a-65c3b3dff419"  WIDTH="160px" HEIGHT="600px"> <PARAM NAME="movie" VALUE="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Fycoh-20%2F8010%2Fada82b94-5d43-4795-8d4a-65c3b3dff419&Operation=GetDisplayTemplate"><PARAM NAME="quality" VALUE="high"><PARAM NAME="bgcolor" VALUE="#FFFFFF"><PARAM NAME="allowscriptaccess" VALUE="always"><embed src="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Fycoh-20%2F8010%2Fada82b94-5d43-4795-8d4a-65c3b3dff419&Operation=GetDisplayTemplate" id="Player_ada82b94-5d43-4795-8d4a-65c3b3dff419" quality="high" bgcolor="#ffffff" name="Player_ada82b94-5d43-4795-8d4a-65c3b3dff419" allowscriptaccess="always"  type="application/x-shockwave-flash" align="middle" height="600px" width="160px"></embed></OBJECT> <NOSCRIPT><A HREF="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Fycoh-20%2F8010%2Fada82b94-5d43-4795-8d4a-65c3b3dff419&Operation=NoScript">Amazon.com Widgets</A></NOSCRIPT>
			</li>	

			<li>
			<h2 style="padding-top:20px;">My ToRead list</h2>
<SCRIPT charset="utf-8" type="text/javascript" src="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822/US/ycoh-20/8004/b733351d-c327-4054-8a68-c43d39eeacc3"> </SCRIPT> <NOSCRIPT><A HREF="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Fycoh-20%2F8004%2Fb733351d-c327-4054-8a68-c43d39eeacc3&Operation=NoScript">Amazon.com Widgets</A></NOSCRIPT>
			</li>

			<li><h2  style="padding-top:20px;">Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

		</ul>
	</div>

