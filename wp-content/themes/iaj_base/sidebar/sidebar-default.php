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

<div id = "right_bar">
	<div id="sidebar">
		<?php wp_nav_menu( array('depth'=>'1') ); ?>
	</div><!--#sidebar-->
	


	<?php if (is_front_page()) { ?>
	
		<div id="jer_sidebar_pics">
			<img id="jer_logo_text" src="<?php bloginfo("template_directory"); ?>/timthumb.php?src=<?php bloginfo("template_directory"); ?>/img/logoPic.png&w=200" />
			<img id="jer_logo_quotes" src="<?php bloginfo("template_directory"); ?>/timthumb.php?src=<?php bloginfo("template_directory"); ?>/img/jeremyPic.png&w=200" />
		</div>
	
	
	<?php } else { ?>
	
		<div id = "vertBanner">
			<a href = "http://www.zenomountainfarm.org/camps/cheshire-film/" target = "_blank"><img src="<?php bloginfo('template_directory'); ?>/img/CheshireAdventures_JV-Banner1.jpg" alt="Support Cheshire Film Camp!" width="180" height="400"/></a>
		</div>
	<?php }; ?>


