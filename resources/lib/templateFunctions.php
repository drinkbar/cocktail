<?php
 require_once(realpath(dirname(__FILE__) . '/../config/core.php'));
 
 function renderLayout($contentFile, $variables = array())
 {
	$contentFileFullPath = VIEW_PATH . '/' . $contentFile;
	
	// each key in the $variables array will become a variable
	if (count($variables) > 0) 
	{
		foreach ($variables as $key => $value) 
		{
			if (strlen($key) > 0) ${$key} = $value;
		}
	}
	
	// create layout
	require_once(TEMPLATE_PATH . '/header.php');
	// add content
	if(file_exists($contentFileFullPath))
	{
		require_once($contentFileFullPath);
	}
	// add footer
	require_once(TEMPLATE_PATH . '/footer.php');
 }
?>