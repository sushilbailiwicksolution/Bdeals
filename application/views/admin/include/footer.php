			<!-- Footer -->
			<footer class="footer-main"> 
			&copy; <?php echo date('Y');?> <strong>Business deal</strong>  
			</footer>	
			<!-- /footer -->
		
	  </div>
	  <!-- /main content -->
	  
  </div>
  <!-- /main container -->
  
</div>
<!-- /page container -->

<?php
  if( isset( $fjs_name) && !is_null( $fjs_name ) ):
   foreach( $fjs_name as $fjs ):
    echo script_tag( asset_url().$fjs.'.js' );
   endforeach;
  endif;
?>
<script>
function getPropId(id,selectObject){
	
	var value = selectObject.value;
	//alert(value);
	
	if (value == 'Technical')
	{
		$(".nature").show();
		$(".Pjvother").hide();
		
		document.querySelector('#purpose_jv_other').required = false;
	}
	else if (value == 'Others')
	{
		$(".Pjvother").show();
		$(".nature").hide();
		document.querySelector('#natureJv').required = false;
	}
	
	else
	{
	
		$(".nature").hide();
		$(".Pjvother").hide();
		
	}

}

    $(".cstatusRole").click(function() {
		
		var bstatus=$('#invester_role').val();
		var bstatus_other=$('#invester_role_other').val();
		var purposeJv=$('#purposeJv').val();
		
		//alert(bstatus);
		
		if(bstatus=='Others'){
			
			$(".bstatusmsg").show();
			
			if(bstatus_other==''){
			
			return false;
			}else{
			$(".bstatusmsg").hide();	
			return true;	
			}
			
		}
		if(purposeJv=='Others'){
			
			$(".purposeJVother").show();
			
			if(purpose_jv_other==''){
			
			return false;
			}else{
			$(".purposeJVother").hide();	
			return true;	
			}
			
		}
		else{
			
			$(".bstatusmsg").hide();
			$('#bstatus_other').val("");
			$('#purpose_jv_other').val("");
			
			return true;
		}
		
	});	
	
	  $("#investment_required_as").change(function() {
		  
		  var investment_required_as=$('#investment_required_as').val();
		 
		if(investment_required_as=='Others'){
			
		
			$("#investment_other").show();

		}else{
			
				$("#investment_other").hide();
		}	
		  
	  });
	  
	  $(window).load(function(){
		  
		  var investment_required_as='<?php echo $sellBusinessBasicInformation[0]['investment_required_as'];?>'
		  var investment_required_as='<?php echo $businessDetails[0]['investment_required_as'];?>'
		  var invester_role='<?php echo $businessDetails[0]['invester_role'];?>'
		  var invester_role='<?php echo $businessDetails[0]['role_new_investo'];?>'
		  
		  //alert(investment_required_as);
		 
		if(investment_required_as=='Others'){
			
		
			$("#investment_other").show();

		}
		if(invester_role=='Others'){
			
		
			$("#invester_role_other").show();

		}
		else{
			
				$("#investment_other").hide();
				$("#invester_role_other").hide();
		}	
		  
	  });
		
	//	var bstatus=$('#invester_role').val();
	
	    $(".dealbtn").click(function() {
		
		var bstatus=$('#invester_role').val();
		var bstatus_other=$('#invester_role_other').val();
		var investment_required_as=$('#investment_required_as').val();
		var investment_other=$('#investment_other').val();
		
		//alert(bstatus);
		
		if(bstatus=='Others'){
			
			$(".Ststatusmsg").show();
			
			if(bstatus_other==''){
			
			return false;
			}else{
			$(".Ststatusmsg").hide();	
			return true;	
			}
			
		}
		if(investment_required_as=='Others'){
			
			$(".invStstatusmsg").show();
			$("#investment_other").show();
			
			if(investment_other==''){
			
			return false;
			}else{
			$(".invStstatusmsg").hide();	
			return true;	
			}
			
		}
		else{
			
			$(".Ststatusmsg").hide();
			$('#investment_other').val("");
			$('#invester_role_other').val("");
			
			return true;
		}
		
	});	

	  $('#invester_role').on("change",function(){
	 
	 var invester_role=$("#invester_role").val();
	 
	
	 if(invester_role=="Others"){
		
		 
		 $('#invester_role_other').show();
		
	 }
	 
	 else{
		 
		 $('#invester_role_other').hide();
		  $('#invester_role_other').val("");
		 
	 }
	 
  }); 
    $(window).load(function(){
	 
	var invester_role='<?php echo $sellBusinessBasicInformation[0]['invester_role'];?>';
	var invester_role='<?php echo $businessDetails[0]['invester_role'];?>';
	var invester_role='<?php echo $sellJvDetails[0]['role_new_investo'];?>';
	var invester_role='<?php echo $businessDetails[0]['role_new_investo'];?>';
	
	//alert(invester_role);
	 
	 if(invester_role=='Others'){
		 
		// alert("hello");
		 
		 $('#invester_role_other').show(); 
	 }
	 else{
		 
		 $('#invester_role_other').hide();
		// $('#invester_role_other').val("");
		 
	 }
	 
  });


  
$(window).load(function(){
	
	//alert('Hello');
	
	
	 <?php if($businessDetails[0]['purpose_jv']!=''){?>
	 
	var value='<?php echo $businessDetails[0]['purpose_jv'];?>';
	
	 <?php }else{?>
	var value='<?php echo $sellJvDetails[0]['purpose_jv'];?>';
	
	
	 <?php }?>
	
	//alert(value);
	
	
	if (value == 'Technical')
	{
		$(".nature").show();
		
		$(".Pjvother").hide();
	
	
		
	}
	else if (value == 'Others')
	{
		$(".Pjvother").show();
		
		$(".nature").hide();
	document.querySelector('#purpose_jv_other').required = true;		
		
	}
	else
	{
	
		$(".nature").hide();
		$(".Pjvother").hide();
		
	}

});



 $(document).ready(function(){
   $('#bstatus').on("change",function(){
	 
	 var bstatus=$("#bstatus").val();
	 
	
	 if(bstatus=="Other"){
		
		 
		 $('#bstatus_other').show();
		
	 }
	 
	 else{
		 
		 $('#bstatus_other').hide();
		 
	 }
	 
  }); 
    $(window).load(function(){
	 
	var bstatus='<?php echo $sellBusinessBasicInformation[0]['current_status_of_business'];?>';
	var bstatus='<?php echo $businessDetails[0]['current_status_of_business'];?>';
	
	//alert(bstatus);
	 
	 if(bstatus=='Other'){
		 
		 $('#bstatus_other').show(); 
	 }
	 else{
		 
		 $('#bstatus_other').hide();
		 
	 }
	 
  });	

  $('#invester_role').on("change",function(){
	 
	 var invester_role=$("#invester_role").val();
	 
	
	 if(invester_role=="Others"){
		
		 
		 $('#invester_role_other').show();
		
	 }
	 
	 else{
		 
		 $('#invester_role_other').hide();
		 
	 }
	 
  }); 
    $(window).load(function(){
	 
	var invester_role='<?php echo $sellBusinessBasicInformation[0]['invester_role'];?>';
	var invester_role='<?php echo $businessDetails[0]['invester_role'];?>';
	var invester_role='<?php echo $businessDetails[0]['role_new_investo'];?>';
	
	//alert(invester_role);
	 
	 if(invester_role=='Others'){
		 
		 $('#invester_role_other').show(); 
	 }
	 else{
		 
		 $('#invester_role_other').hide();
		 
	 }
	 
  });
		$('#citysubmit').on("click",function(){	
	
	//alert("hello");
		var country = $("#country").val();
		
		//alert(country);
	
		var other_state = $("#other_state").val();
	
		var state = $("#state").val();
		
		//alert(country);
		var form_Id = $("#form_Id").val();
		var other_city = $("#other_city").val();
		var redirect = $("#redirect").val();
		
		
		
		
		$.ajax({
			
			url: '<?php echo site_url("admin/seller/UpdateSellerCityState");?>',
			type: "POST",
			data: {country: '' + country + '',other_state: '' + other_state + '', state: '' + state + '',form_Id: '' + form_Id + '',other_city: '' + other_city + '',redirect: '' + redirect + ''},
			
			success: function() {
				
				window.location.reload(true);
			}
		});
	});

   $('#seller-table').DataTable({
	  "Processing": true,
      "ServerSide": true,
     "ajax":{
       url: "<?php echo site_url("admin/seller/seller_page")?>",
       type: 'GET'
     },
   });
   $('#startup-table').DataTable({
	  "Processing": true,
      "ServerSide": true,
     "ajax":{
       url: "<?php echo site_url("admin/startup/startup_page")?>",
       type: 'GET'
     },
   });
   $('#realestate-table').DataTable({
	  "Processing": true,
      "ServerSide": true,
     "ajax":{
       url: "<?php echo site_url("admin/realestate/realestate_page")?>",
       type: 'GET'
     },
   });
   $('#seller-table1').DataTable({
	  "Processing": true,
      "ServerSide": true,
     "ajax":{
       url: "<?php echo site_url("admin/startup/seller_page")?>",
       type: 'GET'
     },
   });

	$('#jv-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/jv/seller_page")?>",
       type: 'GET'
     },
   });
   
   $('#buy-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/buy/buyer_page")?>",
       type: 'GET'
     },
   });
   $('#newusers-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/users/users_page")?>",
       type: 'GET',

     },
	 "createdRow": function( row, data, dataIndex){
                if( data[10] == 'Activity'){
                    $('td', row).css({'background-color': 'rgb(63, 112, 160)', 'color': 'white'});
                }else{
					
					 $('td', row).css('background-color', 'white');
				}
				
            }
   });
   
   $('#newqueries-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/users/queries_page")?>",
       type: 'GET'
     },
   });
    $('#contactqueries-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/users/contact_queries_page")?>",
       type: 'GET'
     },
   });
   

 

  
$("#sort_status").on('change', function() {	
	
	var sort_status = document.getElementById("sort_status").value;

$('#newqueries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/queries_page")?>",
data: { sort_status: '' + sort_status + '' }
},
 });

});
//get city
//Perform Ajax request.
            $.ajax({
                url: '<?php echo site_url("admin/users/getQueryCity")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);
					
                  var values = '<select id="sort_city2">';
var values = values + '<option value="0">- Select -</option>';
var values = values + '<option value="0">- asdsds -</option>';
var values = values + '</select>';

                    $('#sort_city').html(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#sort_city').html(errorMsg);
                  }
            });

//get Team name
//Perform Ajax request.
            $.ajax({
                url: '<?php echo site_url("admin/users/getQueryTeam")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);
					
                  var values = '<select id="sort_team2">';
var values = values + '<option value="0">- Select -</option>';
var values = values + '<option value="0">- asdsds -</option>';
var values = values + '</select>';

                    $('#sort_team').html(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#sort_team').html(errorMsg);
                  }
            });			

$("#sort_team").on('change', function() {	
	
	var sort_team = document.getElementById("sort_team").value;

$('#newqueries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/queries_page")?>",
data: { sort_team: '' + sort_team + '' }
},
 });

});			

$("#sort_city").on('change', function() {	
	
	var sort_city = document.getElementById("sort_city").value;

$('#newqueries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/queries_page")?>",
data: { sort_city: '' + sort_city + '' }
},
 });

});



$("#sort_city, #sort_status").on('change', function() {	
//alert("Hello");
	
	var sort_city = document.getElementById("sort_city").value;
	var sort_status = document.getElementById("sort_status").value;

$('#newqueries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/queries_page")?>",
data: { sort_city: '' + sort_city + '', sort_status: '' + sort_status + '' }
},
 });

});

$("#sort_city, #sort_status,#sort_team").on('change', function() {	

//alert("Hello");
	
	var sort_city = document.getElementById("sort_city").value;
	var sort_status = document.getElementById("sort_status").value;
	var sort_team = document.getElementById("sort_team").value;

$('#newqueries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/queries_page")?>",
data: { sort_city: '' + sort_city + '', sort_status: '' + sort_status + '' , sort_team: '' + sort_team + ''}
},
 });

});

