<?php
class Pub
{
     function __contruct()
	 {
	 
	 }
	
	public function  getTemplates($citylist,$arealist) {
	
		// TO GET THE PAGE NAME:
		$page  =isset($_REQUEST['page']) ? $_REQUEST['page'] : "index";
		$section  =isset($_REQUEST['section']) ? $_REQUEST['section'] : " ";		 
		if($section!=" "){
			if(file_exists(FILE_PATH."/pages/".$section."/".$page.".php")) { 		
				include_once("./pages/".$section."/".$page.".php");			 
			}else{
				include_once("./pages/pagenotfound.php");
			}
		}else{
		   include_once("./pages/index.php"); 
		}	
	}
	
	
	public function getCategory($id,$level_no){
	   // To get the categories list
	   $arr = array();
	   
	   if($level_no == 2)
	   {
			$query = "select id,category_name,group_id from ad_master_categorylevel2 where cat_level1_id = '$id' and status = '1'";
	   }
	   else if($level_no == 3)
	   {
			$query = "select id,category_name from ad_master_categorylevel3 where cat_level2_id = '$id' and status = '1'";
	   }
	   else if($level_no == 4)
	   {
			$query = "select id,category_name from ad_master_categorylevel4 where cat_level3_id = '$id' and status = '1'";
	   }
	   else
	   {
			$query = "select id,category_name from ad_master_categorylevel where status = '1'";
	   }
	   
	   $result  = mysql_query($query);
	   if($level_no == 2)
	   {
			while($res = mysql_fetch_array($result))
			{
				$arr[$res['id']]['name'] = $res['category_name'];
				$arr[$res['id']]['group_id'] = $res['group_id'];
			}
	   }
	   else
	   {
	   		while($res = mysql_fetch_array($result))
			{
				$arr[$res['id']] = $res['category_name'];
			}
	   }
		
	   
	   return $arr;   
	}
	
	
	
		public function getCity(){
	   // To get the cities list
	   $arr = array();
	   $query = "select id,city from ad_master_city where status = '1'";
	   $result  = mysql_query($query);
	   while($res = mysql_fetch_array($result))
	   {
		   $arr[$res['id']] = $res['city'];
	   }
	   return $arr;   
	}
	
	public function getArea(){
	   // To get the cities list
	   $arr = array();
	   $query = "select id,area from ad_master_area where status = '1'";
	   $result  = mysql_query($query);
	   while($res = mysql_fetch_array($result))
	   {
		   $arr[$res['id']] = $res['area'];
	   }
	   return $arr;   
	}
	
	public function getProduct_types($id){
	   // To get the category list
	   $arr = array();
	   $query = "select id,name from master_product_types where product_id = $id";
	   $result  = mysql_query($query);
	   while($res = mysql_fetch_array($result))
	   {
		   $arr[$res['id']] = $res['name'];
	   }
	   return $arr;
	   
	}

        
        public function insert_post_offer($formdata)
        {
			$category_level1 = $formdata['category_level1'];
			$category_level2 = $formdata['category_level2'];
			$category_level3 = $formdata['category_level3'];
			$category_level4 = $formdata['category_level4'];
		    $form_type_id = $formdata['form_type_id'];
			$your_ad_title = $formdata['your_ad_title'];
			$your_ad_desc = $formdata['your_ad_desc'];
			$your_sms_look = $formdata['your_sms_look'];
			$you_tube_link = $formdata['youtube_link']; 
			$website_link = $formdata['website_link'];
			$city = $formdata['city'];
			$area = $formdata['area'];
			$contact_by = $formdata['contact_by'];
			$email_id = $formdata['email'];
			$tags = $formdata['tags'];

			
			$query = "insert into buy_post_offer_ad set 
			category_level1='$category_level1',
			category_level2='$category_level2',
			category_level3='$category_level3',
			category_level4='$category_level4',
			form_type_id = '$form_type_id',
			ad_title='$your_ad_title',
			ad_desc='$your_ad_desc',
			sms_ad_look='$your_sms_look',
			you_tube_link='$you_tube_link',
			website_link='$website_link',
			city='$city',
			area='$area',
			contact_by='$contact_by',
			email_id='$email_id',
			tags = '$tags'";

            $result  = mysql_query($query);
            $last_insert_id = mysql_insert_id();

            if($form_type_id==1)
			{
				$price = $formdata['price'];
				$delivery_mode = $formdata['delivery_mode'];
				$free_with_this = $formdata['free_with_this']; 
				$condition = $formdata['condition']; 
				$advertiser = $formdata['advertiser']; 
				$brand = $formdata['brand']; 
				$model = $formdata['model']; 
				
				$query1 = "insert into buy_offer_sub_form1 
				set common_form_id='$last_insert_id',
				price='$price',
				delivery_mode='$delivery_mode',
				free_with_this='$free_with_this',
				condition_status='$condition',
				advertiser='$advertiser',
				brand='$brand',
				model='$model'";
				$result1 = mysql_query($query1);

            }
           
        }


	
	
}
?>
