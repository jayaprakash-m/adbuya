<?php
include_once('./classes/class.public.php');
$pub = new Pub();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>adbuya</title>
<link href="/styles/styles.css" type="text/css" rel="stylesheet" />
<link href="/styles/addbuya.css" type="text/css" rel="stylesheet" />
<script src="/scripts/jquery-1.9.0.min.js" type="text/javascript"></script>
<script src="/scripts/addbuya.js" type="text/javascript"></script>
</head>

<body>
<div id="main_wrapper">
	<div id="site_wrapper">
    	<div class="header">
        	<div class="login">
            	<a href="#">Login</a> <span>/</span> <a href="#">Register</a>
            </div>
        </div>
        <div class="logo">
        	<h1><a href="#">a<span>ddb</span>uya</a></h1>
        </div>
        <div class="search_area">
        	<div class="search_but">
        	  <input type="text" name="textfield" id="textfield" value="Enter Your Search term here…"  class="inputbox"/>
              <input type="text" name="textfield2" id="textfield2" value="Enter Your Location here…" class="inputbox"/>
        	  <input type="submit" name="button" id="button" value="" class="sub_but" />
        	</div>
        </div>
        
        <div class="expand_area">
        	<div class="justpost" id="justpost_plus" onclick="job_post_plus()">
            	<h1><a  href="#">+ Just Post</a></h1>
            </div>
			<div class="justpost  dnone" id="justpost_minus"  onclick="job_post_minus()">
            	<h1><a  href="#">- Just Post</a></h1>
            </div>
            <div class="allcategory"  id="allcategory_plus" onclick="allcategory_plus();">
            	<h1><a href="#">+ All Category</a></h1>
            </div>
			<div class="allcategory  dnone"  id="allcategory_minus"  onclick="allcategory_minus();">
            	<h1><a href="#">- All Category</a></h1>
            </div>
        </div>

        
        <div class="content_area">
		<!-------content area starts----->