$("#fromDate").on('change', function() {	
	
	var fromDate = document.getElementById("fromDate").value;

$('#newqueries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/queries_page")?>",
data: { fromDate: '' + fromDate + '' }
},
 });

});

$("#toDate").on('change', function() {	
	
	var toDate = document.getElementById("toDate").value;

$('#newqueries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/queries_page")?>",
data: { toDate: '' + toDate + '' }
},
 });

});

$("#fromDate, #toDate").on('change', function() {	
	
	var fromDate = document.getElementById("fromDate").value;
	var toDate = document.getElementById("toDate").value;

$('#newqueries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/queries_page")?>",
data: { fromDate: '' + fromDate + '', toDate: '' + toDate + '' }
},
 });

});
/*****************************************************seller page filters start here**************/
$("#SellfromDate, #SelltoDate").on('change', function() {	
	
	var fromDate = document.getElementById("SellfromDate").value;
	var toDate = document.getElementById("SelltoDate").value;

$('#seller-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/seller/seller_page")?>",
data: { fromDate: '' + fromDate + '', toDate: '' + toDate + '' }
},
 });

});

$("#Sellsort_status").on('change', function() {	
	
	var sort_status = document.getElementById("Sellsort_status").value;

$('#seller-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/seller/seller_page")?>",
data: { sort_status: '' + sort_status + '' }
},
 });

});

$("#Sellsort_status,#AllSellsort_city").on('change', function() {	
	
	var sort_status = document.getElementById("Sellsort_status").value;
	var sort_city = document.getElementById("AllSellsort_city").value;

$('#seller-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/seller/seller_page")?>",
data: { sort_status: '' + sort_status + '' ,sort_city: '' + sort_city + ''}
},
 });

});


$(function() {
    $('.Sellteamshow').hide(); 
    $('#Sellsort_status').change(function(){
        if($('#Sellsort_status').val() == '1') {
            $('.Sellteamshow').show(); 
        } else {
            $('.Sellteamshow').hide(); 
        } 
    });
});

$( ".sortbycity" ) .change(function () {    
//alert("hello");	
	
	var sort_city = document.getElementById("AllSellsort_city").value;

$('#seller-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/seller/seller_page")?>",
data: { sort_city: '' + sort_city + '' }
},
 });

});

$( "#categorysell" ) .change(function () {    
//alert("hello");	
	
	var category= document.getElementById("categorysell").value;

$('#seller-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/seller/seller_page")?>",
data: { category: '' + category + '' }
},
 });

});
$( "#pricetype" ) .change(function () {    
//alert("hello");	
	
	var pricetype= document.getElementById("pricetype").value;

$('#seller-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/seller/seller_page")?>",
data: { pricetype: '' + pricetype + '' }
},
 });

});

/*$.ajax({
                url: '<?php echo site_url("admin/users/getSellerCity")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);
					
                  var values = '<select id="sort_city2">';
var values = values + '<option value="0">- Select -</option>';
var values = values + '<option value="0">- asdsds -</option>';
var values = values + '</select>';

                    $('#Sellsort_city').html(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#Sellsort_city').html(errorMsg);
                  }
            });*/
/*****************************************************seller page filters end here**************/

/*****************************************************JV page filters start here**************/
$("#JVfromDate, #JVtoDate").on('change', function() {	
	
	var fromDate = document.getElementById("JVfromDate").value;
	var toDate = document.getElementById("JVtoDate").value;

$('#jv-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/jv/seller_page")?>",
data: { fromDate: '' + fromDate + '', toDate: '' + toDate + '' }
},
 });

});

$("#JVsort_status").on('change', function() {


//alert('Hello');	
	
	var sort_status = document.getElementById("JVsort_status").value;

$('#jv-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/jv/seller_page")?>",
data: { sort_status: '' + sort_status + '' }
},
 });

});

$("#JVsort_status,#JVSellsort_city").on('change', function() {	
	
	var sort_status = document.getElementById("JVsort_status").value;
	var sort_city = document.getElementById("JVSellsort_city").value;

$('#jv-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/jv/seller_page")?>",
data: { sort_status: '' + sort_status + '' ,sort_city: '' + sort_city + ''}
},
 });

});

$(function() {
    $('.JVteamshow').hide(); 
    $('#JVsort_status').change(function(){
        if($('#JVsort_status').val() == '1') {
            $('.JVteamshow').show(); 
        } else {
            $('.JVteamshow').hide(); 
        } 
    });
});

$( ".JVsortbycity" ) .change(function () {    
//alert("hello");	
	
	var sort_city = document.getElementById("JVSellsort_city").value;

$('#jv-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/jv/seller_page")?>",
data: { sort_city: '' + sort_city + '' }
},
 });

});

$( "#categoryJV" ) .change(function () {    
//alert("hello");	
	
	var category= document.getElementById("categoryJV").value;

$('#jv-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/jv/seller_page")?>",
data: { category: '' + category + '' }
},
 });

});
$( "#pricetypeJV" ).change(function () {    
//alert("hello");	
	
	var pricetype= document.getElementById("pricetypeJV").value;

$('#jv-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/jv/seller_page")?>",
data: { pricetype: '' + pricetype + '' }
},
 });

});

/*$.ajax({
                url: '<?php echo site_url("admin/users/getSellerCity")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);
					
                  var values = '<select id="sort_city2">';
var values = values + '<option value="0">- Select -</option>';
var values = values + '<option value="0">- asdsds -</option>';
var values = values + '</select>';

                    $('#Sellsort_city').html(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#Sellsort_city').html(errorMsg);
                  }
            });*/
/*****************************************************JV page filters end here**************/

/*****************************************************startup page filters start here**************/
$("#SPfromDate, #SPtoDate").on('change', function() {	
	
	var fromDate = document.getElementById("SPfromDate").value;
	var toDate = document.getElementById("SPtoDate").value;

$('#startup-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/startup/startup_page")?>",
data: { fromDate: '' + fromDate + '', toDate: '' + toDate + '' }
},
 });

});

$("#SPsort_status").on('change', function() {


//alert('Hello');	
	
	var sort_status = document.getElementById("SPsort_status").value;

$('#startup-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/startup/startup_page")?>",
data: { sort_status: '' + sort_status + '' }
},
 });

});

$("#SPsort_status,#SPSellsort_city").on('change', function() {	
	
	var sort_status = document.getElementById("JVsort_status").value;
	var sort_city = document.getElementById("SPSellsort_city").value;

$('#startup-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/startup/startup_page")?>",
data: { sort_status: '' + sort_status + '' ,sort_city: '' + sort_city + ''}
},
 });

});

$(function() {
    $('.SPteamshow').hide(); 
    $('#SPsort_status').change(function(){
        if($('#SPsort_status').val() == '1') {
            $('.SPteamshow').show(); 
        } else {
            $('.SPteamshow').hide(); 
        } 
    });
});

$( ".SPsortbycity" ) .change(function () {    
//alert("hello");	
	
	var sort_city = document.getElementById("SPSellsort_city").value;

$('#startup-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/startup/startup_page")?>",
data: { sort_city: '' + sort_city + '' }
},
 });

});

$( "#categorySP" ) .change(function () {    
//alert("hello");	
	
	var category= document.getElementById("categorySP").value;

$('#startup-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/startup/startup_page")?>",
data: { category: '' + category + '' }
},
 });

});
$( "#pricetypeSP" ).change(function () {    
//alert("hello");	
	
	var pricetype= document.getElementById("pricetypeSP").value;

$('#startup-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/startup/startup_page")?>",
data: { pricetype: '' + pricetype + '' }
},
 });

});

/*$.ajax({
                url: '<?php echo site_url("admin/users/getSellerCity")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);
					
                  var values = '<select id="sort_city2">';
var values = values + '<option value="0">- Select -</option>';
var values = values + '<option value="0">- asdsds -</option>';
var values = values + '</select>';

                    $('#Sellsort_city').html(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#Sellsort_city').html(errorMsg);
                  }
            });*/
/*****************************************************startup page filters end here**************/


/*****************************************************realestate page filters start here**************/
$("#REfromDate, #REtoDate").on('change', function() {	
	
	var fromDate = document.getElementById("REfromDate").value;
	var toDate = document.getElementById("REtoDate").value;

$('#realestate-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/realestate/realestate_page")?>",
data: { fromDate: '' + fromDate + '', toDate: '' + toDate + '' }
},
 });

});

$("#REsort_status").on('change', function() {


//alert('Hello');	
	
	var sort_status = document.getElementById("REsort_status").value;

$('#realestate-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/realestate/realestate_page")?>",
data: { sort_status: '' + sort_status + '' }
},
 });

});

$("#REsort_status,#RESellsort_city").on('change', function() {	
	
	var sort_status = document.getElementById("REsort_status").value;
	var sort_city = document.getElementById("RESellsort_city").value;

$('#realestate-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/realestate/realestate_page")?>",
data: { sort_status: '' + sort_status + '' ,sort_city: '' + sort_city + ''}
},
 });

});

$(function() {
    $('.REteamshow').hide(); 
    $('#REsort_status').change(function(){
        if($('#REsort_status').val() == '1') {
            $('.REteamshow').show(); 
        } else {
            $('.REteamshow').hide(); 
        } 
    });
});

$( ".REsortbycity" ) .change(function () {    
//alert("hello");	
	
	var sort_city = document.getElementById("RESellsort_city").value;

$('#realestate-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/realestate/realestate_page")?>",
data: { sort_city: '' + sort_city + '' }
},
 });

});

$( "#categoryRE" ) .change(function () {    
//alert("hello");	
	
	var category= document.getElementById("categoryRE").value;

$('#realestate-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/realestate/realestate_page")?>",
data: { category: '' + category + '' }
},
 });

});
$( "#pricetypeRE" ).change(function () {    
//alert("hello");	
	
	var pricetype= document.getElementById("pricetypeRE").value;

$('#realestate-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/realestate/realestate_page")?>",
data: { pricetype: '' + pricetype + '' }
},
 });

});

/*$.ajax({
                url: '<?php echo site_url("admin/users/getSellerCity")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);
					
                  var values = '<select id="sort_city2">';
var values = values + '<option value="0">- Select -</option>';
var values = values + '<option value="0">- asdsds -</option>';
var values = values + '</select>';

                    $('#Sellsort_city').html(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#Sellsort_city').html(errorMsg);
                  }
            });*/
/*****************************************************realestate page filters end here**************/
   $('#employee-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/employee/employee_page")?>",
       type: 'GET'
     },
   });
      $('#tags-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/propertytags/tag_page")?>",
       type: 'GET'
     },
   });
     $('#country-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/country/country_page")?>",
       type: 'GET'
     },
   });
     $('#advertisement-table').DataTable({
		 "Processing": true,
      "ServerSide": true,
     "ajax":{
       url: "<?php echo site_url("admin/advertisements/advertisements_Page")?>",
       type: 'GET'
     },
   });
    $('#region-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/country/region_page")?>",
       type: 'GET'
     },
   });
        $('#state-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/state/state_page")?>",
       type: 'GET'
     },
   });
     $('#sector-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/sector/sector_page")?>",
       type: 'GET'
     },
   });
     $('#subsector-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/sector/subsector_page")?>",
       type: 'GET'
     },
   });
    $('#testimonials-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/testimonials/testimonials_page")?>",
       type: 'GET'
     },
   });
   $('#currency-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/currency/currency_page")?>",
       type: 'GET'
     },
   });

   $('#allusers-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/users/allusers_page")?>",
       type: 'GET'
     },
   });

   $('#allqueries-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/users/allqueries_page")?>",
       type: 'GET'
     },
   });
      $('#BusinessSellUser-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/users/BusinessSell_page")?>",
       type: 'GET'
     },
   });
   $('#BusinessDetails-table').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/users/Assigned_user_explore")?>",
       type: 'GET'
     },
   });
	
	//get new query count 
	//Perform Ajax request.
            $.ajax({
                url: '<?php echo site_url("admin/users/getNewqueryCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);
					
                
                    $('#new_query').html(data);
                   
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#new_query').html(errorMsg);
                  }
            });
			
