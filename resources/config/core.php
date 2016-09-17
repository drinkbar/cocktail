<?php 
/************************************************************
 * !!! DO NOT CHANGE FOLLOWING LINES !!!
 ************************************************************/
/**
 * Creating constants for frequently used paths
 */
 defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/../lib'));
 
 defined("VIEW_PATH")
    or define("VIEW_PATH", realpath(dirname(__FILE__) . '/../views'));

 defined("TEMPLATE_PATH")
    or define("TEMPLATE_PATH", VIEW_PATH . '/template');
 
/**
 * Creating vendors constants
 */ 

?>