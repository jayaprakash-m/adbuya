<?php
ini_set("display_errors",1);
include_once('include/config.php');
// calls header page 
include_once('include/header.php');
// Page Rendering.
$pub->getTemplates(); 
 
// calls footer page
include_once('include/footer.php');
?>
