<?php
    include('../include/config.php');
    include('../classes/class.database.php');
	include('../classes/class.public.php');
	global $pub;
	$db = new Dbconnection();
	$pub = new pub();
    $id = $_REQUEST['product_type_id'];
	$productlist_by_category = $pub->getProduct_types($id);
	echo json_encode($productlist_by_category);
	
?>