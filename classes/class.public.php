<?php
class Pub
{
     function __contruct()
	 {
	 
	 }
	
	public function  getTemplates() {
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
            
            //$product_id = $formdata[''];
            //$product_type_id = $formdata[''];
            $form_type_id = $formdata['form_type_id'];
            $category_id = $formdata['category_id'];
            $product_id = $formdata['product_id'];
            $product_type_id = $formdata['product_type_id'];
            $price = $formdata['price'];
            $delivery_mode = $formdata['delivery_mode'];
            $free_with_this = $formdata['free_with_this']; 
            //$add_desc = $formdata['add_desc'];
            $sms_ad_look = $formdata['sms_ad_look']; 
            $you_tube_link = $formdata['youtube_link']; 
            $website_link = $formdata['website_link'];
            //$product_photos_id = $formdata['']; 
            $expire_duration = $formdata['expire_duration'];
            $location = $formdata['location'];
            $area = $formdata['area'];
            $contact_by = $formdata['contact_by'];
            $email_id = $formdata['email'];
            //$created_by = $formdata[''];
            //$created_on = $formdata[''];
            //$status = $formdata[''];
            $query = "insert into post_offer_ad set category_id='$category_id',product_id='$product_id',product_type_id='$product_type_id',form_type_id = '$form_type_id',price = '$price',delivery_mode='$delivery_mode',free_with_this='$free_with_this',sms_ad_look='$sms_ad_look',you_tube_link='$you_tube_link',website_link='$website_link',
expire_duration='$expire_duration',contact_by='$contact_by',email_id='$email_id',location='$location',area='$area'";
            $result  = mysql_query($query);
            $last_insert_id = mysql_insert_id();
            

/*
CREATE TABLE IF NOT EXISTS `offer_sub_form4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `common_form_id` bigint(20) NOT NULL,
  `condition` varchar(100) NOT NULL,
  `advertiser` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
*/
            $condition = $formdata['condition'];
            $brand = $formdata['brand'];
            $advertiser = $formdata['advertiser'];
            $model = $formdata['model'];

            $query1 = "insert into offer_sub_form4 set common_form_id='$last_insert_id',condition_status='$condition',advertiser='$advertiser',brand='$brand',model='$model'";
             $result1 = mysql_query($query1);
           
        }


	
	
}
?>
