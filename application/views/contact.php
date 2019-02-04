<?php
 include ('header.php');
 ?>
 
 <!--end menu-->
    <div class="clearfix"></div>

    <section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h4 class="title text-white uppercase">Contact us</h4>

            </div>
            <div class="overlay bg-opacity-5"></div>
            <img src="<?php echo asset_url();?>/images/header-img2.jpg" alt="" class="img-responsive" /> </div>
    </section>
    <!-- end header inner -->
    <div class="clearfix"></div>

    <section class="sec-padding paddbott">
        <div class="container">
            <div class="row">
				
                <div class="col-sm-8">
                     <div class="messageval" style="display:none;color:#f00;font-size:20px;">Please Fill All Fields</div>
                    <!-- <div class="messageSuccess" style="display:none;color:#189701;font-size:20px;">Thanks for contacting us! We will get back to you soon.</div><br/>-->
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Name <span>*</span></label>
                                <input type="text" class="form-control form-radius" id="Name" placeholder="Name" autocomplete="off">
								 <span id="span-Name"><label id="Name-val"></label></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Email <span>*</span></label>
                                <input type="text" class="form-control form-radius" id="email" placeholder="Email" autocomplete="off">
								 <span id="span-email"><label id="email-val"></label></span>
								<span class="email-missing" style="color:#f00;display:none;">Please enter valid email id</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Mobile No. <span>*</span></label>
                                <input type="text" class="form-control form-radius" id="Mobile" placeholder="Mobile No" autocomplete="off">
								<span id="span-Mobile"><label id="Mobile-val"></label></span>
								<span class="mobile-missing" style="color:#f00;display:none;">Please enter 10 digit valid mobile number</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Address">Address <span>*</span></label>
                                <textarea placeholder="Address" rows="1" class="form-control form-radius" id="Address"></textarea>
								 <span id="span-Address"><label id="Address-val"></label></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">City <span>*</span></label>
                                <input type="text" class="form-control form-radius" id="City" placeholder="City" autocomplete="on">


								 <span id="span-Address"><label id="City-val"></label></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Purpose">Purpose of Enquiry <span>*</span></label>
                                <select type="text" class="form-control form-radius" id="Purpose">
                                    <option value="">-----Select--------</option>
                                    <option>Sell a business</option>
                                    <option>Buy a business</option>
                                    <option>JV</option>
                                    <option>Incubate a business</option>
                                    <option>Real estate</option>
                                    <option>invest in a business</option>
                                    <option>PE/VC</option>
                                    <option>Business Plan</option>
                                    <option>Business Valution</option>
                                    <option>Ask a question</option>
                                </select>
							<span id="span-Purpose"><label id="Purpose-val"></label></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Message">Message<span>*</span></label>
                                <textarea type="text" placeholder="Message" class="form-control form-radius" id="Message"></textarea>
								<span id="span-Message"><label id="Message-val"></label></span>	
                            </div>
                        </div>
						<input type="hidden" id="base_url" value="<?php echo base_url();?>"/>
                        <button type="button" class="btn btn-default contactForm1" data-toggle="modal" data-target="#myModal_2" style="display:none;">Submit</button>
						 <button type="button" class="btn btn-default contactForm2" onclick="return ContactUs();">Submit</button>
                   <p>&nbsp;</p>
                </div>
				
                <div class="col-sm-4">
                    <div class="Cdetails">

                        <h3><strong>Business Deals</strong> </h3>
                        <p>505, Manisha Building
                            <br> 75-76, Nehru Place
                            <br> New Delhi-110019, India</p>
                        <br>

                        <p><strong>Telephone:</strong> +91-11-41064900 , 41064800
                            <br>
                            <strong>Mobile No.:</strong> +919811568568
                            <br>
                            <strong>Email:</strong>enquiry@businessdeals.in
                            <br>
                            <br>
                        </p>

                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <?php
 include ('footer.php');
 ?>

        <!-- Modal -->
        <div class="modal fade" id="myModal_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content ">
                    <div class="modal-header back-blue border-none">
                        <h4 class="close-btn ">
       <img class="pull-right oneclose" data-dismiss="modal"  aria-label="Close" src="<?php echo asset_url();?>/img/close.png">
        </h4>
                    </div>
                    <div class="modal-body back-blue" style="padding-bottom: 10px;">
                        <div class="back-blue">
                            <div class="form-group col-md-12 wish-yes">
                                <div class="col-md-6 col-md-offset-1">
                                    <h4 class="white">Do you wish to seek an advice ?</h4></div>
                                <div class="col-md-5">
                                    <input type="button" id="wish" class="btn btn-default" value="Yes">
                                    <input type="button" id="wishno" class="btn btn-primary wishno" data-dismiss="modal" value="No">
                                </div>
                            </div>

                            <div class="next-box-2 " id="make-appointment" style="display:none;">
                                <div class="col-md-12  wish-yes mb0">
                                    <div class="col-md-6 padd0">
                                        <h5 class="white">Where would you want to seek an appointment?</h5></div>
                                    <div class="col-md-6 padd0">
                                        <input type="button" id="Business_deals" class="btn btn-default" value="Business Deals office">
                                        <input type="button" id="Outside_Office" class="btn btn-primary" value="Outside Office">
                                    </div>
                                </div>
                            </div>

                            <div class="next-box-3 " id="make-appointment-3" style="display:none;">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Time</label>
                                        <input type="time" class="form-control" id="time1">
					<span class="time1-missing" style="color:#f00;display:none;">Please select time</span>

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Date</label>
                                        <input type="date" class="form-control" id="date1">
				<span class="date1-missing" style="color:#f00;display:none;">Please select date</span>
                                    </div>

                                </div>
