<?php
/**
 * Plugin Name: Vnnergy Exam Center 
 * Plugin URI: http://vnnergy.com   
 * Description: This Plugin use for personality test.
 * Version: 1.0.0
 * Author: Vnnergy 
 * Author URI: http://vnnergy.com  
 */

//Requir difine 
define('_PLUGPRE','exam'); // prefix
define('_EXAMDOMAIN', 'exam'); // use textdomain
define('PLUGDIR', plugin_dir_path( __FILE__ )); // plungin directory path
define('PLUGDIRURL', plugin_dir_url( __FILE__ )); // plugin derectory url 
define('PLUGIN_INC', PLUGDIR.'/includes/'); // plugin include derectory 
define('ASSETS', PLUGDIRURL.'/assets/'); // plugin asset uri 
define('CSS', ASSETS.'css/'); // Css uri 
define('JS', ASSETS.'js/'); // Js uri 
define('CLASSES', PLUGIN_INC.'classes/'); // classes 


require_once PLUGIN_INC.'plugin_function.php';