//*************get new user  start here***************************/
	//Perform Ajax request.
	//for all pending queries for approval
            $.ajax({
                url: '<?php echo site_url("admin/users/getNewuserCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                  //  $('#new_Cust').html(data);
                    $('#new_Cust2').html(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			$.ajax({
                url: '<?php echo site_url("admin/users/getNewuserCountAll")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('#new_Cust').html(data);
                   // $('#new_Cust2').html(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
	//for all assigned queries
            $.ajax({
                url: '<?php echo site_url("admin/users/getAssigneduserCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('#assigned_Cust').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			 $.ajax({
                url: '<?php echo site_url("admin/users/getAssigneduserCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.assigned_Cust').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			/************************** get approved count in seller page start here************************/
			$.ajax({
                url: '<?php echo site_url("admin/seller/getApprovedCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.sapproved_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			
			//pending
			
			$.ajax({
                url: '<?php echo site_url("admin/seller/getPendingCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.spending_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			
			//rejected
			
			$.ajax({
                url: '<?php echo site_url("admin/seller/getRejectedCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.srejected_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			
			//inactive
			
			$.ajax({
                url: '<?php echo site_url("admin/seller/getInactiveCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.sinactive_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			
			//closed
			
			$.ajax({
                url: '<?php echo site_url("admin/seller/getClosedCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.sclosed_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			//all
			
			$.ajax({
                url: '<?php echo site_url("admin/seller/getAllCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.sall_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			
			//seller approved
			$('.sapproved_count').click(function(){
		
		
	var sapproved_count=1;
	
	//alert(assigned_Cust);

               $('#seller-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/seller/seller_page")?>",
       type: 'GET',
	   data: {sapproved_count:sapproved_count},
     },
  
        });
   });
   
   //seller pending
			$('.spending_count').click(function(){
		
		
	var spending_count=0;
	
	//alert(assigned_Cust);

               $('#seller-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/seller/seller_page")?>",
       type: 'GET',
	   data: {spending_count:spending_count},
     },
  
        });
   });
   //seller rejected
			$('.srejected_count').click(function(){
		
		
	var srejected_count=2;
	
	//alert(assigned_Cust);

               $('#seller-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/seller/seller_page")?>",
       type: 'GET',
	   data: {srejected_count:srejected_count},
     },
  
        });
   });
   
   //seller inactive
			$('.sinactive_count').click(function(){
		
		
	var sinactive_count=3;
	
	//alert(assigned_Cust);

               $('#seller-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/seller/seller_page")?>",
       type: 'GET',
	   data: {sinactive_count:sinactive_count},
     },
  
        });
   });
   
   //seller closed
			$('.sclosed_count').click(function(){
		
		
	var sclosed_count=4;
	
	//alert(assigned_Cust);

               $('#seller-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/seller/seller_page")?>",
       type: 'GET',
	   data: {sclosed_count:sclosed_count},
     },
  
        });
   });
   
   //seller All
			$('.sall_count').click(function(){
		
		
	var sall_count= 5;
	
	//alert(assigned_Cust);

               $('#seller-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/seller/seller_page")?>",
       type: 'GET',
	   data: {sall_count:sall_count},
     },
  
        });
   });
   
   //jv approved count
   
   $.ajax({
                url: '<?php echo site_url("admin/jv/getApprovedCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);
					
                
                    $('.jvapproved_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			
			 //jv pending count
   
   $.ajax({
                url: '<?php echo site_url("admin/jv/getPendingCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.jvpending_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			 //jv rejected count
   
   $.ajax({
                url: '<?php echo site_url("admin/jv/getRejectedCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.jvrejected_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			 //jv inactive count
   
   $.ajax({
                url: '<?php echo site_url("admin/jv/getInactiveCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.jvinactive_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });
			
			//jv closed count
   
   $.ajax({
                url: '<?php echo site_url("admin/jv/getClosedCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.jvclosed_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });
//jv all count
   
   $.ajax({
                url: '<?php echo site_url("admin/jv/getAllCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.jvall_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });

//jv All list
			$('.jvall_count').click(function(){
		
		
	var jvall_count= 5;
	
	//alert(assigned_Cust);

               $('#jv-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/jv/seller_page")?>",
       type: 'GET',
	   data: {jvall_count:jvall_count},
     },
  
        });
   });	
//jv approved
			$('.jvapproved_count').click(function(){
		
		
	var jvapproved_count= 1;
	
	//alert(assigned_Cust);

               $('#jv-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/jv/seller_page")?>",
       type: 'GET',
	   data: {jvapproved_count:jvapproved_count},
     },
  
        });
   });	

//jv pending
			$('.jvpending_count').click(function(){
		
		
	var jvpending_count= 0;
	
	//alert(assigned_Cust);

               $('#jv-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/jv/seller_page")?>",
       type: 'GET',
	   data: {jvpending_count:jvpending_count},
     },
  
        });
   });	
//jv rejected
			$('.jvrejected_count').click(function(){
		
		
	var jvrejected_count= 2;
	
	//alert(assigned_Cust);

               $('#jv-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/jv/seller_page")?>",
       type: 'GET',
	   data: {jvrejected_count:jvrejected_count},
     },
  
        });
   });
//jv inactive
			$('.jvinactive_count').click(function(){
		
		
	var jvinactive_count= 3;
	
	//alert(assigned_Cust);

               $('#jv-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/jv/seller_page")?>",
       type: 'GET',
	   data: {jvinactive_count:jvinactive_count},
     },
  
        });
   });   
   //jv closed
			$('.jvclosed_count').click(function(){
		
		
	var jvclosed_count= 4;
	
	//alert(assigned_Cust);

               $('#jv-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/jv/seller_page")?>",
       type: 'GET',
	   data: {jvclosed_count:jvclosed_count},
     },
  
        });
   });   
   
   
   ///////start up
   
   //start up approved count
   
   $.ajax({
                url: '<?php echo site_url("admin/startup/getApprovedCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);
					
                
                    $('.stapproved_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			
			 //start up pending count
   
   $.ajax({
                url: '<?php echo site_url("admin/startup/getPendingCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.stpending_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			 //jv rejected count
   
   $.ajax({
                url: '<?php echo site_url("admin/startup/getRejectedCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.strejected_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			 //start up inactive count
   
   $.ajax({
                url: '<?php echo site_url("admin/startup/getInactiveCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.stinactive_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });
			
			//start up closed count
   
   $.ajax({
                url: '<?php echo site_url("admin/startup/getClosedCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.stclosed_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });
//start up all count
   
   $.ajax({
                url: '<?php echo site_url("admin/startup/getAllCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.stall_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });

//start up All list
			$('.stall_count').click(function(){
		
		
	var stall_count= 5;
	
	//alert(assigned_Cust);

               $('#startup-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/startup/startup_page")?>",
       type: 'GET',
	   data: {stall_count:stall_count},
     },
  
        });
   });	
//start up approved
			$('.stapproved_count').click(function(){
		
		
	var stapproved_count= 1;
	
	//alert(assigned_Cust);

               $('#startup-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/startup/startup_page")?>",
       type: 'GET',
	   data: {stapproved_count:stapproved_count},
     },
  
        });
   });	

//start up pending
			$('.stpending_count').click(function(){
		
		
	var stpending_count= 0;
	
	//alert(assigned_Cust);

               $('#startup-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/startup/startup_page")?>",
       type: 'GET',
	   data: {stpending_count:stpending_count},
     },
  
        });
   });	
//start up rejected
			$('.strejected_count').click(function(){
		
		
	var strejected_count= 2;
	
	//alert(assigned_Cust);

               $('#startup-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/startup/startup_page")?>",
       type: 'GET',
	   data: {strejected_count:strejected_count},
     },
  
        });
   });
//start up inactive
			$('.stinactive_count').click(function(){
		
		
	var stinactive_count= 3;
	
	//alert(assigned_Cust);

               $('#startup-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/startup/startup_page")?>",
       type: 'GET',
	   data: {stinactive_count:stinactive_count},
     },
  
        });
   });   
   //start up closed
			$('.stclosed_count').click(function(){
		
		
	var stclosed_count= 4;
	
	//alert(assigned_Cust);

               $('#startup-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/startup/startup_page")?>",
       type: 'GET',
	   data: {stclosed_count:stclosed_count},
     },
  
        });
   });   
   
    ///////real estate
   
   //real estate approved count
   
   $.ajax({
                url: '<?php echo site_url("admin/realestate/getApprovedCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);
					
                
                    $('.reapproved_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			
			 //real estate pending count
   
   $.ajax({
                url: '<?php echo site_url("admin/realestate/getPendingCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.repending_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			 //real estate rejected count
   
   $.ajax({
                url: '<?php echo site_url("admin/realestate/getRejectedCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.rerejected_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			 //real estate inactive count
   
   $.ajax({
                url: '<?php echo site_url("admin/realestate/getInactiveCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.reinactive_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });
			
			//real estate closed count
   
   $.ajax({
                url: '<?php echo site_url("admin/realestate/getClosedCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.reclosed_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });
//real estate all count
   
   $.ajax({
                url: '<?php echo site_url("admin/realestate/getAllCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('.reall_count').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });

//real estate All list
			$('.reall_count').click(function(){
		
		
	var reall_count= 5;
	
	//alert(assigned_Cust);

               $('#realestate-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/realestate/realestate_page")?>",
       type: 'GET',
	   data: {reall_count:reall_count},
     },
  
        });
   });	
//real estate approved
			$('.reapproved_count').click(function(){
		
		
	var reapproved_count= 1;
	
	//alert(assigned_Cust);

               $('#realestate-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/realestate/realestate_page")?>",
       type: 'GET',
	   data: {reapproved_count:reapproved_count},
     },
  
        });
   });	

//real estate pending
			$('.repending_count').click(function(){
		
		
	var repending_count= 0;
	
	//alert(assigned_Cust);

               $('#realestate-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/realestate/realestate_page")?>",
       type: 'GET',
	   data: {repending_count:repending_count},
     },
  
        });
   });	
//real estate rejected
			$('.rerejected_count').click(function(){
		
		
	var rerejected_count= 2;
	
	//alert(assigned_Cust);

               $('#realestate-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/realestate/realestate_page")?>",
       type: 'GET',
	   data: {rerejected_count:rerejected_count},
     },
  
        });
   });
//real estate inactive
			$('.reinactive_count').click(function(){
		
		
	var reinactive_count= 3;
	
	//alert(assigned_Cust);

               $('#realestate-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/realestate/realestate_page")?>",
       type: 'GET',
	   data: {reinactive_count:reinactive_count},
     },
  
        });
   });   
   //real estate closed
			$('.reclosed_count').click(function(){
		
		
	var reclosed_count= 4;
	
	//alert(assigned_Cust);

               $('#realestate-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/realestate/realestate_page")?>",
       type: 'GET',
	   data: {reclosed_count:reclosed_count},
     },
  
        });
   });   
			
		/************************** get approved count in seller page end here************************/

			
	$('.assigned_Cust').click(function(){
		
		
	var assigned_Cust=1;
	
	//alert(assigned_Cust);

               $('#newusers-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/users/users_page")?>",
       type: 'GET',
	   data: {assigned_Cust:assigned_Cust},
     },
  
        });
   });
   $('.new_Cust2').click(function(){
		
		
	
	var new_Cust2=0;
	
	
	//alert(new_Cust2);

               $('#newusers-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/users/users_page")?>",
       type: 'GET',
	   data: {new_Cust2:new_Cust2},
     },
  
        });
   });
   $('.rejected_Cust').click(function(){
		
		
	
	var rejected_Cust=2;
	
	//alert(rejected_Cust);

               $('#newusers-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/users/users_page")?>",
       type: 'GET',
	   data: {rejected_Cust:rejected_Cust},
     },
  
        });
   });
			
			
//for all rejected queries
            $.ajax({
                url: '<?php echo site_url("admin/users/getRejecteduserCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('#rejected_Cust').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });				

$("#UserfromDate").on('change', function() {	
	
	var fromDate = document.getElementById("UserfromDate").value;

$('#newusers-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/users_page")?>",
data: { fromDate: '' + fromDate + '' }
},
 });

});

$("#UsertoDate").on('change', function() {	
	
	var toDate = document.getElementById("UsertoDate").value;

$('#newusers-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/users_page")?>",
data: { UsertoDate: '' + UsertoDate + '' }
},
 });

});

$("#UserfromDate, #UsertoDate").on('change', function() {	
	
	var fromDate = document.getElementById("UserfromDate").value;
	var toDate = document.getElementById("UsertoDate").value;

$('#newusers-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/users_page")?>",
data: { fromDate: '' + fromDate + '', toDate: '' + toDate + '' }
},
 });

});
			
