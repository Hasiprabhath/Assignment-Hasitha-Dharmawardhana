<?php

/**
* Functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package assignmentbyhasitha
*/

/**** Add sidebar *****/
if ( function_exists('register_sidebar') )
register_sidebar();

/*Options page*/
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title' 	=> 'Theme General Settings',
    'menu_title'	=> 'Theme Settings',
    'menu_slug' 	=> 'theme-general-settings',
    'capability'	=> 'edit_posts',
    'redirect'		=> false
  ));

  acf_add_options_sub_page(array(
    'page_title' 	=> 'Theme Header Settings',
    'menu_title'	=> 'Header',
    'parent_slug'	=> 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title' 	=> 'Theme Footer Settings',
    'menu_title'	=> 'Footer',
    'parent_slug'	=> 'theme-general-settings',
  ));

}
