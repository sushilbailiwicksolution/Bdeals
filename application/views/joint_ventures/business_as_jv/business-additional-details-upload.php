<div id="gtco-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12 gtco-heading ">
          <div class="p-15">
          <h2>List Your Business</h2>
          <div class="row">
              <div class="col-sm-3">
                <div class="feat-c-box">
                  <ul>
                    <!--<li><a href="list-your-business-user-profile-jv">User Profile</a></li>-->
                    <li><a href="list-your-business-basic-information-jv">Basic Information</a></li>
                    <li><a href="list-your-business-description-jv">Business Description</a></li>
                    <li><a href="list-your-business-additional-details-jv">Additional Details</a></li>
		    <li><a href="list-your-business-jv-details-jv">JV-details</a></li>
                    <li><a href="list-your-business-additional-details-uploads-jv" class="active-page">Uploads</a></li>
                    <li><a href="list-your-business-package-details-jv">Package Details</a></li>
                    <li><a href="list-your-business-additional-services-jv">Additional Services</a></li>
                    <!--<li><a href="list-your-business-payment-jv">Payment</a></li>-->
                    <li><a href="list-your-business-preview-jv">Preview</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-9 r-bgc">
               <form action="jv_userregister" class="upload-image-form" enctype="multipart/form-data" method="post" accept-charset="iso-8859-1">
             <div class="form-c-box">
                  <div class="areu">
                  <p>Upload Photos</p>
                        <div class="col-sm-12">
                       <div class = "upload-image-messages"></div>
                        <div class="drag-area drag-area-2">
                          <div class="add-btn-box add-btn-box-2">
						  <div class="col-md-4">
						   Or drop image here
						  </div>
						  <div class="col-md-4">
                            <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $this->session->userdata('last_form_id');?>" />
                            <input type="file" multiple = "multiple" accept = "image/*" class="add-btn" name="uploadfile[]" value="+ Photo"/>
							</div>
							 <div class="col-sm-4">
                    <input type="hidden" name="frm_submit" value="sb_au" />
                    <input type="hidden" name="doc_name" value="image" />
                    <button type="submit" class="savebtn" style="float:right;">Submit</button>
                  </div>
							</div>
							<?php
							   foreach( $medias as $media ){
								   if( strcasecmp( $media['document_type'], 'image' ) == 0 ){
							?>
									   <div class="col-sm-2">
									     <div class="image-outer-cover">
										   <div class="top-up">
										     <i class="fa fa-eye" data-toggle="modal" data-target="#myModal_<?php echo $media['id'];?>"></i>
											<div class="record" id="record-<?php echo $media['id'];?>">
				<a href="?delete=<?php echo $media['id'];?>" class="delete"><i class="fa fa-trash"></i></a>
				
			</div>
										   </div>
										   <div class="modal fade" id="myModal_<?php echo $media['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <img style="width:100%;" src="<?php echo base_url().$media['path'];?>" >
      </div>
     
    </div>
  </div>
</div>
										   <img style="height: 50px;" src="<?php echo base_url().$media['path'];?>">
										 </div>
									   </div>
							<?php
								   }
							   }
							?>
                           
                          
                        </div>
						
                      </div>
					  
					  
				  </form>
                  </div>
				   <form action="jv_userregister" class="upload-image-form" enctype="multipart/form-data" method="post" accept-charset="iso-8859-1">
                  <div class="areu">
                  <p>Upload Videos</p>
                        <div class="col-sm-12">
                       <div class="drag-area drag-area-2">
                          <div class="add-btn-box add-btn-box-2">
						  <div class="col-md-4">
						 Or drop video here
						</div>
						  <div class="col-md-4">
                            <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $this->session->userdata('last_form_id');?>" />
                            <input type="file" multiple="multiple" accept="video/*,video/mp4" class="add-btn" name="uploadfile[]" value="+ Video"/>
                           </div>
							  <div class="col-sm-4">
                    <input type="hidden" name="frm_submit" value="sb_au" />
					 <input type="hidden" name="doc_name" value="video" />
                    <button type="submit" class="savebtn" style="float:right;">Submit</button>
                  </div>
                          </div>
						  
						  <?php
							   foreach( $medias as $media ){
								   if( strcasecmp( $media['document_type'], 'video' ) == 0 ){
							?>
									   <div class="col-sm-2">
									     <div class="image-outer-cover">
										   <div class="top-up" style="bottom: 58px;">
										     <i class="fa fa-eye" data-toggle="modal" data-target="#myModal_<?php echo $media['id'];?>"></i>
											
											 
											 <div class="record" id="record-<?php echo $media['id'];?>">
				<a href="?delete=<?php echo $media['id'];?>" class="delete"><i class="fa fa-trash"></i></a>
				
			</div>
										   </div>
										   <div class="modal fade" id="myModal_<?php echo $media['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
         <video width="100%"    class="videoc" controls>
  <source src="<?php echo base_url().$media['path'];?>" type="video/mp4"></video>
      </div>
     
    </div>
  </div>
</div>
										   <video class="videoc" style="    width: 73%;" controls>
  <source src="<?php echo base_url().$media['path'];?>" type="video/mp4"></video>
										 </div>
									   </div>
							<?php
								   }
							   }
							?>
						  
						  
                        </div>
                      </div>
					 
				    </form>
                  </div>
 <form action="jv_userregister" class="upload-image-form" enctype="multipart/form-data" method="post" accept-charset="iso-8859-1">
                  <div class="areu">
				   <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $this->session->userdata('last_form_id');?>" />
                  <p>Upload the significant documents to give greater thrust to your business pitch.</p>
                     <div class="outer newbg-background">
                      <div class="col-sm-5">
                        1. Business Teaser/Executive summary
                      </div>
                      <div class="col-sm-7">
                        <input type="file" multiple="multiple" class="add-btn" name="uploadexesumfile[]" size="1">
                      </div>
							<?php
							   foreach( $medias as $media ){
								   if( strcasecmp( $media['document_type'], 'executive' ) == 0 ){
							?>
									   <div class="col-sm-2">
									     <div class="mt-30">
										   <div class="selldoc doctype">
										   
											 <div class="record" id="record-<?php echo $media['id'];?>">
				<a href="?delete=<?php echo $media['id'];?>" class="delete" style="float: right;"><i class="fa fa-trash"></i></a>
				
			</div>
										   </div>
										   <a href="<?php echo base_url().$media['path'];?>" target="_blank"><img src="<?php echo asset_url();?>images/download.png" class="img-responsive"></a>
										 </div>
									   </div>
							<?php
								   }
							   }
							?>
					  
                     </div>
                     <div class="outer newbg-background">
                      <div class="col-sm-5">
                        2. Information Memorandum/Presentation
                      </div>
                      <div class="col-sm-7">
                        <input type="file" multiple="multiple" class="add-btn" name="uploadmemofile[]" size="1">
                      </div>
					  <?php
							   foreach( $medias as $media ){
								   if( strcasecmp( $media['document_type'], 'memorandum' ) == 0 ){
							?>
									   <div class="col-sm-2">
									    									     <div class="mt-30">
										   <div class="selldoc doctype">
										   
											 <div class="record" id="record-<?php echo $media['id'];?>">
				<a href="?delete=<?php echo $media['id'];?>" class="delete" style="float: right;"><i class="fa fa-trash"></i></a>
				
			</div>
										   </div>
										   <a href="<?php echo base_url().$media['path'];?>" target="_blank"><img src="<?php echo asset_url();?>images/download.png" class="img-responsive"></a>
										 </div>
									   </div>
							<?php
								   }
							   }
							?>
					  
                     </div>
                     <div class="outer newbg-background">
                      <div class="col-sm-5">
                        3. Financials
                      </div>
                      <div class="col-sm-7">
                        <input type="file" multiple="multiple" class="add-btn" name="uploadfinancialfile[]" size="1">
                      </div>
					  <?php
							   foreach( $medias as $media ){
								   if( strcasecmp( $media['document_type'], 'financials' ) == 0 ){
							?>
									   <div class="col-sm-2">
									    									     <div class="mt-30">
										   <div class="selldoc doctype">
										   
											 <div class="record" id="record-<?php echo $media['id'];?>">
				<a href="?delete=<?php echo $media['id'];?>" class="delete" style="float: right;"><i class="fa fa-trash"></i></a>
				
			</div>
										   </div>
										   <a href="<?php echo base_url().$media['path'];?>" target="_blank"><img src="<?php echo asset_url();?>images/download.png" class="img-responsive"></a>
										 </div>
									   </div>
							<?php
								   }
							   }
							?>
					  
                     </div>
                     <div class="outer newbg-background">
                      <div class="col-sm-5">
                        4. Additional Documents
                      </div>
                      <div class="col-sm-7">
                        <input type="file" multiple="multiple" class="add-btn" name="uploadadditionfile[]" size="1">
                      </div>
					  <?php
							   foreach( $medias as $media ){
								   if( strcasecmp( $media['document_type'], 'additional' ) == 0 ){
							?>
									   <div class="col-sm-2">
									    									     <div class="mt-30">
										   <div class="selldoc doctype">
										   
											 <div class="record" id="record-<?php echo $media['id'];?>">
				<a href="?delete=<?php echo $media['id'];?>" class="delete" style="float: right;"><i class="fa fa-trash"></i></a>
				
			</div>
										   </div>
										   <a href="<?php echo base_url().$media['path'];?>" target="_blank"><img src="<?php echo asset_url();?>images/download.png" class="img-responsive"></a>
										 </div>
									   </div>
							<?php
								   }
							   }
							?>
					  
                     </div>
                     <?php /*<div class="outer">
                      <button type="submit" class="addmore">+ Add More</button>
		     </div> */ ?>
						 <div class="col-sm-12">
                    <input type="hidden" name="frm_submit" value="sb_au" />
                    <button type="submit" class="savebtn" style="float:right;">Submit</button>
                  </div>
				    </form>
                  </div>


                  <div class="col-sm-4"></div>
                  <div class="col-sm-3"></div>
                  <div class="col-sm-12" style="padding-right:0">
                   
                   <form action="list-your-business-package-details-jv">
					<button type="submit" class="savebtn" style="float:right;">Continue</button>
					</form>
                  </div>
                </div>
               </form>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  
<script>
        jQuery(document).ready(function($) {

            var options = {
                beforeSend: function(){
                    // Replace this with your loading gif image
                    $(".upload-image-messages").html('<p><img src = "<?php echo asset_url() ?>images/loading.gif" class = "loader" /></p>');
                },
                complete: function(response){
                    // Output AJAX response to the div container
                    $(".upload-image-messages").html(response.responseText);
                    $('html, body').animate({scrollTop: $(".upload-image-messages").offset().top-100}, 150);

                }
            };
            // Submit the form
            $(".upload-image-form").ajaxForm(options);

            return false;

        });
        </script>

  <!--end section-->