<div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Message</label>
                                        <input type="text" class="form-control" id="meeting_agenda1" placeholder="Please enter meeting agenda">
				<span class="meeting_agenda1" style="color:#f00;display:none;">Please enter the agenda of the meeting</span>
                                    </div>
									 <div class="form-group">
                                        <label for="exampleInputPassword1">Venue</label>
                                        <input type="text" class="form-control" id="meeting_venue" placeholder="Please enter meeting venue">
				<span class="meeting_venue" style="color:#f00;display:none;">Please enter the venue details</span>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-default onesubmit" value="onesubmit" id="onesubmit">Submit</button>
                                    </div>
                                </div>
								
                            </div>

                            <div class="next-box-3 " id="make-appointment-2" style="display:none;">
                                <div class="col-md-12  wish-yes mb0">
                                    <div class="col-md-8">
                                        <h5><i class="fa fa-location-arrow" aria-hidden="true"></i> Proposed Meeting Location </h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 style=" color: #02008c;">
				<i class="fa fa-link" aria-hidden="true"></i> <a data-toggle="modal" data-target="#Schedule-of-charges" href="#">Schedule of charges</a>
				</h5>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="">
                                            <label>
                                                <input type="radio" value="Delhi NCR" class="place2" name="mlocation" checked="checked"> Delhi NCR
                                            </label>
                                        </div>
                                        <div class="">
                                            <label>
                                                <input type="radio" value="300Kms from Delhi" class="place2" name="mlocation"> 300Kms from Delhi
                                            </label>
                                        </div>
                                        <div class="">
                                            <label>
                                                <input type="radio" value="Other Parts of India" class="place2" name="mlocation"> Other Parts of India
                                            </label>
                                        </div>
                                        <div class="">
                                            <label>
                                                <input type="radio" value="Outside India" class="place2" name="mlocation"> Outside India
                                            </label>
                                        </div>
									
                                    </div>
									
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Time</label>
                                            <input type="time" class="form-control" id="time">
								<span class="time-missing" style="color:#f00;display:none;">Please select time</span>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Date</label>
                                            <input type="date" class="form-control" id="date">
								<span class="date-missing" style="color:#f00;display:none;">Please select date</span>
                                        </div>

                                    </div>
<div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Message</label>
                                        <input type="text" class="form-control" id="meeting_agenda2" placeholder="Please enter meeting agenda">
				<span class="meeting_agenda2" style="color:#f00;display:none;">Please enter the agenda of the meeting</span>
                                    </div>
									 <div class="form-group">
                                        <label for="exampleInputPassword1">Venue</label>
                                        <input type="text" class="form-control" id="meeting_venue2" placeholder="Please enter meeting venue">
				<span class="meeting_venue2" style="color:#f00;display:none;">Please enter the venue details</span>
                                    </div>

                                </div>
                                    <div class="col-md-12">
                                        <h5> Would you want To</h5>
                                        <div class="">
                                            <label>
                                                <input type="radio" value="Tax invoice" class="tax" name="tax" checked="checked"> Tax invoice
                                            </label>
                                        </div>
                                        <div class="">
                                            <label>
                                                <input type="radio" value="Regular invoice" class="tax" name="tax"> Regular invoice
                                            </label>
                                        </div>
							
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="button" class="btn btn-default twosubmit" value="twosubmit">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div style="z-index:10000" class="modal fade" id="Schedule-of-charges" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header back-blue border-none">
                        <h4 class="close-btn ">
        <img class="pull-right twoclose" data-dismiss="modal"  aria-label="Close" src="<?php echo asset_url();?>/img/close.png">
        </h4>
                    </div>
                    <div class="modal-body mt-10">
                        <table class="table table-bordered ">

                            <tbody>
                                <tr>
                                    <td>BusinessDeals Office</td>
                                    <td>Free Of Charge</td>

                                </tr>
                                <tr>
                                    <td>Delhi NCR </td>
                                    <td>Rs5500/- + GST</td>

                                </tr>
                                <tr>
                                    <td>300Kms from Delhi</td>
                                    <td>Rs35000/- + cost of travel @ Rs20/Km + GST</td>
                                </tr>
                                <tr>
                                    <td>Other parts of India </td>
                                    <td>Rs35000/- per day + GST + cost of travel (boarding and lodging if required)</td>
                                </tr>
                                <tr>
                                    <td>Outside India</td>
                                    <td>$1500/- per day + GST + cost of travel (Visa, Airfare, boarding, Lodging & conveyance)</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
