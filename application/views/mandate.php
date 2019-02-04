<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="managbyc_bdeals";

 
//Connect to the database
$connection = mysql_connect($hostname, $username, $password);
mysql_select_db($dbname, $connection);
//featured listing
 $fet_Listing="select * from bd_business_details t1
left join bd_country_list t2 on t1.location_country=t2.id
left join bd_country_state_mapping t3 on t1.location_state=t3.id
left join bd_state_city_mapping t4 on t1.location_city=t4.id
left join bd_sell_business_details t5 on t1.form_id=t5.form_id where key_headline!='' and form_type='Mandate'";
 $query_Listing=mysql_query($fet_Listing) or die(mysql_error());
 
?>
<section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h4 class="title text-white uppercase">Mandate Listing</h4>

            </div>
            <div class="overlay bg-opacity-5"></div>
            <!--<img src="images/header-img.jpg" alt="" class="img-responsive" /> </div>-->
    </section>
    <!-- end header inner -->
    <div class="clearfix"></div>

    <section class="sec-padding paddbott">
        <div class="container">
            <div class="row">

                <div class="col-sm-9">
				
				
				<div class="row">
				
				<div class="col-md-6 bmargin" >
				
				  <div class="carousel_holder">

			
          <div id="sync1" class="owl-carousel">
		  <?php	
		//echo "<pre>";	
		  //print_r($businessDocuments);
		  /*foreach( $businessDocuments as $countrydet ){*/?>
		  <?php //echo $businessDocuments[0]['path'];?>
				 
				 <!--<div class="item"><img src="<?php //echo $countrydet->customer_id;?>" alt=""></div>-->
            
		<?php	//}
		  ?>
			<!--<div class="item"><img src="http://localhost:8999/bdeals/uploads/gauravgmail.com/2018-02-26/1-Add-Ons_Required_1.png" alt=""></div>-->
			
        </div>
				
				</div>
				<?php while($fetch_Listing=mysql_fetch_assoc($query_Listing)){?>
				<div class="col-md-12">
				<a href="#">
            <h4 class="less-mar1"> <?php echo $fetch_Listing['key_headline']; ?></h4>
            </a>
			
				
				
				 <div class="col-md-12 padd0 listing-title">							
							<br>
						<p> <span><b>Asking Price:</b> Rs. <?php echo $fetch_Listing['ask_price']; ?> </span> </p>
						
						


						<p><span><b>Sales Revenue:</b> Rs. <?php echo $fetch_Listing['latest_revenu']; ?></span></p>
						<p><span><b>Country:</b> <?php echo $fetch_Listing['country_name']; ?></span></p>
						<p><span><b>State:</b> <?php echo $fetch_Listing['state_name']; ?></span></p>
						<p><span><b>City:</b> <?php echo $fetch_Listing['city_name']; ?></span></p>
						<p><span><b>Description:</b> <?php echo $fetch_Listing['description']; ?><br></span></p>
						<p>  <div class="pull-right "><span> <a class="view-text" href="<?php echo base_url().'/index.php/home/viewall'?>?id=<?php echo $fetch_Listing["form_id"];?>&list=Mandate">View more</a></span> </div></p>
						
						
                               
                                
                            </div>
							<br>
				
				</div>
				<?php }?>
				</div>
				
				
				
				
			
		  
		  
		
		
		  
		
		  
					

                </div>


            </div>
        </div>
    </section>


	<!-- Modal -->
<div class="modal fade" id="contactseller" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contact Seller</h4>
      </div>
      <div class="modal-body">
       <form name="lb_uprof" action="customer-listing-contact-form" method="post" data-toggle="validator" role="form" class="was-validated">
	   <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $businessData[0]['form_id'];?>" />
	   <input type="hidden" name="contact_to_customer_id" id="contact_to_customer_id" value="<?php echo $businessData[0]['customer_id'];?>" />
	   <input type="hidden" name="contact_from_customer_id" id="contact_from_customer_id" value="<?php echo $contactFromDetails[0]['customer_id'];?>" />

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Name <span>*</span></label>
                                <input type="text" name="name" id="name" class="form-control form-radius"  placeholder="name" value="<?php echo $contactFromDetails[0]['name'] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Email <span>*</span></label>
                                <input type="text" name="email" id="email" class="form-control form-radius"  placeholder="email" value="<?php echo $contactFromDetails[0]['customer_id'] ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Mobile No. <span>*</span></label>
                                <input type="text" name="mobile" id="mobile" class="form-control form-radius"  placeholder="mobile" value="<?php echo $contactFromDetails[0]['contact_number'] ?>">
                            </div>
                            <div class="form-group col-md-6">
							
                                <label for="Address">Country <span>*</span></label>
                                <select  name="country" id="country" class="form-control" >
									<option value="">Select Country</option>
									<?php	foreach( $this->cachemethods->getCountryDetails() as $countrydet ){
									?>
												<option value="<?php echo $countrydet->id;?>" <?php if($countrydet->id == $contactFromDetails[0]['country']){echo 'selected=selected';}?>><?php echo $countrydet->country_name; ?></option>
									<?php
											}
									?>
								</select>
    </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Message">Message<span>*</span></label>
                                <textarea type="text" name="message" id="message" placeholder="message" class="form-control form-radius"></textarea>
                            </div>
                        </div>
						<button class="btn-ser" type="Submit"> Contact </button>
                        <!--<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal_2">Contact Seller</button>-->
                    </form>
      </div>
      
    </div>
  </div>
</div>
