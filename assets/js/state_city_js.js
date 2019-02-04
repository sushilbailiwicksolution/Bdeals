function resetPriceUnit(target_price_unit,price_unit_value ){
	//alert(price_unit_value);
	$(target_price_unit).empty();
	//$(target_price_unit).append('<option value="">Select</option>');
	if(price_unit_value=='INR'){
		$(target_price_unit).append('<option value="THOUSANDS">THOUSANDS</option>');
		$(target_price_unit).append('<option value="LAKHS">LAKHS</option>');
		$(target_price_unit).append('<option value="CRORES">CRORES</option>');
	}else{
		$(target_price_unit).append('<option value="THOUSANDS">THOUSANDS</option>');
		$(target_price_unit).append('<option value="MILLIONS">MILLIONS</option>');
		$(target_price_unit).append('<option value="BILLIONS">BILLIONS</option>');
	}	
	
}



function getChangeStates1( base_url, cid ){
	callAjax( base_url+"/ajxsfc", {'contid':cid}, "JSON", resetStates1, noActionWithErrorState );
}




function resetStates1( statesDetail ){
//alert('hii');
	$('#state1').empty();
	//$('#state1').append('<option value="1" selected>Select</option>');
	
	$.each( statesDetail, function(i, data){
		$('#state1').append("<option value="+data.id+">"+data.state_name+"</option>");
		//$('#state').append('<li class="selected" style="false"><label class=""><input type="checkbox" data-name="selectItemstate"value='+data.id+'><span>'+data.state_name+'</span></label></li>');
	}); 
 $('#state1').multipleSelect();
// alert('hii');
	//$('#city').empty();
	//$('#city').append("<option value=''>Select</option>");
}

function getChangeStates11( base_url, cid ){
	callAjax( base_url+"/ajxsfc", {'contid':cid}, "JSON", resetStates11, noActionWithErrorState );
}




function resetStates11( statesDetail ){
//alert('hii');
	$('#state11').empty();
	//$('#state1').append('<option value="1" selected>Select</option>');
	
	$.each( statesDetail, function(i, data){
		$('#state11').append("<option value="+data.id+">"+data.state_name+"</option>");
		//$('#state').append('<li class="selected" style="false"><label class=""><input type="checkbox" data-name="selectItemstate"value='+data.id+'><span>'+data.state_name+'</span></label></li>');
	}); 
 $('#state11').multipleSelect();
// alert('hii');
	//$('#city').empty();
	//$('#city').append("<option value=''>Select</option>");
}



function getChangeStates( base_url, cid ){
	
	
	callAjax( base_url+"/ajxsfc", {'contid':cid}, "JSON", resetStates, noActionWithErrorState );
}

function getChangeRStates( base_url, rid ){
	
	
	callAjax( base_url+"/ajxsfrc", {'rid':rid}, "JSON", resetRegionStates, noActionWithErrorRegion );
}
function getChangeCat( base_url, rid ){
	
	
	callAjax( base_url+"/ajxsfcat", {'rid':rid}, "JSON", resetCatSubcat, noActionWithErrorCat );
}

function getChangeCities( base_url, sid ){
	
	
	callAjax( base_url+"/ajxcfs", {'stid': sid}, "JSON", resetCities, noActionWithErrorCity );
}

function resetCatSubcat( statesDetail ){
 
	$('#subcategory').empty();
	$('#subcategory').append('<option value="">Select</option>');
	
	$.each( statesDetail, function(i, data){
		$('#subcategory').append("<option value="+data.sub_id+">"+data.sub_sector_name+"</option>");
		//$('#state').append('<li class="selected" style="false"><label class=""><input type="checkbox" data-name="selectItemstate"value='+data.id+'><span>'+data.state_name+'</span></label></li>');
	}); 
	$('#subcategory').append("<option value='Other'>Other</option>");

}
function noActionWithErrorCat( errorLog ){
	$('#subcategory').empty();
	$('#subcategory').append('<option value="">Select</option>');
	
	$.each( errorLog, function(i, data){
		$('#subcategory').append("<option value="+data.id+">"+data.sub_sector_name+"</option>");
		
	    
	});
	$('#subcategory').append("<option value='Other'>Other</option>");
	
}

function resetRegionStates( statesDetail ){
 
	$('#state').empty();
	$('#state').append('<option value="">Select</option>');
	
	$.each( statesDetail, function(i, data){
		$('#state').append("<option value="+data.id+">"+data.state_name+"</option>");
		//$('#state').append('<li class="selected" style="false"><label class=""><input type="checkbox" data-name="selectItemstate"value='+data.id+'><span>'+data.state_name+'</span></label></li>');
	}); 
	$('#state').append("<option value='Other'>Other</option>");
 //$('#state').multipleSelect();
 //alert('hii');
	$('#city').empty();
	$('#city').append("<option value=''>Select</option>");
}

function resetStates( statesDetail ){
//alert('hii');
	$('#state').empty();
	$('#state').append('<option value="">Select</option>');
	
	$.each( statesDetail, function(i, data){
		$('#state').append("<option value="+data.id+">"+data.state_name+"</option>");
		//$('#state').append('<li class="selected" style="false"><label class=""><input type="checkbox" data-name="selectItemstate"value='+data.id+'><span>'+data.state_name+'</span></label></li>');
	}); 
 //$('#state').multipleSelect();
 //alert('hii');
	$('#city').empty();
	$('#city').append("<option value=''>Select</option>");
}


function noActionWithErrorState( errorLog ){
	$('#state').empty();
	$.each( errorLog, function(i, data){
		$('#state').append("<option value="+data.id+">"+data.state_name+"</option>");
	});
	$('#city').empty();
	$('#city').append("<option value=''>Select</option>");
}
function noActionWithErrorRegion( errorLog ){
	$('#state2').empty();
	$.each( errorLog, function(i, data){
		$('#state2').append("<option value="+data.id+">"+data.state_name+"</option>");
	});
	$('#city').empty();
	$('#city').append("<option value=''>Select</option>");
}

function resetCities( citiesDetail ){
	
	//alert("hello");
	$('#city').empty();
	$('#city').append('<option value="">Select</option>');
	$.each( citiesDetail, function(i, data){
		$('#city').append("<option value="+data.id+">"+data.city_name+"</option>");
		
	});
	$('#city').append("<option value='Other'>Other</option>");
}

/*function resetRegions( regionsDetail ){
	$('#region').empty();
	$('#region').append('<option value="">Select</option>');
	$.each( regionsDetail, function(i, data){
		$('#region').append("<option value="+data.id+">"+data.region_name+"</option>");
	});
}*/

function noActionWithErrorCity( errorLog ){
	$('#city').empty();
	$.each( errorLog, function(i, data){
		$('#city').append("<option value="+data.id+">"+data.city_name+"</option>");
	});
}


 
 