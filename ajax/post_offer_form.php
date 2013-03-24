<?php
    include('../include/config.php');
    include('../classes/class.database.php');
    include('../classes/class.public.php');

	$db = new Dbconnection();
	$pub = new pub();
	$productlist_by_category = $pub->insert_post_offer($_REQUEST);

?>
