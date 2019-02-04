  
  <div id="gtco-features">
		<div class="container">
			<div class="row">
				<div class="col-md-12 gtco-heading">
					<div class="p-15">
					<h2>Real Estate</h2>
					<div class="row">
							<div class="col-sm-3">
								<div class="feat-c-box">
									<ul>
										<li><a href="real-estate-basic-information">Property Information</a></li>
										<li><a href="real-estate-tenancy-description" class="active-page">Tenancy Description</a></li>
										<li><a href="real-estate-tenancy-details">Tenancy Details</a></li>
										<li><a href="re-business-preview">Preview</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-9 r-bgc">
							 <form name="lb_uprof" action="realestate_userregister" method="post" data-toggle="validator" role="form" class="was-validated">
								<div class="form-c-box">
								<div class="areu">
									<div class="col-sm-12">
									<div class="col-sm-8">
										<div class="form-group">
										<label for="">Tenancy Details</label>
										<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $sellBusinessDescription[0]['form_id'];?>" />
										<textarea id="tenancy_details" name="tenancy_details" class="form-control" rows="3"  data-error="Tenancy Details required" required><?php echo $sellBusinessDescription[0]['tenancy_details'];?></textarea>
										<div class="help-block with-errors"></div>
									    </div>
									</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
										<label for="">Total Lease Period<span style="color: #ec0102;"> (If More than 1 Tenant, Please average the data)</span> </label>
										</div>
										</div>
										<div class="col-sm-12">
										<div class="col-sm-4">
										<div class="form-group">
										<input type="text" id="lease_period" name="lease_period" class="form-control" placeholder="" value="<?php echo $sellBusinessDescription[0]['lease_period'];?>"  data-error="Lease Period required" required>
										<div class="help-block with-errors"></div>
										</div>
										</div>
										<!--<span>If More than 1 Tenant, Please average the data</span>-->
									    </div>
									<!--</div>-->
									
									<div class="col-sm-12">
									<div class="col-sm-4">
										<div class="form-group">
										<label for="">Lease Started</label>
										<input type="date" id="lease_start" name="lease_start" class="form-control" placeholder="" value="<?php echo $sellBusinessDescription[0]['lease_start'];?>"  data-error="Lease Started required" required>
										<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
										<label for="">Lease Ending</label>
										<input type="date" id="lease_end" name="lease_end" class="form-control" placeholder="" value="<?php echo $sellBusinessDescription[0]['lease_end'];?>"  data-error="Lease End required" required>
										<div class="help-block with-errors"></div>
										</div>
									</div>
									</div>
									</div>
									<div class="areu">
										<div class="col-sm-12">
										  <div class="col-sm-3">
												<div class="form-group">
													<label for="">Lock in Period</label>
													<input type="text" id="lock_period" name="lock_period" class="form-control" placeholder="Years" value="<?php echo $sellBusinessDescription[0]['lock_period'];?>"  data-error="Lock in Period required" required>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
												<div class="form-group">
													<label for="">Security Received</label>
													<input type="text" id="security_received" name="security_received" class="form-control" placeholder="Rs." value="<?php echo $sellBusinessDescription[0]['security_received'];?>"  data-error="Security Received required" required>
													<div class="help-block with-errors"></div>
												</div>
												</div>
											</div>
											
											
											<div class="col-sm-3">
												<div class="form-group">
												<div class="form-group">
													<label for="">Monthly Rental </label>
													<input type="text" id="monthly_rental" name="monthly_rental" class="form-control" placeholder="Rs." value="<?php echo $sellBusinessDescription[0]['monthly_rental'];?>"  data-error="Monthly Rental required" required>
													<div class="help-block with-errors"></div>
												</div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
												<div class="form-group">
													<label for="">Annual Rent</label>
													<input type="text" id="annual_rental" name="annual_rental" class="form-control" placeholder="Rs." value="<?php echo $sellBusinessDescription[0]['annual_rental'];?>"  data-error="Annual Rental required" required>
													<div class="help-block with-errors"></div>
												</div>
												</div>
											</div>
											</div>
											<div class="col-sm-12">
											<div class="col-sm-3">
												<div class="form-group">
												<div class="form-group">
													<label for="">Annual Maintenance</label>
													<input type="text" id="annual_maintenance" name="annual_maintenance" class="form-control" placeholder="Rs." value="<?php echo $sellBusinessDescription[0]['annual_maintenance'];?>"  data-error="Annual Maintenance required" required>
													<div class="help-block with-errors"></div>
												</div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
												<div class="form-group">
													<label for="">Escalation After</label>
													<input type="date" id="escalation_after" name="escalation_after" class="form-control" placeholder="" value="<?php echo $sellBusinessDescription[0]['escalation_after'];?>"  data-error="Escalation After required" required>
													<div class="help-block with-errors"></div>
												</div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
												<div class="form-group">
													<label for="">Escalation %</label>
													<input type="text" id="escalation_percent" name="escalation_percent" class="form-control" placeholder="0%" value="<?php echo $sellBusinessDescription[0]['escalation_percent'];?>"  data-error="Escalation % required" required>
													
													<div class="help-block with-errors"></div>
												</div>
												</div>
											</div>
											</div>
										
									</div>
									<div class="col-sm-4"></div>
									<div class="col-sm-3">
										
									</div>
									<div class="col-sm-5" style="padding-right:0">
										 <input type="hidden" name="frm_submit" value="sb_bd" />
										<button type="submit" class="savebtn">Save &amp; Continue</button>
										<button type="submit" class="savebtn">Back</button>
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
  
  <!--end section-->
 