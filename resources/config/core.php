<?php 
/************************************************************
 * !!! DO NOT CHANGE FOLLOWING LINES !!!
 ************************************************************/

// set timezone
setlocale(LC_TIME, "de_DE");
date_default_timezone_set('Europe/Berlin');

 /**
 * Creating constants for frequently used paths
 */
 defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/../lib'));

 defined("SOURCE_PATH")
 	or define("SOURCE_PATH", realpath(dirname(__FILE__) . '/../src'));
 
 defined("VIEW_PATH")
    or define("VIEW_PATH", realpath(dirname(__FILE__) . '/../views'));

 defined("TEMPLATE_PATH")
    or define("TEMPLATE_PATH", VIEW_PATH . '/template');
 
/**
 * Creating vendors constants
 */ 

?>