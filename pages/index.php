       	   <div class="content_area">
            <div class="expand_bor dnone">
				<div class="collaps">
                    <div class="expandall" onclick="collaps_all();">
                        <a href="#">Collaps All</a>
                    </div>
                </div>
            	<div class="just_expand  dnone" style="cursor:pointer;" id="just_post_want_add">
                	<h3>+ 	Post Your Want Ad</h3>
                </div>
				<div class="just_expand  dnone" style="cursor:pointer;" id="just_post_off_add_plus"  onclick="just_post_off_add_plus();">
                	<h3>+ 	Post Your Offer Ad</h3>
                </div>
				<div class="just_expand  dnone" style="cursor:pointer;" id="just_post_off_add_minus"  onclick="just_post_off_add_minus();">
                	<h3>- 	Post Your Offer Ad</h3>
                </div>
                
                	<div class="just_expand  dnone" id="just_post_off_content">
	            
                    <div class="form">
                	<form action="#"  onsubmit="return post_offer_ad();" name="post_offer_adForm" id="post_offer_ad" enctype="multipart/form-data" method="post">
                    	<div class="select_cat">
                                               <div class="scat">Select Category</div>
                        	<div class="want_category">

							
                            	<div class="want_cat" id="cat1" onclick="getCategory_2(1,this,2,this.id);">
                                	<p><a href="javascript:void(0);"><img src="images/search_icon.gif"><br />Electronic <br />Goods</a></p>

                                </div>

                            	<div class="want_cat" id="cat2" onclick="getCategory_2(2,this,2,this.id);">
                                	<p><a href="javascript:void(0);"><img src="images/search_icon.gif"><br />Home & Office  <br />Goods</a></p>

                                </div>	

                            	<div class="want_cat" id="cat3" onclick="getCategory_2(3,this,2,this.id);">
                                	<p><a href="javascript:void(0);"><img src="images/search_icon.gif"><br />Consumers <br />Goods</a></p>

                                </div>	

                            	<div class="want_cat" id="cat4" onclick="getCategory_2(4,this,2,this.id);">
                                	<p><a href="javascript:void(0);"><img src="images/search_icon.gif"><br />Vehicles <br /></a></p>

                                </div>	

                            	<div class="want_cat" id="cat5" onclick="getCategory_2(5,this,2,this.id);">
                                	<p><a href="javascript:void(0);"><img src="images/search_icon.gif"><br />Real Estate &  <br />Developers</a></p>

                                </div>	

                            	<div class="want_cat" id="cat6" onclick="getCategory_2(6,this,2,this.id);">
                                	<p><a href="javascript:void(0);"><img src="images/search_icon.gif"><br />Jobs <br /></a></p>

                                </div>	

                            	<div class="want_cat" id="cat7" onclick="getCategory_2(7,this,2,this.id);">
                                	<p><a href="javascript:void(0);"><img src="images/search_icon.gif"><br />Services <br /></a></p>

                                </div>	                                	
                            </div>
                        </div>
                        <div class="top_arrow" style="display:none;"> </div>
						
						
                        <div class="w_cat">
                        	<div class="w_cat_list" id="category_2">
                            </div>
							
							
                        	<div class="w_cat_list" id="category_3">
            
                            </div>
                        	<div class="w_cat_list">
                            	
                            </div>

                        </div>
						
						<div id="dynamic_form_fields">
						</div>
						
						

                        <div class="w_cat1">
                       	  <div class="label">
                            	<span>*</span>Your Ad Title :
                          </div>
                            <div class="box_area">
                           	  <input type="text" name="your_ad_title" id="your_ad_title" value="" class="textbox1" /> 
                           	</div>
                        </div>

                        
                        
                        
                        <div class="w_cat1">
                       	  <div class="label1">
                            Your Ad Description :
                          </div>
                        </div>
                        
                        <div class="w_cat1">
                       	  <div class="label1">
                            <textarea class="textarea" name="your_ad_desc" id="your_ad_desc" rows="50" cols="40"></textarea>
                          </div>   
                        </div>
                        
                        <div class="w_cat1">
                       	  <div class="label1">
                           Your SMS Ad Look Like :
                          </div>
                        </div>
                        
                        <div class="w_cat1">
                       	  <div class="label2">
                            <textarea class="textarea" name="your_sms_look" id="your_sms_look"rows="50" cols="40"></textarea>
                          </div>   
                        </div>
                        
                        
                        <div class="w_cat1">
                       	  <div class="label1">
                            Add your Ad related YouTube Link :
                          </div>
                        </div>
                        
                        <div class="w_cat1">
                       	  <div class="label1">
                       	    <input type="text" name="youtube_link" id="youtube_link" value="" class="textbox3" />
                       	  </div>   
                        </div>
                        
                        <div class="w_cat1">
                       	  <div class="label1">
                           Add Your Website Link or Product Related website Link :
                          </div>
                        </div>
                        
                        <div class="w_cat1">
                       	  <div class="label1">
                            <input type="text" name="website_link" id="website_link" value="" class="textbox3" />
                          </div>   
                        </div>
                        
                        <div class="w_cat1">
                       	  <div class="label1 ">
                                Ad your Eye Cahuing Product Photos here:
                          </div>
                        </div>
                        
                        <div class="w_cat1">
                       	  <div class="label1">
                            <div class="img_upl">
                            <p>Use Single Click Upload</p>
                            
                            	<div class="img_upload">
                                	<p><a href="#">Drop your image here</a></p>
                                </div>
                            	<div class="img_upload">
                                <p><a href="#">Drop your image here</a></p>
                                </div>
                            	<div class="img_upload">
                                <p><a href="#">Drop your image here</a></p>
                                </div>
                            	<div class="img_upload">
                                <p><a href="#">Drop your image here</a></p>
                                </div>

                            
                            </div>
                          </div>   
                        </div>
                       <div class="w_cat1">
                       	  <div class="label1">
                           Your Ad Will Expire at within 2 Weeks <span class="click"><b>To Change your Ad durution</b> <a href="#">Click here</a></span>
                          </div>
                          </div> 
                    <div class="w_cat1">
                       	  <div class="label">
                            	<span>*</span>Location  :
                          </div>
                            <div class="box_area">
									<select name="city">
                                    	<option value="0">-Select City-</option>
										<?php

										foreach($citylist as $key=>$cty)
										{
											echo "<option value='".$key."'>".$cty."</option>";
										}
										?>
                                    </select> 
									<select name="area">
                                    	<option value="0">-Select Area-</option>
										<?php

										foreach($arealist as $key=>$area)
										{
											echo "<option value='".$key."'>".$area."</option>";
										}
										?>
                                    </select>                           
                               </div>
                        </div>
                        
                        <div class="w_cat1">
                       	  <div class="label">
                            	<span>*</span>Contact By :
                          </div>
                            <div class="box_area">
                           	  <input type="radio" checked name="contact_by" value="Email" /> 
                           	  E-mail  &nbsp;&nbsp;&nbsp;
                           	   <input type="radio" name="contact_by" value="Used" /> 
                           	   Used                            </div>
                        </div>
                        
                    <div class="w_cat1">
                       	  <div class="label">
                            	<span>*</span>E-Mail Id:
                          </div>
                            <div class="box_area">
                           	  <input type="text" name="email" id="email" value="" class="textbox" /> 
                           	</div>
                        </div>

						
						<div class="w_cat1">
                       	  <div class="label">
                            	<span>*</span>Tags:
                          </div>
                            <div class="box_area">
                           	  <input type="text" name="tags" id="tags" class="textbox" /> 
                           	</div>
                        </div>

						<input type="hidden" name="category_level1" id="category_level1" value="">
                        <input type="hidden" name="category_level2" id="category_level2" value="">
                        <input type="hidden" name="category_level3" id="category_level3" value="">
						 <input type="hidden" name="category_level4" id="category_level4" value=""> 
                        <input type="hidden" name="form_type_id" id="form_type_id" value="">

                        <div class="w_cat1">
                       	  <div class="label1">
                       		<input type="submit"  name="button2" id="button2" value="POST MY AD" class="but" />
                          </div>
                        </div>
                        
                    </form>
                </div>
                </div>
            </div>
        </div>
