<?php
include_once('./classes/class.public.php');
$pub = new Pub();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Addbuya</title>
<link rel="shortcut icon" href="images/favicon.ico" />
<link href="styles/styles.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="scripts/chosen/chosen.css" />
<link type='text/css' href='styles/stylesheet.css' rel='stylesheet' media='screen' />
<link type='text/css' href='styles/basic.css' rel='stylesheet' media='screen' />
<link href="styles/addbuya.css" type="text/css" rel="stylesheet" />

<script src="scripts/jquery-1.9.0.min.js" type="text/javascript"></script>
<script src="scripts/addbuya.js" type="text/javascript"></script>
<script src="scripts/chosen/chosen.jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="scripts/jquery.simplemodal.js"></script>
<script type="text/javascript" src="scripts/init.js"></script>
<script type="text/javascript">
	/*
   Function : ddWithAutoSuggest()
   Description : For auto suggest with drop down function
   Author : A.Palani
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
			<div class="ui-input">
        	  <input type="text" name="textfield" id="textfield" placeholder="Enter Your Search term here…" maxlength="50"  class="inputbox"/>
			  <span class="ui-icon-delete"><img src="images/addbuya-Red-X-Icon.jpg"></span>
			</div>
			<div class="ui-input">
		<select data-placeholder="Levy..." style="width:43%" class="chzn-select optionCls txtbox wid inputbox" name="idfetchlevy" id="idfetchlevy">
		<option>--Select City--</option>
		<option>Bangalore</option>
		<option>Chennai</option>
		<option>Mumbai</option>
		<option>Coimbatore</option>
		<option>Madurai</option>
		<option>Calcutta</option>
		<option>New Delhi</option>
		<option>Hyderabad</option>
		<option>Trichy</option>
		<option>Vishakapttanam</option>
		<option>Cochin</option>
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

		<!-- Modal Ajax Login Form -->
<div id="login_form" style='display:none'>

<div id="status" align="left">

<center><h1 class="loginform"><img src="images/key.png" align="absmiddle">&nbsp;LOGIN</h1>

<div id="login_response"><!-- spanner --></div> </center>

<form id="login" action="javascript:alert('success!');">
<input type="hidden" name="action" value="user_login">
<input type="hidden" name="module" value="login">
<label>E-Mail</label><input class="modalbox" type="text" name="email"><br />  
<label>Password</label><input class="modalbox" type="password" name="password"><br />  
<label>&nbsp;</label><input class="modalbox" value="Login" name="Login" id="submit" class="big" type="submit" />

<div id="ajax_loading">
<img align="absmiddle" src="images/spinner.gif">&nbsp;Processing...
</div>

</form>
 </div>
</div>
<!-- Modal Ajax Login Form -->
        
        <div class="content_area">
		<!-------content area starts----->
<script type="text/javascript">ddWithAutoSuggest();</script>