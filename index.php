<?php        
    require_once('includes/class/TEDx.php');    
    try {
        $myTEDx = new TEDx($tedx_manager);
    } catch (Exception $e) {		       				   
    	print "The application is temporarily unavailable. ";
        print "Please try again later.";				   
    }								       				   
?>