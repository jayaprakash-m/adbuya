<?php
    include('../include/config.php');
    include('../classes/class.database.php');
	include('../classes/class.public.php');

	global $pub;
	$db = new Dbconnection();
	$pub = new pub();
        $id = $_REQUEST['category_id'];
		$level_no = $_REQUEST['level_no'];
	$productlist_by_category = $pub->getCategory($id,$level_no);
	echo json_encode($productlist_by_category);
?>
