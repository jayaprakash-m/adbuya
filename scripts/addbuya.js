//onclicking Job Post Plus button
function job_post_plus()
{
	$('#justpost_plus').removeClass('dblock').addClass('dnone');
	$('#justpost_minus').removeClass('dnone').addClass('dblock');
	$('#just_post_off_add_plus').removeClass('dnone').addClass('dblock');
	$('#just_post_want_add').removeClass('dnone').addClass('dblock');
	$('.expand_bor').removeClass('dnone').addClass('dblock');
}

//onclicking Job Post Minus button
function job_post_minus()
{
	$('#justpost_plus').removeClass('dnone').addClass('dblock');
	$('#justpost_minus').removeClass('dblock').addClass('dnone');
	$('#just_post_off_add_plus').removeClass('dblock').addClass('dnone');
	$('#just_post_off_add_minus').removeClass('dblock').addClass('dnone');
	$('#just_post_want_add').removeClass('dblock').addClass('dnone');
	$('#just_post_off_content').removeClass('dblock').addClass('dnone');
	$('.expand_bor').removeClass('dblock').addClass('dnone');
}


//onclicking allcategory Plus button
function allcategory_plus()
{
     $('#allcategory_plus').removeClass('dblock').addClass('dnone');
	 $('#allcategory_minus').removeClass('dnone').addClass('dblock');
}


//onclicking allcategory Minus button
function allcategory_minus()
{
	$('#allcategory_plus').removeClass('dnone').addClass('dblock');
	$('#allcategory_minus').removeClass('dblock').addClass('dnone');
}


//onclicking Job Post Off Plus button
function just_post_off_add_plus()
{
	$('#just_post_off_add_minus').removeClass('dnone').addClass('dblock');
	$('#just_post_off_add_plus').removeClass('dblock').addClass('dnone');
	$('#just_post_off_content').removeClass('dnone').addClass('dblock');
}


//onclicking Job Post Minus button
function just_post_off_add_minus()
{
	$('#just_post_off_add_plus').removeClass('dnone').addClass('dblock');
	$('#just_post_off_add_minus').removeClass('dblock').addClass('dnone');
	$('#just_post_off_content').removeClass('dblock').addClass('dnone');
}


//onclicking collaps all button
function collaps_all()
{
	$('#justpost_plus').removeClass('dnone').addClass('dblock');
	$('#justpost_minus').removeClass('dblock').addClass('dnone');
	$('#just_post_off_add_plus').removeClass('dblock').addClass('dnone');
	$('#just_post_off_add_minus').removeClass('dblock').addClass('dnone');
	$('#just_post_want_add').removeClass('dblock').addClass('dnone');
	$('#just_post_off_content').removeClass('dblock').addClass('dnone');
	$('.expand_bor').removeClass('dblock').addClass('dnone');
}


$(document).ready(function(){
    
	// Text Field on fucus default value add /remove.
	$("#textfield").focus(function(){
	   $("#textfield").val("");
	});

	$("#textfield").blur(function(){
	   $("#textfield").val("Enter Your Search term here…");
	});
	
	$("#textfield2").focus(function(){
	   $("#textfield2").val("");
	});

	$("#textfield2").blur(function(){
	   $("#textfield2").val("Enter Your Location here…");
	});
	
	
	
	// Categories onmouseover change class
	$('.want_cat').hover(function(){
	   //$('.want_cat').find("a").removeClass('active');
	   $(this).find("a").addClass('active');
	},
	function(){
	   $(this).find("a").removeClass('active');
	});
	
	

});

	// Categories onclick.
	function getCategory_1(id,thisdiv,level_no)
	{
	   $('.want_cat').find("a").removeClass('clicked');
	   $(thisdiv).find("a").addClass('clicked');
       
	        $("#category_id").val(id);
	   	// get category_2 based on category.
		$.ajax({
		type: "POST",
		url: "ajax/category",
		dataType : 'JSON',
		data: {'category_id': id,'level_no':level_no}
		}).done(function( data_val ) {	
		    $("#category_2").html("");
			$("#category_3").html("");
			$.each(data_val,function(i,val){
			    //alert(i+"  "+val);
				$("#category_2").append('<div class="cat_list" onclick="getCategory_2('+i+',this,3)" id='+i+'><p><a href="javascript:void(0);">'+val+'</a></p></div>');
			});
			// category_2 onmouseover change class
			$('#category_2 .cat_list').hover(function(){
			   $(this).find("p").addClass('select');
			   $(this).find("a").addClass('active');
			},
			function(){
			   $(this).find("p").removeClass('select');
			   $(this).find("a").removeClass('active');
			});
		});
		
		
            $("#form_type_id").val(id);
	   // Call dynamic form throug ajax..
		$.ajax({
		type: "POST",
		url: "ajax/form",
		data: { category_id: id}
		}).done(function( data_val ) {
		//alert( "Data Saved: " + msg );
		$('#dynamic_form_fields').html(data_val);
		});
	}
	
    // category_2 onclick.
	function getCategory_2(id,thisdiv,level_no)
	{

       $("#product_id").val(id);
	   $('#category_2 .cat_list').find("p").removeClass('clicked');
	   $(thisdiv).find("p").addClass('clicked');
	   
	   	// get category_2 based on category.
		$.ajax({
		type: "POST",
		url: "ajax/category",
		dataType : 'JSON',
		cache:false,
		data: {'category_id': id,'level_no':level_no}
		}).done(function( data_val ) {	
		    $("#category_3").html("");
			$.each(data_val,function(i,val){
				$("#category_3").append('<div class="cat_list"  id='+i+'><p><a href="javascript:void(0);">'+val+'</a></p></div>');
			});
			
			$('#category_3 .cat_list').hover(function(){
			   $(this).find("p").addClass('select');
			   $(this).find("a").addClass('active');
			},
			function(){
			   $(this).find("p").removeClass('select');
			   $(this).find("a").removeClass('active');
			});
			
			// Product Types onclick.
			$('#category_3 .cat_list').click(function(){
			$('#category_3 .cat_list').find("p").removeClass('clicked');
             $("#product_type_id").val($(this).attr('id'));
			$(this).find("p").addClass('clicked');
			});
		
		}); 
	}
	
	function post_offer_ad()
	{
	    $.ajax({
			type: "POST",
			url: "form_submit/post_offer_form",
			data: $("#post_offer_ad").serialize()
			}).done(function( data_val ) {
			alert("Record saved successfully");
		});
		 return false;
	}
	
