<?php
// Load the NV library
require_once 'nv/NV.php';

// Initialize the NV library (also returns requirements check)
NV::init();

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}