$("#Usersort_status").on('change', function() {	
	
	var sort_status = document.getElementById("Usersort_status").value;

$('#newusers-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/users_page")?>",
data: { sort_status: '' + sort_status + '' }
},
 });

});			

$("#Usersort_team").on('change', function() {	
	
	var sort_team = document.getElementById("Usersort_team").value;

$('#newusers-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/users_page")?>",
data: { sort_team: '' + sort_team + '' }
},
 });

});	
$(function() {
    $('.Userteamshow').hide(); 
    $('#Usersort_status').change(function(){
        if($('#Usersort_status').val() == '1') {
            $('.Userteamshow').show(); 
        } else {
            $('.Userteamshow').hide(); 
        } 
    });
});
//get Team name
//Perform Ajax request.
            $.ajax({
                url: '<?php echo site_url("admin/users/getQueryTeam")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);
					
                  var values = '<select id="sort_team3">';
var values = values + '<option value="0">- Select -</option>';
var values = values + '<option value="0">- asdsds -</option>';
var values = values + '</select>';

                    $('#Usersort_team').html(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#Usersort_team').html(errorMsg);
                  }
            });					
//*************get new user  end here*****************************/
			
		
			
//hide show team drop down

//assignedTeam			


$(function() {
    $('.teamshow').hide(); 
    $('#sort_status').change(function(){
        if($('#sort_status').val() == '1') {
            $('.teamshow').show(); 
        } else {
            $('.teamshow').hide(); 
        } 
    });
});
/*********************************** 31-july-2018 start here******************/
$( window ).load(function() {
	
	var userid = document.getElementById("userid").value;
	
	
	//alert(userid);

$('#singlequeries-table').DataTable({
	
	 //destroy: true,
 

"ajax":{
type: "GET",
url: "<?php echo site_url("admin/users/singleuserquery")?>",
data: { userid: '' + userid + '' }
},
 });

});	

$( window ).load(function() {
	
	var Businessid = document.getElementById("Businessid").value;
	
	
	//alert(Businessid);

$('#BusinessSellUser-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "GET",
url: "<?php echo site_url("admin/users/BusinessSell_page")?>",
data: { Businessid: '' + Businessid + '' }
},
 });

});	

$(function() {
    $('.teamshow1').hide(); 
    $('#sort_status1').change(function(){
        if($('#sort_status1').val() == '1') {
            $('.teamshow1').show(); 
        } else {
            $('.teamshow1').hide(); 
        } 
    });
});
 $.ajax({
   url: '<?php echo site_url("admin/users/getQueryTeam")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);
					
                  var values = '<select id="sort_team2">';
var values = values + '<option value="0">- Select -</option>';
var values = values + '<option value="0">- asdsds -</option>';
var values = values + '</select>';

                    $('#sort_team1').html(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#sort_team').html(errorMsg);
                  }
            });			
   pageUrl  = window.location.href;
   $('.has-sub').each(function(){
    $(this).removeClass("active");
    if( pageUrl.indexOf($(this).data('id')) != -1 ){
     $(this).addClass("active");
    }
   });
 });
 
 $(".sort_city").on('change', function() {	
	
	var sort_city = $(".sort_city").val();
	var userid = $("#userid").val();
	
	//alert(userid);

$('#singlequeries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "get",
url: "<?php echo site_url("admin/users/singleuserquery")?>",
data: { sort_city: '' + sort_city + '',userid: '' + userid + '' }
},
 });

});

 $(".sort_team").on('change', function() {	
	
	var sort_team = $(".sort_team").val();
	var userid = $("#userid").val();
	
	//alert(userid);

$('#singlequeries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "get",
url: "<?php echo site_url("admin/users/singleuserquery")?>",
data: { sort_team: '' + sort_team + '',userid: '' + userid + '' }
},
 });

});
 $(".sort_team,.sort_city").on('change', function() {	
	
	var sort_team = $(".sort_team").val();
	var sort_city = $(".sort_city").val();
	var userid = $("#userid").val();
	
	//alert(userid);

$('#singlequeries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "get",
url: "<?php echo site_url("admin/users/singleuserquery")?>",
data: { sort_team: '' + sort_team + '',userid: '' + userid + '',sort_city: '' + sort_city + '' }
},
 });

});
$(".fromDate,.toDate").on('change', function() {	
	
	var fromDate = $(".fromDate").val();
	var toDate = $(".toDate").val();
	var userid = $("#userid").val();
	
	//alert(userid);

$('#singlequeries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "get",
url: "<?php echo site_url("admin/users/singleuserquery")?>",
data: { fromDate: '' + fromDate + '',userid: '' + userid + '',toDate: '' + toDate + '' }
},
 });

});

$('.editdetails').click(function(){
	//alert("hello");
	$("#name").prop('disabled', false);
	//$("#email").prop('disabled', false);
	$("#city").prop('disabled', false);
	$("#contact_number").prop('disabled', false);
	$("#message").prop('disabled', false);
	$(".updateshow").show();
       
});
$('.editbutton').click(function(){
	//alert("hello");
	$("#lb_uname").prop('disabled', false);
	$("#lb_email").prop('disabled', false);
	$("#country_code").prop('disabled', false);
	$("#lb_mobile").prop('disabled', false);
	$("#lb_address").prop('disabled', false);
	$("#lb_location").prop('disabled', false);
	$("#lb_company").prop('disabled', false);
	$("#lb_designation").prop('disabled', false);
	$("#lb_web").prop('disabled', false);
	$("#passwd").prop('disabled', false);
	$("#cpasswd").prop('disabled', false);
	$("#checkbox1").prop('disabled', false);
	$("#checkbox2").prop('disabled', false);
	$("#checkbox3").prop('disabled', false);
	$("#lb_aemail").prop('disabled', false);
	$("#lb_aphone").prop('disabled', false);
	$(".cus-radio").prop('disabled', false);
	
       
});		
/*********************************** 31-july-2018 end here******************/
 
/********************************6-aug-2018 start here************************/
	//for all assigned queries
            $.ajax({
                url: '<?php echo site_url("admin/users/getAssignedqueryCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('#Qassigned_Cust').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
//for all Total queries
            $.ajax({
                url: '<?php echo site_url("admin/users/getTotalqueryCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('#Qtotal').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
	//for all pending queries
            $.ajax({
                url: '<?php echo site_url("admin/users/getPendingqueryCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('#Qnew_Cust2').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			
	//for all rejected queries
            $.ajax({
                url: '<?php echo site_url("admin/users/getRejectedqueryCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('#Qrejected_Cust').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });			
/********************************6-aug-2018 end here************************/

/**************************8-aug-2018 start here****************************/

$("#ContactfromDate").on('change', function() {	
	
	var fromDate = document.getElementById("ContactfromDate").value;
	
	//alert(fromDate);

$('#contactqueries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/contact_queries_page")?>",
data: { fromDate: '' + fromDate + '' }
},
 });

});
$("#ContacttoDate").on('change', function() {	
	
	var toDate = document.getElementById("ContacttoDate").value;

$('#contactqueries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/contact_queries_page")?>",
data: { toDate: '' + toDate + '' }
},
 });

});

$("#ContactfromDate,#ContacttoDate").on('change', function() {	
	
	var toDate = document.getElementById("ContacttoDate").value;
	var fromDate = document.getElementById("ContactfromDate").value;

$('#contactqueries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/contact_queries_page")?>",
data: { toDate: '' + toDate + '', fromDate: '' + fromDate + ''}
},
 });

});


$("#Contactsort_status").on('change', function() {	
	
	var sort_status = document.getElementById("Contactsort_status").value;

$('#contactqueries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/contact_queries_page")?>",
data: { sort_status: '' + sort_status + '' }
},
 });

});
$("#contactsort_team").on('change', function() {	
	
	var sort_status = document.getElementById("contactsort_team").value;

$('#contactqueries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/contact_queries_page")?>",
data: { sort_team: '' + sort_team + '' }
},
 });

});
$("#Contactsort_city").on('change', function() {	
	
	var sort_city = document.getElementById("Contactsort_city").value;

$('#contactqueries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/contact_queries_page")?>",
data: { sort_city: '' + sort_city + '' }
},
 });

});

$(function() {
    $('.teamshow').hide(); 
    $('#Contactsort_status').change(function(){
        if($('#Contactsort_status').val() == '1') {
            $('.teamshow').show(); 
        } else {
            $('.teamshow').hide(); 
        } 
    });
});

 $.ajax({
                url: '<?php echo site_url("admin/users/getQueryTeam")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);
					
                  var values = '<select id="sort_team4">';
var values = values + '<option value="0">- Select -</option>';
var values = values + '<option value="0">- asdsds -</option>';
var values = values + '</select>';

                    $('#contactsort_team').html(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#contactsort_team').html(errorMsg);
                  }
            });	


 $.ajax({
                url: '<?php echo site_url("admin/users/getContactCity")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);
					
                  var values = '<select id="sort_city2">';
var values = values + '<option value="0">- Select -</option>';
var values = values + '<option value="0">- asdsds -</option>';
var values = values + '</select>';

                    $('#Contactsort_city').html(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#Contactsort_city').html(errorMsg);
                  }
            });	

$("#Contactsort_city,#Contactsort_status,#contactsort_team").on('change', function() {	
	
	var sort_city = document.getElementById("Contactsort_city").value;
	var sort_status = document.getElementById("Contactsort_status").value;
	var sort_team = document.getElementById("contactsort_team").value;

$('#contactqueries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "POST",
url: "<?php echo site_url("admin/users/contact_queries_page")?>",
data: { sort_city: '' + sort_city + '',sort_team: '' + sort_team + '',sort_status: '' + sort_status + '' }
},
 });

});			
/**************************8-aug-2018 end here****************************/

/**************************9-aug-2018 start here****************************/
$('.editContactdetails').click(function(){
	//alert("hello");
	$("#name").prop('disabled', false);
	$("#city").prop('disabled', false);
	$("#contact_number").prop('disabled', false);
	$("#message").prop('disabled', false);
	$("#query_purpose").prop('disabled', false);
	$("#mtype").prop('disabled', false);
	$("#mtime").prop('disabled', false);
	$("#mdate").prop('disabled', false);
	$("#mplace").prop('disabled', false);
	$("#mtax_type").prop('disabled', false);
	$("#meeting_agenda").prop('disabled', false);
	$(".updateshow").show();
       
});	

