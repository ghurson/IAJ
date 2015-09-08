<?php

// This file is part of the Carrington JAM Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2010 Crowd Favorite, Ltd. All rights reserved.
// http://crowdfavorite.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

?>

<?php get_header(); ?>


<body id="home">
	<div id="bodyContainer">
		<?php get_sidebar(); ?>

	</div>
	<div id = "page_content">
		<div id = "page_header">
			<div id = "logoPadding">
				<a href="<?php bloginfo('wp_url'); ?>"><img src="<?php bloginfo("template_directory"); ?>/timthumb.php?src=<?php bloginfo("template_directory"); ?>/img/helloTag.png&w=300&zc=1"></a>
			</div>	

			<div id="jer_media_box">
				<a href="<?php bloginfo("template_directory"); ?>/media/demoReel.flv" id="jer_front_video"></a>
			</div>

		</div>
				
			<div id="content">
				<div class="inner">
					<h1 id = "page_title"><?php the_title(); ?></h1>
					<p>This section is under construction, and coming soon! Check back for updates.</p>
				</div>
				<div class="bg"></div>
			</div>

					<div id = "horzBanner">
						<a href = "<?php $var = get_field('bottom_ad','options'); print $var[0]['link']; ?>" target = "_blank"><img src="<?php $var = get_field('bottom_ad','options'); print $var[0]['image']; ?>" alt="Support Cheshire Film Camp!"/></a>
					</div>


					<div id = "footerOuter">
						<p>Website design and code by <a href="http://www.ghurson.com" target="_blank">Gregg Hurson</a></p>
					</div>
					<div class = 'clearer'></div>
				</div>
			</div>
			<?php get_footer(); ?>


