<?php
include('./classes/class.database.php');
include('./classes/class.public.php');
$db = new Dbconnection();
$pub = new Pub();
$citylist = $pub->getCity(); 
$arealist = $pub->getArea(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>adbuya</title>
<link rel="shortcut icon" href="images/favicon.ico" />
<link href="styles/styles.css" type="text/css" rel="stylesheet" />
<link href="styles/addbuya.css" type="text/css" rel="stylesheet" />

<link type='text/css' href='styles/stylesheet.css' rel='stylesheet' media='screen' />
<link type='text/css' href='styles/basic.css' rel='stylesheet' media='screen' />

<!--<script src="/scripts/jquery-1.9.0.min.js" type="text/javascript"></script>-->
<script type="text/javascript" src="scripts/jquery-1.8.1.js" ></script>
<script type="text/javascript" src="scripts/addbuya.js" ></script>
<script type="text/javascript" src="scripts/init.js"></script>

<!-- Search Enabled Dropdown Begins -->
<link rel="stylesheet" href="scripts/chosen/chosen.css" />
<script src="scripts/chosen/chosen.jquery.js" type="text/javascript"></script>
<!-- Search Enabled Dropdown Ends -->

<script type="text/javascript">
/*
   Function : ddWithAutoSuggest()
   Description : For auto suggest with drop down function
   Author : R.S.VINAYAGAM
*/
function ddWithAutoSuggest(){
	$(".chzn-select").chosen(); $(".chzn-select-deselect").chosen({allow_single_deselect:true}); 
}
		$(function(){
			$("input").keyup(function(){
				if(($(this).val().length)>0) {
					$(this).parent().addClass("ui-focus");
					$(this).parent().find(".ui-icon-delete").show();
				} else {
					$(this).parent().find(".ui-icon-delete").hide();
				}
			});
			$("input").blur(function(){
				$(this).parent().removeClass("ui-focus");
			});
			
			$(".ui-icon-delete").click(function(){
				$(this).parent().find("input").val("");
				$(this).hide();
			});
		});
</script>

<link href="http://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
</head>

<body>
<div id="main_wrapper">
	<div id="site_wrapper">
    	<div class="header">
        	<div class="login">
            	<a id="login_link" href="#">Login</a> <span>|</span> <a href="#">Register</a>
            </div>
        </div>
		<div class="logo">
        	<!--<h1><a href="#">a<span>ddb</span>uya</a></h1>-->
			<h1><a href="#"><img src="images/logo.png" alt="addbuya"></a></h1>
        </div>
        <div class="search_area">

        	<div class="search_but">

        	  <input type="text" name="textfield" id="textfield" placeholder="Enter Your Search term here…"  class="inputbox"/>
              <!--<input type="text" name="textfield2" id="textfield2" value="Enter Your Location here…" class="inputbox"/>-->
			  			<div class="ui-input">

		<select data-placeholder="Levy..." style="width:43%" class="chzn-select optionCls txtbox wid inputbox" name="idfetchlevy" id="idfetchlevy">
		<option>--Select City--</option>
		<?php

		foreach($citylist as $key=>$cty)
		{
			echo "<option value='".$key."'>".$cty."</option>";
		}
		?>
		</select>
             <!-- <input type="text" name="textfield2" id="textfield2" placeholder="Enter Your Location here…" class="inputbox"/>
			  <span class="ui-icon-delete"><img src="http://www.uwindsor.ca/its/lotusnotes/sites/uwindsor.ca.its.lotusnotes/files/Red-X-Icon.jpg"></span>-->
			</div>

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
<script type="text/javascript">ddWithAutoSuggest();</script>