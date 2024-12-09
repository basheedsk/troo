<?php

//Get Current Theme Details 
$theme = wp_get_theme();
// set current theme version
define('troo_version',$theme->version);
// set current theme name
define('troo_themename',$theme->name); 
// set current theme version
define('troo_themedesc',$theme->description);
// Set Changelogs
define('troo_changelogs', get_stylesheet_directory_uri() .'/imports/changelog.txt');

define('troo_theme_options_file_name','divi-theme-option.json');
define('troo_theme_options_url',get_stylesheet_directory_uri() .'/imports/divi-theme-option.json');
// Set Latest Product URL 
// Set customizer_settings Json File Name 
define('troo_customizer_settings_file_name','divi-customizer.dat ');
// Set customizer_settings Json File URL 
define('troo_customizer_settings_url',get_stylesheet_directory_uri() .'/imports/divi-customizer.dat');
// Pramary Menu Name
define('main_menu','main_menu');
// Secondary Menu
define('secondary_menu','');
// Footer Menu
define('footer_menu','');
// Front Page
define('front_page','Home');