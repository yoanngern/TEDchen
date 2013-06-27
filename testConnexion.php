<?php
//hello world!
echo "hello world!";

//access to $tedx_manager;
require_once('../tedx-config.php');
 
// Try to log 
$message = $tedx_manager->login( 'Penelope', 'anitakevinlove' ); // Visitor
//$message = $tedx_manager->login( 'Penelope', '1' ); // Wrong Password
//$message = $tedx_manager->login( 'admin', 'admin' ); // Admin
 
// Display message
echo '<strong>'.$message->getMessage().'</strong><br />';
?>