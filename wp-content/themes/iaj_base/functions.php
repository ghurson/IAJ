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

load_theme_textdomain('carrington-jam');

define('CFCT_DEBUG', false);
define('CFCT_PATH', trailingslashit(TEMPLATEPATH));

include_once(CFCT_PATH.'carrington-core/carrington.php');
include_once(CFCT_PATH.'functions/sidebars.php');

function explain_less_login_issues(){ return '<strong>ERROR</strong>: Entered credentials are incorrect.';}
add_filter( 'login_errors', 'explain_less_login_issues' );

function no_generator() { return ''; }  
add_filter( 'the_generator', 'no_generator' );

define('DISALLOW_FILE_EDIT', true);

?>