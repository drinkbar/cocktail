<?php
require_once('../resources/config/core.php');
require_once(LIBRARY_PATH . '/templateFunctions.php');

/*************************************************************
 * RENDER LAYOUT
 */
$view = "registration/register.php";
$variables = array();

// handle session parameter
require_once(LIBRARY_PATH . '/session.php');

renderLayout($view, $variables);