//for all assigned queries
            $.ajax({
                url: '<?php echo site_url("admin/users/getAssignedContactCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('#Cassigned_Cust').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
//for all total queries
            $.ajax({
                url: '<?php echo site_url("admin/users/getTotalContactCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('#Ctotal').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			//for all pending queries or new show in menu count
            $.ajax({
                url: '<?php echo site_url("admin/users/getPendingContactCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);
					
                
                    $('#Cnew_menu').html(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#Cnew_menu').html(errorMsg);
                  }
            });
	//for all pending queries
            $.ajax({
                url: '<?php echo site_url("admin/users/getPendingContactCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('#Cnew_Cust2').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	
			
	//for all rejected queries
            $.ajax({
                url: '<?php echo site_url("admin/users/getRejectedContactCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('#Crejected_Cust').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });				
/**************************9-aug-2018 end here******************************/

/**************************13-aug-2018 start here***************************/

$('.editSeller').click(function(){
	
	$(".form-control").prop('disabled', false);
	$(".cus-t").prop('disabled', false);
	$(".preview-add-button").prop('disabled', false);
	$(".finance-add-button").prop('disabled', false);
	$(".add-btn").prop('disabled', false);
	$(".upload-btn").prop('disabled', false);
	$(".radio1").prop('disabled', false);
	$(".add-btn-box").prop('disabled', false);
	$(".Profile").prop('disabled', false);
	$(".addiser").prop('disabled', false);
	
	
	$(".updateshow").show();
       
});

/**************************13-aug-2018 end here*****************************/

/*************************14-aug-2018 start here******************************/

$(document).ready(function() {
	$('a.delete').click(function(e) {
		e.preventDefault();
		var parent = $(this).parent();
		
		
		
		$.ajax({
			type: 'get',
			url: '<?php echo site_url("admin/seller/deleteImgid")?>',
			data: 'ajax=1&delete=' + parent.attr('id').replace('record-',''),
			beforeSend: function() {
				//parent.animate({'backgroundColor':'#fb6c6c'},300);
				
			},
			success: function() {
				
				window.location.reload(true);
			}
		});
	});
});

/*************************14-aug-2018 end here******************************/


/*************************16-aug-2018 start here******************************/

$('.rejected_CustQ').click(function(){
		
		
	
	var rejected_CustQ=2;
	
	//alert(rejected_CustQ);

               $('#newqueries-table').DataTable({
				   
				    destroy: true,
     "ajax":{
       url: "<?php echo site_url("admin/users/queries_page")?>",
       type: 'GET',
	   data: {rejected_CustQ:rejected_CustQ},
     },
  
        });
   });
/*************************16-aug-2018 end here******************************/


/*************************17-aug-2018 start here******************************/

$("#query_status_new").on('change', function() {	
	
	var query_status_new = document.getElementById("query_status_new").value;
	
	
	//alert(query_status);

$('#newqueries-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "get",
url: "<?php echo site_url("admin/users/queries_page")?>",
data: { query_status_new: '' + query_status_new + '' }
},
 });

});

/*************************17-aug-2018 end here********************************/

/*************************23-aug-2018 start here******************************/

$("#UserType").on('change', function() {	
	
	var UserType = document.getElementById("UserType").value;

$('#newusers-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "get",
url: "<?php echo site_url("admin/users/users_page")?>",
data: { UserType: '' + UserType + '' }
},
 });

});		

/*************************23-aug-2018 end here*******************************/

/*************************24-aug-2018 start here*******************************/
$.ajax({
                url: '<?php echo site_url("admin/users/getActivityuserCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('#activity_Cust').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });	

$.ajax({
                url: '<?php echo site_url("admin/users/getNonActivityuserCount")?>',
                type: 'get',
                success: function(data){
					
					//alert(data);new_Cust
					
                
                    $('#nonactivity_Cust').html(data);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    $('#').html(errorMsg);
                  }
            });				

/*************************24-aug-2018 end here********************************/

/*************************29-aug-2018 start here******************************/
$('.rejected_Cust').click(function(){
		
		
	var rejected_Cust=2;
	
	//alert(assigned_Cust);

               $('#newusers-table').DataTable({
				   
				    destroy: true,
					
     "ajax":{
       url: "<?php echo site_url("admin/users/users_page")?>",
       type: 'GET',
	   data: {rejected_Cust:rejected_Cust},
     },
	 
  
        });
   });
$('.activity_Cust').click(function(){
		
		
	var activity_Cust=2;
	
	//alert(assigned_Cust);

               $('#newusers-table').DataTable({
				   
				    destroy: true,
					
     "ajax":{
       url: "<?php echo site_url("admin/users/users_page")?>",
       type: 'GET',
	   data: {activity_Cust:activity_Cust},
     },
	 
  
        });
    });
   $('.nonactivity_Cust').click(function(){
		
		
	var nonactivity_Cust=2;
	
	//alert(assigned_Cust);

               $('#newusers-table').DataTable({
				   
				    destroy: true,
					
     "ajax":{
       url: "<?php echo site_url("admin/users/users_page")?>",
       type: 'GET',
	   data: {nonactivity_Cust:nonactivity_Cust},
     },
	 
  
        });
   });
   
   $("#UserAct_status").on('change', function() {	
	
	var UserAct_status = document.getElementById("UserAct_status").value;

$('#newusers-table').DataTable({
	
	 destroy: true,
 

"ajax":{
type: "get",
url: "<?php echo site_url("admin/users/users_page")?>",
data: { UserAct_status: '' + UserAct_status + '' }
},
 });

});
/*************************29-aug-2018 end here********************************/

$('#country').on("change",function(){
	 
	 var country=$("#country").val();
	 
	
	 if(country=="71"){
		
		 
		 $('.regionid').show();
		 
	 }else{
		 
		 $('.regionid').hide();
		 $('.regionid').val('');
		 
	 }
	 
  }); 
 $(window).load(function(){
	 var coun='<?php echo $sellBusinessBasicInformation[0]['location_country'];?>';
	if(coun==''){
		 $('.regionid').show();
 }	
 else if(coun=="1"){
		
		 
		 $('.regionid').show();
		 
	 }else{
		 
		 $('.regionid').hide();
		 $('.regionid').val('');
		 
	 }
  });  
    
  
  $('#state').on("change",function(){
	 
	 var state=$("#state").val();
	 
	
	 if(state=="Other"){
		
		 
		 $('.other_state').show();
		
	 }
	 
	 else{
		 
		 $('.other_state').hide();
		 
	 }
	 
  }); 
    $(window).load(function(){
	 
	var state='<?php echo $sellBusinessBasicInformation[0]['location_state'];?>';
	
	
	 
	 if(state=='Other'){
		 
		 $('.other_state').show(); 
	 }
	 else{
		 
		 $('.other_state').hide();
		 
	 }
	 
  }); 
  $(window).load(function(){
	 
	var state='<?php echo $businessDetails[0]['location_state'];?>';
	
	
	 
	 if(state=='Other'){
		 
		 $('.other_state').show(); 
	 }
	 else{
		 
		// $('.other_state').hide();
		 
	 }
	 
  }); 
    $('#city').on("change",function(){
	 
	 var city=$("#city").val();
	 
	
	 if(city=="Other"){
		
		 
		 $('.other_city').show();
		 
	 }else{
		 
		 $('.other_city').hide();
		 
	 }
	 
  });
 $(window).load(function(){
	 
	var city='<?php echo $businessDetails[0]['location_city'];?>';
	
	
	 
	 if(city=='Other'){
		 
		 
		 //alert("hello");
		 
		 $('.other_city').show(); 
	 }
	 else{
		
		 $('.other_city').hide();
		 
	 }
	 
  });  
  $(window).load(function(){
	 
	var city='<?php echo $sellBusinessBasicInformation[0]['location_city'];?>';
	var city2='<?php echo $businessDetails[0]['location_city'];?>';
	
	
	 
	 if(city=='Other' || city2=='Other'){
		 
		 $('.other_city').show(); 
	 }
	 else{
		 
		// $('.other_city').hide();
		 
	 }
	 
  });  
  
 $('#state').on("change",function(){
	 
	 var state=$("#state").val();
	 
	//alert(state);
	 if(state == 'Other' ){
		
		 
		 $('.statecityid').show();
		 $('.citystateid').hide();
		 $('#other_city').hide();
		 $('#city').val('');
		 $('#other_city_2').val('');
		 
	 }else if(state != 'Other' ){
		
		 
		 $('.statecityid').hide();
		 $('.citystateid').show();
		 $('.other_state').val('');
		 
		 $('#other_city').hide();
	 }
	 else{
		 
		 $('.statecityid').hide();
		 $('#other_city').hide();
	 }
	 
  }); 
   $(window).load(function(){
	 
	var state='<?php echo $sellBusinessBasicInformation[0]['location_state'];?>';
	
	var state2='<?php echo $businessDetails[0]['location_state'];?>';
	//alert(state);
	 if(state == 'Other' || state2 == 'Other'){
		
		 
		 $('.statecityid').show();
		 $('.citystateid').hide();
		 
	 }else if(state != 'Other' || state2 != 'Other'){
		
		 
		 $('.statecityid').hide();
		 $('.citystateid').show();
		 
	 }
	 else{
		 
		 $('.statecityid').hide();
		 
	 }
	 
	 
  });
  $('#city').on("change",function(){
	 
	 var city=$("#city").val();
	 
	//alert(state);
	 if(city == 'Other' ){
		
		 
		 $('#other_city').show();
		 $('#other_city_2').val('');
		$('#other_city').val('');
		 
		 
	 }else if(city != 'Other' ){
		
		 
		$('#other_city').hide();
		$('#other_city').val('');
		 
	 }
	 else{
		 
		$('#other_city').hide();
		 
	 }
	 
  }); 
  
  $(window).load(function(){
	 
	var city='<?php echo $sellBusinessBasicInformation[0]['location_city'];?>';
	var city2='<?php echo $businessDetails[0]['location_city'];?>';
	
	//alert(state);
	 if(city == 'Other' || city2 == 'Other'){
		
		 
		 $('#other_city').show();
		 
		 
	 }else if(city != 'Other' || city2 != 'Other'){
		
		 
		$('#other_city').hide();
		 
	 }
	 else{
		 
		$('#other_city').hide();
		 
	 }
	 
  });
  
     
	   
   $('#category').on("change",function(){
	 
	 var category=$("#category").val();
	 
	//alert(state);
	 if(category == 'Other' ){
		
		 
		 $('.othersubcatid').show();
		 $('.subcatid').hide();
		  $('.listing_category_other').show();
		  
		  $('#listing_sub_category_other_2').val('');
		 
	 }else if(category != 'Other' ){
		
		 
		 $('.subcatid').show();
		 $('.othersubcatid').hide();
		  $('.listing_category_other').hide();
		  //$('.listing_category_other').val('');
		  $('.listing_sub_category_other_2').val('');
		  //$('.sub_category_other').val('');
		  $('.sub_category_other').hide();
		 
	 }
	 else{
		 
		$('.othersubcatid').hide();
		$('.sub_category_other').hide();
		 
	 }
	 
  }); 
 
    $(window).load(function(){
	 
	 var category='<?php echo $sellBusinessBasicInformation[0]['listing_category'];?>';
	 var category2='<?php echo $businessDetails[0]['listing_category'];?>';
	 
	 //var category=$("#category").val();
	 
	//alert(state);
	 if(category == 'Other' || category2 == 'Other'){
		//sub_category_other
		 
		 $('.othersubcatid').show();
		 $('.listing_category_other').show();
		 //$('.sub_category_other').show();
		
		 $('.subcatid').hide();
		 
		 
	 }else if(category != 'Other' || category2 != 'Other'){
		
		 
		 $('.subcatid').show();
		 $('.othersubcatid').hide();
		
		  $('.listing_category_other').hide();
		   $('.sub_category_other').hide();
		
		 
	 }
	 else{
		 
		$('.othersubcatid').hide();
		//$('.sub_category_other').hide();
		
		 
	 }
	 
  }); 
     $(window).load(function(){
	 
	 var subcategory='<?php echo $sellBusinessBasicInformation[0]['listing_sub_category'];?>';
	 var subcategory2='<?php echo $businessDetails[0]['listing_sub_category'];?>';
	 
	 //var category=$("#category").val();
	 
	//alert(state);
	 if(subcategory == 'Other' || subcategory2 == 'Other'){
		
		
		$('#listing_sub_category_other_2').val('');
		
		$('.sub_category_other').show();
		
	 }else if(subcategory != 'Other'  || subcategory2 != 'Other'){
		
		 
		 $('.sub_category_other').hide();
		
	 }
	 else{
		
		$('.sub_category_other').hide();
		 
	 }
	 
  }); 
 $('#subcategory').on("change",function(){
	 
	 var subcategory=$("#subcategory").val();
	 
	 if(subcategory == 'Other' ){
		 
		 
		 $('.sub_category_other').show();
		 
	 }else if(subcategory != 'Other' ){
		 
		  $('.sub_category_other').hide();
		 
	 }else{
		 
		  $('.sub_category_other').hide(); 
		 
	 }
 });

  $('#bstatus').on("change",function(){
	 
	 var bstatus=$("#bstatus").val();
	 
	
	 if(bstatus=="Other"){
		
		 
		 $('#bstatus_other').show();
		
	 }
	 
	 else{
		 
		 $('#bstatus_other').hide();
		 
	 }
	 
  }); 
    $(window).load(function(){
	 
	 <?php if($sellBusinessBasicInformation[0]['current_status_of_business']!=''){?>
	 
	var bstatus='<?php echo $sellBusinessBasicInformation[0]['current_status_of_business'];?>';
	
	 <?php }else{?>
	var bstatus='<?php echo $businessDetails[0]['current_status_of_business'];?>';
	
	
	 <?php }?>
	
	//alert(bstatus);
	 
	 if(bstatus=='Other'){
		 
		 $('#bstatus_other').show(); 
	 }
	 else{
		 
		 $('#bstatus_other').hide();
		 
	 }
	 
  });
</script>

<script type="text/javascript">
 /*$('body').on('click', '.preview-add-button', function() {
//alert('ssssss');
jQuery('.add-property').clone().appendTo('.add-property-2');
});*/

$(document).ready(function(event){

	var URL = window.location.href;
	//alert(URL);
	var str = URL.split("/");
	if (str.indexOf("personaldetail")!=-1){
		navigateToTab('personaldetail');
	}else if(str.indexOf("businessprofile")!=-1){
		navigateToTab('businessprofile');
	}else if(str.indexOf("postrequirement")!=-1){
		navigateToTab('postrequirement');
	}

	
	//alert(str[8]);
	//if(str[8]=='businessprofile'){
	//	navigateToTab('businessprofile')
	//}
});



function abcd(){
	alert('gaurav');
	navigateToTab('Uploads');
	alert('ssss');
}


function sumEmployee(){
	//alert('aaaaa');
	var par = $("#noemp_par").val();
	var con = $("#noemp_con").val();
	var sum = Number(par) + Number(con);
	$("#noemp_tot").val(sum);
	//alert(par);
}


function sumEmployeeProfile(){
	//alert('aaaaa');
	var par = $("#pemployee").val();
	var con = $("#cemployee").val();
	var sum = Number(par) + Number(con);
	$("#temployee").val(sum);
	//alert(par);
}




function getId(id,selectObject){
	var id = id;
	//alert(id);
	var split_id = id.split('_');

    // New index
	var index = Number(split_id[2]);
	//alert(index);
	var value = selectObject.value;
	//alert(value);
	if (value == 'Leased')
	{
		$("#commercial_area_"+index).show();
		$(".prohide").show();
		
		
		$("#askdefault").hide();
		$("#leased").show();
		$("#owned").hide();
		
		
		
	}
	else if (value == 'Owner')
	{
		$("#commercial_area_"+index).show();
		$(".prohide").show();
		$("#askdefault").hide();
		$("#leased").hide();
		$("#owned").show();
		
		
		
	}
	else
	{
		$("#commercial_area_"+index).show();
		
		$("#askdefault").show();
		$("#leased").hide();
		$("#owned").show();
	}

}

$(".cus-t").change(function() {
	var checked = $(this).is(':checked');
    $(".cus-t").prop('checked',false);
    if(checked) {
        $(this).prop('checked',true);
    }
});



$('body').on('click', '.button-add', function() {
	
	var count = $('#count').val();
	
	
	//var count = 1;
	var countP = Number(count) + 1;
 //alert(countP);

        //we select the box clone it and insert it after the box
  var newel=   $('.box:last').clone(true).insertAfter(".box:last");
  
  //var newel = $('.add-property_2:last').clone(true);
  
  
  	$(newel).find('#property_id_'+count).attr("id","property_id_"+countP);
   $(newel).find('#property_id_'+countP).attr("name","property_id_"+countP);
  //$(newel).find('#property_id_'+countP).val("");

  $(newel).find('#property_profile_'+count).attr("id","property_profile_"+countP);
  $(newel).find('#property_profile_'+countP).attr("name","property_profile_"+countP);
  //$(newel).find('#input[type=text]:nth-child(2)').attr("id","real_state_value_"+index);
  $(newel).find('#property_profile_'+countP).hide();
  $(newel).find('#property_profile_'+countP).val("");
  
  $(newel).find('#property_type_'+count).attr("id","property_type_"+countP);
  $(newel).find('#property_type_'+countP).attr("name","property_type_"+countP);
  //$(newel).find('#input[type=text]:nth-child(2)').attr("id","real_state_value_"+index);
 // $(newel).find('#property_type_'+countP).val("");	
 $(newel).find('#property_type_'+countP).val(""); 
   
  	
  $(newel).find('#real_state_value_unit_'+count).attr("id","real_state_value_unit_"+countP);
  $(newel).find('#real_state_value_unit_'+countP).attr("name","real_state_value_unit_"+countP);
  $(newel).find('#real_state_value_unit_'+countP).val("Upto 50 Lac");	
  
  $(newel).find('#real_state_value_unit_'+countP).val(""); 
  

  $(newel).find('#real_state_value_'+count).attr("id","real_state_value_"+countP);
  $(newel).find('#real_state_value_'+countP).attr("name","real_state_value_"+countP);
  $(newel).find('#real_state_value_'+countP).val("");

  $(newel).find('#real_state_value_type_'+count).attr("id","real_state_value_type_"+countP);
  $(newel).find('#real_state_value_type_'+countP).attr("name","real_state_value_type_"+countP);
  $(newel).find('#real_state_value_type_'+countP).val(""); 

 // $(newel).find('#facility_desc_'+count).attr("id","facility_desc_"+countP);
  //$(newel).find('#facility_desc_'+countP).attr("name","facility_desc_"+countP);
  //$(newel).find('#facility_desc_'+countP).val("");	

  $(newel).find('#commercial_area_'+count).attr("id","commercial_area_"+countP);
  $(newel).find('#commercial_area_'+countP).attr("name","commercial_area_"+countP);	
  $(newel).find('#commercial_area_'+countP).val(""); 
  

  $(newel).find('#total_land_area_type_'+count).attr("id","total_land_area_type_"+countP);
  $(newel).find('#total_land_area_type_'+countP).attr("name","total_land_area_type_"+countP);
  //$(newel).find('#total_land_area_type_'+countP).val(""); 
  //$(newel).find('#total_land_area_type_'+countP).val("");	

  $(newel).find('#total_land_area_'+count).attr("id","total_land_area_"+countP);
  $(newel).find('#total_land_area_'+countP).attr("name","total_land_area_"+countP);
  $(newel).find('#total_land_area_'+countP).val("");

  $(newel).find('#built_up_area_type_'+count).attr("id","built_up_area_type_"+countP);
  $(newel).find('#built_up_area_type_'+countP).attr("name","built_up_area_type_"+countP);
   //$(newel).find('#built_up_area_type_'+countP).val(""); 

  $(newel).find('#built_up_area_'+count).attr("id","built_up_area_"+countP);
  $(newel).find('#built_up_area_'+countP).attr("name","built_up_area_"+countP);
  $(newel).find('#built_up_area_'+countP).val("");  	

  $(newel).find('#open_area_type_'+count).attr("id","open_area_type_"+countP);
  $(newel).find('#open_area_type_'+countP).attr("name","open_area_type_"+countP);
   //$(newel).find('#open_area_type_'+countP).val(""); 

  $(newel).find('#open_area_'+count).attr("id","open_area_"+countP);
  $(newel).find('#open_area_'+countP).attr("name","open_area_"+countP);
  $(newel).find('#open_area_'+countP).val("");

  $(newel).find('#other_area_'+count).attr("id","other_area_"+countP);	
  $(newel).find('#other_area_'+countP).attr("name","other_area_"+countP);	
  $(newel).find('#other_area_'+countP).val("");	
  
  $(newel).find('#button-remove_'+count).attr("id","button-remove_"+countP);	
  $(newel).find('#button-remove_'+countP).attr("name","button-remove_"+countP);	
  $(newel).find('#button-remove_'+countP).val("");	
  
  $(newel).find('.button-remove_'+count).attr("class","button-remove_"+countP);	
  $(newel).find('.button-remove_'+countP).attr("name","button-remove_"+countP);	
  $(newel).find('.button-remove_'+countP).show();	
  
  $(newel).find('#built_up_main_'+count).attr("id","built_up_main_"+countP);
  $(newel).find('#open_area_main_'+count).attr("id","open_area_main_"+countP);
  
	
$(newel).find('#carpet_area_'+count).attr("id","carpet_area_"+countP);
  $(newel).find('#carpet_area_'+countP).attr("name","carpet_area_"+countP);
  $(newel).find('#carpet_area_'+countP).val("");
  
  
 
   $(newel).find('#carpet_area_type_'+count).attr("id","carpet_area_type_"+countP);
  $(newel).find('#carpet_area_type_'+countP).attr("name","carpet_area_type_"+countP);
  
  $(newel).find('#industrial_commercial_'+count).attr("id","industrial_commercial_"+countP);
  $(newel).find('#industrial_commercial_'+countP).attr("name","industrial_commercial_"+countP);
  $(newel).find('#industrial_commercial_'+countP).show("");
     //$(newel).find('#industrial_commercial_'+countP).val(""); 
   
    //$(newel).insertAfter(".add-property_2:last");
   
  $(newel).find('#button-remove_'+countP).show();	
  $(newel).find('#button-remove_1').show();	
   
$('#property_profile_'+countP).hide();
  $("#commercial_area_"+countP).show();
  //$(".carpet_area_"+countP).show();
  
 
  
  $('#count').val(countP);
  $('#count2').val(countP); 
  //$('#property_id_').val(countP); 
  
  

var idval=$(".formId").val();  

//alert(idval);

//add form in db
$.ajax({
type: "GET",
url: "<?php echo site_url("admin/Seller/AddProperty")?>",
data: { idval: '' + idval + '' },
success: function(data) {
						//alert(data);
						
						
						 $('.newid:last').val($.trim(data));
						
					}
}); 


});
$(window).load(function(){

var count = $('#count').val(); 

//alert(count);

for(z=2;z <count+1;z++){	

  $("#button-remove_"+z).show();	
}  
});
    
    $(document).on("click", ".button-remove", function() {
		
		
        $(this).closest(".box").remove();
		
		
    });

 
function Remove(objButton){ 
 
  $(this).closest(".box").remove();
}
function f1(objButton){  


	 var str =objButton.value;
	
	 var idval = str.split("&")[0];
	 
	 //alert(idval);

	 $(this).closest(".box").remove();

	
	
$.ajax({
type: "GET",
url: "<?php echo site_url("admin/Seller/DeleteProperty")?>",
data: { idval: '' + idval + '' },
success: function(data) {
	
					//	var count = $('#count').val();
	
	//alert(count);
	//$('#property_id_'+count).val(idval);

					}
});

}

function getProperty(id,selectObject){
	
	var id = id;
	//alert(id);
	var split_id = id.split('_');

    // New index
	var index = Number(split_id[2]);
	//alert(index);
	var value = selectObject.value;
	//alert(value);
	if (value == 'Industrial')
	{
		
	$("#built_up_main_"+index).show();
    $("#open_area_main_"+index).show();  
    $("#carpet_area_main_"+index).hide();  
    $("#carpet_area_main_"+index).val("");  
	
		
		
	}
	else if (value == 'Commercial')
	{
		
		//alert(value);
	$("#built_up_main_"+index).hide();
    $("#open_area_main_"+index).hide();  
	$("#carpet_area_main_"+index).show();  	
	$("#total_land_area_"+index).val(""); 
	$("#carpet_area_"+index).val(""); 
	$("#built_up_area_"+index).val(""); 
	$("#open_area_"+index).val(""); 
	
	}
	else
	{
		
	$("#built_up_main_"+index).show();
    $("#open_area_main_"+index).show();
    $("#carpet_area_main_"+index).hide();  	  
	}

}

$(window).load(function(){

var count = $('#count').val(); 


				 if(count==0){
					var count_records = 1;
				 }else{
					 var count_records = count;
				 }		
for(z=1;z <count_records+1;z++){	

var value=$("#industrial_commercial_"+z).val();

if (value == 'Industrial')
	{
		
	$("#built_up_main_"+z).show();
  $("#open_area_main_"+z).show();
   $("#carpet_area_main_"+z).hide();  	
   $("#carpet_area_"+z).val("");  	
   //$("#total_land_area_"+z).val("");  	
  	
		
		
	}
	else if (value == 'Commercial')
	{
		
	$("#built_up_main_"+z).hide();
  $("#open_area_main_"+z).hide();
   $("#carpet_area_main_"+z).show();  	
	// $("#total_land_area_"+z).val("");  	
		
	}
	else
	{
		
	$("#built_up_main_"+z).show();
  $("#open_area_main_"+z).show();
   $("#carpet_area_main_"+z).hide();  	
	}

}  
});  
	 
		
			
$('body').on('click', '.finance-add-button', function() {

	var count = $('#count-fin').val();
	//var count = 1;
	var countP = Number(count) + 1;
	//alert(count);
  
  // Create clone
 // var newel = $('.add-finance_2:last').clone(true);
  
    var newel=   $('.finbox:last').clone(true).insertAfter(".finbox:last");
  //alert(newel);	
  // Set id of new element
  //$(newel).find('select[id=text]:nth-child(1)').attr("id","add-property_"+index);
  $(newel).find('#finance_id_'+count).attr("id","finance_id_"+countP);
  $(newel).find('#finance_id_'+countP).attr("name","finance_id_"+countP);
  //$(newel).find('#finance_id_'+countP).val("");


  	
  $(newel).find('#fin_year_'+count).attr("id","fin_year_"+countP);
  $(newel).find('#fin_year_'+countP).attr("name","fin_year_"+countP);
  $(newel).find('#fin_year_'+countP).val("");

  $(newel).find('#fin_revenue_turnover_'+count).attr("id","fin_revenue_turnover_"+countP);
  $(newel).find('#fin_revenue_turnover_'+countP).attr("name","fin_revenue_turnover_"+countP);
  $(newel).find('#fin_revenue_turnover_'+countP).val("");

  $(newel).find('#fin_EDITDA_'+count).attr("id","fin_EDITDA_"+countP);
  $(newel).find('#fin_EDITDA_'+countP).attr("name","fin_EDITDA_"+countP);
  $(newel).find('#fin_EDITDA_'+countP).val("");	

  $(newel).find('#fin_PAT_'+count).attr("id","fin_PAT_"+countP);
  $(newel).find('#fin_PAT_'+countP).attr("name","fin_PAT_"+countP);
  $(newel).find('#fin_PAT_'+countP).val("");

  $(newel).find('#fin_margin_'+count).attr("id","fin_margin_"+countP);
  $(newel).find('#fin_margin_'+countP).attr("name","fin_margin_"+countP);	
  $(newel).find('#fin_margin_'+countP).val("");	
  //$(newel).find('#industrial_commercial_'+count).attr("id","industrial_commercial_"+countP);
  //$(newel).find('#industrial_commercial_'+countP).attr("name","industrial_commercial_"+countP);
  
   $(newel).find('#financial_details_'+count).attr("id","financial_details_"+countP);
  $(newel).find('#financial_details_'+countP).attr("name","financial_details_"+countP);	
  $(newel).find('#financial_details_'+countP).val("");	

  $(newel).find('#fin_yearly_'+count).attr("id","fin_yearly_"+countP);
  $(newel).find('#fin_yearly_'+countP).attr("name","fin_yearly_"+countP);
  $(newel).find('#fin_yearly_'+countP).val("");	
  
 $(newel).find('#button-remove_'+count).attr("id","button-remove_"+countP);	
  $(newel).find('#button-remove_'+countP).attr("name","button-remove_"+countP);	
  $(newel).find('#button-remove_'+countP).hide();	
  $(newel).find('.button-remove').show();	
  
	 $(newel).find('#finbutton-remove_'+countP).show();	
  $(newel).find('#finbutton-remove_1').show();	

  //$("#commercial_area_"+countP).show();
  $('#count-fin').val(countP);
  $('#count-fin2').val(countP);

  var idval=$(".formId").val();  

//alert(idval);

//add form in db
$.ajax({
type: "GET",
url: "<?php echo site_url("admin/Seller/AddFinProperty")?>",
data: { idval: '' + idval + '' },
success: function(data) {
						 //$('#finance_id_'+countP).val(data);
						  $('.newfinid:last').val($.trim(data));
						  
						 // $('#financial_details_'+countP).val(countP);

					    }
}); 
  
 });
 
$(document).on("click", ".favelist", function() {


var idval =$(this).attr('href');

//alert(idval);

$.ajax({
type: "GET",
url: "<?php echo site_url("admin/Seller/GetFavorite")?>",
data: { idval: '' + idval + '' },
success: function(data) {
						
						
						  
						//  $(".favdata").data().value;
						  
						 $('.favdata').html(data);

					    }
}); 

});	

$(document).on("click", ".contactList", function() {


var idval =$(this).attr('href');

//alert(idval);

$.ajax({
type: "GET",
url: "<?php echo site_url("admin/Seller/GetContactlist")?>",
data: { idval: '' + idval + '' },
success: function(data) {
						
						
						  
						//  $(".favdata").data().value;
						  
						 $('.Contactdata').html(data);

					    }
}); 

}); 

$(document).on("click", ".SellerCount", function() {


var idval =$(this).attr('href');

//alert(idval);

$.ajax({
type: "GET",
url: "<?php echo site_url("admin/Seller/GetSellerCount")?>",
data: { idval: '' + idval + '' },
success: function(data) {
						
						
						  
						//  $(".favdata").data().value;
						  
						 $('.Sellerdata').html(data);

					    }
}); 

}); 
 
$(document).on("click", ".finbutton-remove", function() {
      
	  var count = $('#count-fin').val();
	
	$(this).closest(".finbox").remove();
	
	
	var countP = count-1;
	
	$('#count-fin').val(countP);
  $('#count-fin2').val(countP);
		
    });
 
$(window).load(function(){

var countfin = $('#count-fin').val(); 

//alert(countfin);

for(a=2;a <countfin+1;a++){	

  $("#finbutton-remove_"+a).show();	
}  
}); 
function RemoveFin(objButton){  
	//alert(objButton.value);
	
	var str =objButton.value;
	
	 var idval = str.split("&")[0];
	 var countval = str.split("&")[1];
				
     $(this).closest(".finbox").remove();   // remove the last element
				
				
$.ajax({
type: "GET",
url: "<?php echo site_url("admin/Seller/DeleteFinProperty")?>",
data: { idval: '' + idval + '' },
success: function(data) {
						// location.reload();

					}
});				
				
}






$("input.par_numbers").keypress(function(event) {
  return /\d/.test(String.fromCharCode(event.keyCode));
});

$("input.con_numbers").keypress(function(event) {
  return /\d/.test(String.fromCharCode(event.keyCode));
});

function sumFund(){
	//alert('aaaaa');
	var par = $("#funding_own").val();
	var con = $("#funding_debt").val();
	var sum = Number(par) + Number(con);
	$("#fund_tot").val(sum);
	//alert(par);
}
function RemoveState(objButton){  
	//alert(objButton.value);
	var r=confirm("Are you sure to delete?");
	var str =objButton.value;
if (r==true){	
	
$.ajax({
type: "GET",
url: "<?php echo site_url("admin/State/DeleteState")?>",
data: { str: '' + str + '' },
success: function(data) {
					swal("Success","State deleted successfully.", "success");	
						location.reload();

					}
});				
return true;
}else{
			return false;
		}				
}

function RemoveCountry(objButton){  
	//alert(objButton.value);
	var r=confirm("Are you sure to delete?");
	var str =objButton.value;
if (r==true){	
	
$.ajax({
type: "GET",
url: "<?php echo site_url("admin/Country/DeleteCountry")?>",
data: { str: '' + str + '' },
success: function(data) {
	
					swal("Success","Country deleted successfully.", "success");	
						location.reload();

					}
});				
return true;
}else{
			return false;
		}				
}

function RemoveAds(objButton){  
	//alert(objButton.value);
	var r=confirm("Are you sure to delete?");
	var str =objButton.value;
if (r==true){	
	
$.ajax({
type: "GET",
url: "<?php echo site_url("admin/Advertisements/DeleteAds")?>",
data: { str: '' + str + '' },
success: function(data) {
	
					swal("Success","Advertisement deleted successfully.", "success");	
						location.reload();

					}
});				
return true;
}else{
			return false;
		}				
}
function resetPriceRange(target_price_range,price_unit_value ){
	//alert(price_unit_value);
	var currency = $("#ask_price_currency").val();
	var numeric_val = $("#ask_price").val();
	var unit     = $("#ask_price_unit").val();
	var compare  = '';
	var final_val = '';
	
	//alert(unit);
	
	if(unit=='THOUSANDS')
		final_val='000';
	if(unit=='LACS')
		final_val='00000';
	if(unit=='CRORES')
		final_val='0000000';
	if(unit=='MILLIONS')
		final_val='000000';
	if(unit=='BILLIONS')
		final_val='000000000';
	
	input_value = numeric_val+final_val;
		//alert(input_value);
	
	if(currency=='INR'){
		compare = 'PRICES_COMPARE_INR';
	}else{
		compare = 'PRICES_COMPARE_USD';
	}
	//alert(compare);
	input_value = Number(input_value);
	 var compare_saved='';
	 var split_id = 0;	
	 if(currency=='INR'){
	<?php 
		
	foreach( unserialize(PRICES_COMPARE_INR) as $priceUnitValue=>$priceUnitName ){ 
	?>
		compare_saved = '<?php echo $priceUnitValue ?>';
		compare_name  = '<?php echo $priceUnitName ?>';
		//alert(compare_saved);
		
		var split_id = compare_saved.split(',');
	
		var small = Number(split_id[0]);
		var large = Number(split_id[1]);
		if((input_value>=small && input_value<=large)){
			//alert(small+'  '+large+' '+compare_name);
			$("#price_range_type").val(compare_name);
		}		
		
	<?php } ?>	
	 }else{
		 
		 <?php 
		
	foreach( unserialize(PRICES_COMPARE_USD) as $priceUnitValue=>$priceUnitName ){ ?>
		compare_saved = '<?php echo $priceUnitValue ?>';
		compare_name  = '<?php echo $priceUnitName ?>';
		//alert(compare_saved);
		
		var split_id = compare_saved.split(',');
	
		var small = Number(split_id[0]);
		var large = Number(split_id[1]);
		if((input_value>=small && input_value<=large)){
			//alert(small+'  '+large+' '+compare_name);
			$("#price_range_type").val(compare_name);
		}	
	<?php } ?>
		 
	 }	 
		
}
$(document).ready(function(event){
        $('#ask_price_currency').change(function() {
			
			//alert("hello");
          
		  $('#ask_price').val('');
    });
	
	$('#price_currency').change(function() {
			
			//alert("hello");
          
		  $('#price_value').val('');
    });
  });
  
$("#investment_min" ).keyup(function() {
		
		var MinVal=$('#investment_min').val();
		var unit=$('#investment_min_price_unit').val();
		
		if(unit=='THOUSANDS')
		final_val='000';
	if(unit=='LACS')
		final_val='00000';
	if(unit=='CRORES')
		final_val='0000000';
	if(unit=='MILLIONS')
		final_val='000000';
	if(unit=='BILLIONS')
		final_val='000000000';
	
	var minfinalval=MinVal+final_val;
		
		
		var MaxVal=$('#investment_max').val();
		
		var unit2=$('#investment_max_price_unit').val();
		
		if(unit2=='THOUSANDS')
		final_val2='000';
	if(unit2=='LACS')
		final_val2='00000';
	if(unit2=='CRORES')
		final_val2='0000000';
	if(unit2=='MILLIONS')
		final_val2='000000';
	if(unit2=='BILLIONS')
		final_val2='000000000';
	
	var maxfinalval=MaxVal+final_val2;
		
		
  if(parseInt(minfinalval)>parseInt(maxfinalval)){
      $('#errorMsg').show();
	  $('.buyerBP').attr("disabled", 'disabled');

  }
 
  else{
    $('#errorMsg').hide();
	$('.buyerBP').attr("disabled", false);

	
  }
});

	$("#investment_min_price_unit" ).change(function() {
		
		var MinVal=$('#investment_min').val();
		var unit=$('#investment_min_price_unit').val();
		
		if(unit=='THOUSANDS')
		final_val='000';
	if(unit=='LACS')
		final_val='00000';
	if(unit=='CRORES')
		final_val='0000000';
	if(unit=='MILLIONS')
		final_val='000000';
	if(unit=='BILLIONS')
		final_val='000000000';
	
	var minfinalval=MinVal+final_val;
		
		
		var MaxVal=$('#investment_max').val();
		
		var unit2=$('#investment_max_price_unit').val();
		
		if(unit2=='THOUSANDS')
		final_val2='000';
	if(unit2=='LACS')
		final_val2='00000';
	if(unit2=='CRORES')
		final_val2='0000000';
	if(unit2=='MILLIONS')
		final_val2='000000';
	if(unit2=='BILLIONS')
		final_val2='000000000';
	
	var maxfinalval=MaxVal+final_val2;
		
		
  if(parseInt(minfinalval)>parseInt(maxfinalval)){
      $('#errorMsg').show();
	  $('.buyerBP').attr("disabled", 'disabled');
  }
 
  else{
    $('#errorMsg').hide();
	$('.buyerBP').attr("disabled", false);
	
  }
});

$("#investment_max" ).keyup(function() {
	
			var MinVal=$('#investment_min').val();
		var unit=$('#investment_min_price_unit').val();
		
		if(unit=='THOUSANDS')
		final_val='000';
	if(unit=='LACS')
		final_val='00000';
	if(unit=='CRORES')
		final_val='0000000';
	if(unit=='MILLIONS')
		final_val='000000';
	if(unit=='BILLIONS')
		final_val='000000000';
	
	var minfinalval=MinVal+final_val;
		
		
		var MaxVal=$('#investment_max').val();
		
		var unit2=$('#investment_max_price_unit').val();
		
	if(unit2=='THOUSANDS')
		final_val2='000';
	if(unit2=='LACS')
		final_val2='00000';
	if(unit2=='CRORES')
		final_val2='0000000';
	if(unit2=='MILLIONS')
		final_val2='000000';
	if(unit2=='BILLIONS')
		final_val2='000000000';
	
	var maxfinalval=MaxVal+final_val2;
		
		
  if(parseInt(minfinalval)>parseInt(maxfinalval)){
      $('#errorMsg').show();
	  $('.buyerBP').attr("disabled", 'disabled');
  }
 
  else{
    $('#errorMsg').hide();
	$('.buyerBP').attr("disabled", false);
	
  }
});
$("#investment_max_price_unit" ).change(function() {
	
			var MinVal=$('#investment_min').val();
		var unit=$('#investment_min_price_unit').val();
		
		if(unit=='THOUSANDS')
		final_val='000';
	if(unit=='LACS')
		final_val='00000';
	if(unit=='CRORES')
		final_val='0000000';
	if(unit=='MILLIONS')
		final_val='000000';
	if(unit=='BILLIONS')
		final_val='000000000';
	
	var minfinalval=MinVal+final_val;
		
		
		var MaxVal=$('#investment_max').val();
		
		var unit2=$('#investment_max_price_unit').val();
		
	if(unit2=='THOUSANDS')
		final_val2='000';
	if(unit2=='LACS')
		final_val2='00000';
	if(unit2=='CRORES')
		final_val2='0000000';
	if(unit2=='MILLIONS')
		final_val2='000000';
	if(unit2=='BILLIONS')
		final_val2='000000000';
	
	var maxfinalval=MaxVal+final_val2;
		
		
  if(parseInt(minfinalval)>parseInt(maxfinalval)){
      $('#errorMsg').show();
	  $('.buyerBP').attr("disabled", 'disabled');
  }
 
  else{
    $('#errorMsg').hide();
	$('.buyerBP').attr("disabled", false);
	
  }
});



	$("#req_investment_min" ).keyup(function() {
		
		var MinVal=$('#req_investment_min').val();
		
		var unit=$('#req_investment_min_price_unit').val();
		
		if(unit=='THOUSANDS')
		final_val='000';
	if(unit=='LACS')
		final_val='00000';
	if(unit=='CRORES')
		final_val='0000000';
	if(unit=='MILLIONS')
		final_val='000000';
	if(unit=='BILLIONS')
		final_val='000000000';
	
	var minfinalval=MinVal+final_val;
		
		
		
		var MaxVal=$('#req_investment_max').val();
		
		
		var unit2=$('#req_investment_max_price_unit').val();
		
	if(unit2=='THOUSANDS')
		final_val2='000';
	if(unit2=='LACS')
		final_val2='00000';
	if(unit2=='CRORES')
		final_val2='0000000';
	if(unit2=='MILLIONS')
		final_val2='000000';
	if(unit2=='BILLIONS')
		final_val2='000000000';
	
	var maxfinalval=MaxVal+final_val2;
		
		
  if(parseInt(minfinalval)>parseInt(maxfinalval)){
      $('#errorMsgREQ').show(); 
	 $('.buyerPP').attr("disabled", 'disabled');
	  
  }
 
  else{
    $('#errorMsgREQ').hide();
	$('.buyerPP').attr("disabled", false);
  }
});
$("#req_investment_max" ).keyup(function() {
	
		var MinVal=$('#req_investment_min').val();
		
		var unit=$('#req_investment_min_price_unit').val();
		
		if(unit=='THOUSANDS')
		final_val='000';
	if(unit=='LACS')
		final_val='00000';
	if(unit=='CRORES')
		final_val='0000000';
	if(unit=='MILLIONS')
		final_val='000000';
	if(unit=='BILLIONS')
		final_val='000000000';
	
	var minfinalval=MinVal+final_val;
		
		
		
		var MaxVal=$('#req_investment_max').val();
		
		
		var unit2=$('#req_investment_max_price_unit').val();
		
	if(unit2=='THOUSANDS')
		final_val2='000';
	if(unit2=='LACS')
		final_val2='00000';
	if(unit2=='CRORES')
		final_val2='0000000';
	if(unit2=='MILLIONS')
		final_val2='000000';
	if(unit2=='BILLIONS')
		final_val2='000000000';
	
	var maxfinalval=MaxVal+final_val2;
		
		
  if(parseInt(minfinalval)>parseInt(maxfinalval)){
      $('#errorMsgREQ').show(); 
	 $('.buyerPP').attr("disabled", 'disabled');
	  
  }
 
  else{
    $('#errorMsgREQ').hide();
	$('.buyerPP').attr("disabled", false);
  }
});


$("#req_investment_min_price_unit" ).change(function() {
	
		var MinVal=$('#req_investment_min').val();
		
		var unit=$('#req_investment_min_price_unit').val();
		
		if(unit=='THOUSANDS')
		final_val='000';
	if(unit=='LACS')
		final_val='00000';
	if(unit=='CRORES')
		final_val='0000000';
	if(unit=='MILLIONS')
		final_val='000000';
	if(unit=='BILLIONS')
		final_val='000000000';
	
	var minfinalval=MinVal+final_val;
		
		
		
		var MaxVal=$('#req_investment_max').val();
		
		
		var unit2=$('#req_investment_max_price_unit').val();
		
	if(unit2=='THOUSANDS')
		final_val2='000';
	if(unit2=='LACS')
		final_val2='00000';
	if(unit2=='CRORES')
		final_val2='0000000';
	if(unit2=='MILLIONS')
		final_val2='000000';
	if(unit2=='BILLIONS')
		final_val2='000000000';
	
	var maxfinalval=MaxVal+final_val2;
		
		
  if(parseInt(minfinalval)>parseInt(maxfinalval)){
      $('#errorMsgREQ').show(); 
	 $('.buyerPP').attr("disabled", 'disabled');
	  
  }
 
  else{
    $('#errorMsgREQ').hide();
	$('.buyerPP').attr("disabled", false);
  }
});

$("#req_investment_max_price_unit" ).change(function() {
	
		var MinVal=$('#req_investment_min').val();
		
		var unit=$('#req_investment_min_price_unit').val();
		
		if(unit=='THOUSANDS')
		final_val='000';
	if(unit=='LACS')
		final_val='00000';
	if(unit=='CRORES')
		final_val='0000000';
	if(unit=='MILLIONS')
		final_val='000000';
	if(unit=='BILLIONS')
		final_val='000000000';
	
	var minfinalval=MinVal+final_val;
		
		
		
		var MaxVal=$('#req_investment_max').val();
		
		
		var unit2=$('#req_investment_max_price_unit').val();
		
	if(unit2=='THOUSANDS')
		final_val2='000';
	if(unit2=='LACS')
		final_val2='00000';
	if(unit2=='CRORES')
		final_val2='0000000';
	if(unit2=='MILLIONS')
		final_val2='000000';
	if(unit2=='BILLIONS')
		final_val2='000000000';
	
	var maxfinalval=MaxVal+final_val2;
		
		
  if(parseInt(minfinalval)>parseInt(maxfinalval)){
      $('#errorMsgREQ').show(); 
	 $('.buyerPP').attr("disabled", 'disabled');
	  
  }
 
  else{
    $('#errorMsgREQ').hide();
	$('.buyerPP').attr("disabled", false);
  }
});

$(function() {
        $('#listing_category').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
 $(function() {
        $('#industry_preference').change(function() {
         
		 
			
        }).multipleSelect({
            width: '100%'
        });
    });

$(function() {
        $('#state1').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });	
$(function() {
        $('#state2').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
	
	$(function() {
        $('#industry_preference2').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });	
 </script>





</body>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog mt160" role="document">
  <div class="modal-content">
   <div class="modal-header "> 	  
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h5 class="modal-title" id="myModalLabel">Business deal login</h5>
   </div>
   <div class="modal-body popup-1">
    <div class="row">
     <div class="col-md-12 back-sf">
      <form action="validateCustomer" method="post" id="frm_login">
       <div class="col-sm-12 ">
        <div class="form-group">
         <label for="">User ID </label>
         <input type="text" class="form-control" placeholder="User id" id="userid" name="userid">
        </div>
       </div>
       <div class="col-sm-12 ">
        <div class="form-group">
         <label for="">Password </label>
         <input type="password" class="form-control" placeholder="Password" id="password" name="password">
        </div>
       </div>
       <div class="col-sm-5 mt5">
        <button type="submit" class="btn-ser">Submit</button>
       </div>
       <div class="col-sm-7 mt5">
        <a class="mt5" href="#">Forgot your password ?</a>
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<!-- Modal -->



</html>
