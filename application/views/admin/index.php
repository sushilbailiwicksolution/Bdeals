<?php

//print_r($queryCountVal);
?>

		<!---------------------------Main content---------------------->
		<div class="main-content">
			<h1 class="page-title">Dashboard </h1>
			
			<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="panel minimal panel-default">
					<div class="panel-heading clearfix"> 
						<div class="panel-title">Buyer</div> 
						
					</div> 
					<!-- panel body --> 
					<div class="panel-body"> 
						<div class="stack-order">
							<h1 class="no-margins"><?php echo $TotalBuyer;?></h1>
							<small>Total Buyers </small>
						</div>
                        <div class="bar-chart-icon"></div>
				     
                    </div> 
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="panel minimal panel-default">
					<div class="panel-heading clearfix"> 
						<div class="panel-title">Seller</div> 
						
					</div> 
					<!-- panel body --> 
					<div class="panel-body"> 
						<div class="stack-order">
							<h1 class="no-margins"><?php echo $TotalSeller;?></h1>
							<small>Total Sellers.</small>
						</div>
						<div class="bar-chart-icon-2"></div>
					</div> 
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="panel minimal panel-default">
					<div class="panel-heading clearfix"> 
						<div class="panel-title"> Joint Ventures </div> 
						
					</div> 
					<!-- panel body --> 
					<div class="panel-body"> 
						<div class="stack-order">
							<h1 class="no-margins"><?php echo $TotalJV;?></h1>
							<small>Total Joint Ventures.</small>
						</div>
						<div class="bar-chart-icon-3"></div>
					</div> 
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="panel minimal panel-default">
					<div class="panel-heading clearfix"> 
						<div class="panel-title">Query</div> 
						
					</div> 
					<!-- panel body --> 
					<div class="panel-body"> 
						<div class="stack-order">
							<h1 class="no-margins"><?php echo $queryCountVal;?></h1>
							<small>Total Queries.</small>
						</div>
						<div class="bar-chart-icon-4"></div>
					</div> 
				</div>
			</div>
            
            <div class="col-lg-4 col-md-6">
				<div class="panel minimal panel-default">
					<div class="panel-heading clearfix"> 
						<div class="panel-title">New User</div> 
						
					</div> 
					<!-- panel body --> 
					<div class="panel-body"> 
						<div class="stack-order">
							<h1 class="no-margins"><?php echo $UserCountVal;?></h1>
							<small>Total Users.</small>
						</div>
						<div class="bar-chart-icon-5"></div>
					</div> 
				</div>
			</div>
            
          
            <div class="col-lg-4 col-md-6">
				<div class="panel minimal panel-default">
					<div class="panel-heading clearfix"> 
						<div class="panel-title">Contact</div> 
						
					</div> 
					<!-- panel body --> 
					<div class="panel-body"> 
						<div class="stack-order">
							<h1 class="no-margins"><?php echo $ContactCount;?></h1>
							<small>Total Contact.</small>
						</div>
						<div class="bar-chart-icon-7"></div>
					</div> 
				</div>
			</div>
            
            
            
            
            
		</div>
