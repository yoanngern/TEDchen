<?php
        
    // Templates directories
    define('TEDx_TPL_DIR', 'includes/templates/');
    define('TEDx_TPLC_DIR', 'includes/Smarty/templates_c/');
    
    // Smarty libs directory
    define('TEDx_SMARTY_DIR', 'includes/Smarty/libs/');
    
    //access to $tedx_manager;
	require_once(TEDx_ROOTPATH . '../tedx-config.php');

	//Error reporting. 
	ini_set("error_reporting", "true");
	error_reporting(E_ALL|E_STRCT);
?>