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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />

	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ); ?></title>

	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'carrington-jam' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'carrington-jam' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,700italic|Lilita+One|Swanky+and+Moo+Moo' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url') ?>" />
	
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory') ?>/css/iaj_base.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory') ?>/css/jquery.lightbox.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.corner.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.jplayer.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.cycle.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.color.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.lightbox.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.media.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.metadata.js" type="text/javascript"></script>
	<?php
	// Javascript for threaded comments
	if ( is_singular() ) { wp_enqueue_script( 'comment-reply' ); } ?>
	
	<?php wp_head(); ?>
</head>

<body>
