$(window).load(function(){
	
	//alert("Hello");

	var URL = window.location.href;
	//alert(URL);
	var str = URL.split('#')[1]; 
	//alert(str);
	/*if(str[8]=='businessprofile'){
		navigateToTab('businessprofile')
	}*/	
	if(str=='Packagedetails'){
		navigateToTab('Packagedetails');
	}else{
		
		navigateToTab('basicinformation');
	}
	

	var base_url = $('#base_url').val();
	//alert("BTN CLICKED ["+event.target+"]");
	$('#btn_up').click(function(){
		//console.log(JSON.stringify(activeTab.data('id')));
		callAjax( base_url+"seller_edit/seller_up", $('#seller_up').serialize(), "JSON", onSuccess, onError );
	});

	$('#btn_bi').click(function(){
		callAjax( base_url+"seller_edit/seller_binfo", $('#seller_binfo').serialize(), "JSON", onSuccess, onError );
	});
	

	$('#btn_bi3').click(function(){
	
	
	//alert("hello");
	
	var dataval= $('#seller_businfo').serialize();
	
	var base_url = $('#base_url').val();
		
	$.ajax({
	type: "POST",
	dataType: "json",
	url: base_url+"seller_edit/seller_binfo",
	data:dataval,
	success: function(data) {
		//alert(data);
	if(data== 'true'){
		alert('Data updated successfully.');
		
		//alert(data.businessdescription);
		
		 navigateToTab('businessdescription');
	}else{
		//alert("success but failed");
		alert("Oops! Sorry unable to update details. Please try again.");
	}

	}
	});	
		
});
});
	
	$('#btn_bd').click(function(){
	
	
	//alert("hello");
	
	var dataval= $('#seller_bdescription').serialize();
	
		var base_url = $('#base_url').val();
		
	$.ajax({
	type: "POST",
	dataType: "json",
	url: base_url+"seller_edit/seller_bd",
	data:dataval,
	success: function(data) {
		//alert(data);
	if(data== 'true'){
		alert('Data updated successfully.');
		
		 navigateToTab('additionaldetails');
	}else{
		//alert("success but failed");
		alert("Oops! Sorry unable to update details. Please try again.");
	}

	}
	});	
		
});	
	
	$('#btn_ad').click(function(){
	
	
	//alert("hello");
	
	var dataval= $('#seller_adetails').serialize();
	
		var base_url = $('#base_url').val();
		
	$.ajax({
	type: "POST",
	dataType: "json",
	url: base_url+"seller_edit/seller_adetails",
	data:dataval,
	success: function(data) {
		//alert(data);
	if(data== 'true'){
		alert('Data updated successfully.');
		
		 navigateToTab('Uploads');
	}else{
		//alert("success but failed");
		alert("Oops! Sorry unable to update details. Please try again.");
	}

	}
	});	
		
});	
	

	
	$('#btn_upload').click(function(){
	
	
	//alert("hello");
	
	var dataval= $('#seller_upload').serialize();
	
		var base_url = $('#base_url').val();
		
	$.ajax({
	type: "POST",
	dataType: "json",
	url: base_url+"seller_edit/seller_upload",
	data:dataval,
	success: function(data) {
		//alert(data);
	if(data== 'true'){
		alert('Data updated successfully.');
		
		 navigateToTab('Packagedetails');
	}else{
		//alert("success but failed");
		alert("Oops! Sorry unable to update details. Please try again.");
	}

	}
	});	
		
});	

$('#btn_as').click(function(){
	
	
	//alert("hello");
	
	var dataval= $('#seller_aservice').serialize();
	
		var base_url = $('#base_url').val();
		
	$.ajax({
	type: "POST",
	dataType: "json",
	url: base_url+"seller_edit/seller_aservice",
	data:dataval,
	success: function(data) {
		//alert(data);
	if(data.status== 'true'){
		alert('Data updated successfully.');
		
		 navigateToTab('Additionalservices');
	}else{
		//alert("success but failed");
		alert("Oops! Sorry unable to update details. Please try again.");
	}

	}
	});	
		
});			
$('#packcont').click(function(){
	
	 navigateToTab('Additionalservices');
	
});	
$('#packde').click(function(){
	
	 navigateToTab('Packagedetails');
	
});	
	


function setUserAccountSellBusinessPackage(form_id, packageid){
	//alert('abc');
	var base_url = $('#base_url').val();
	callAjax( base_url+"lb_userregister", {'form_id':form_id, 'spackage':packageid, 'frm_submit':'SB_PA_UP'}, "JSON", onSuccess, onError );
}

function onSuccess( data ){
	//alert(data.status);
	//alert('Data updated successfully.');
	if( data.status === 'true' || data.status === 'ok' ){
		alert('Data updated successfully.');
		navigateToTab(data.next_tab);
		location.reload(true);
	}else{
		//alert("success but failed");
		alert("Oops! Sorry unable to update details. Please try again.");
	}
}

function onError(){
	//alert("onerror");
	alert("Oops! Sorry unable to update details. Please try again.");
}




function navigateToTab( next_tab ){
	
	
	
		var nextTab   = $('.tab-pane[id="'+next_tab+'"]');
		
		//alert(next_tab);
		//alert(nextTab);
		
		var nextTabLi = $('ul.nav-tabs li[data-id="'+next_tab+'"]');
		var nextTabA  = $('ul.nav-tabs li[data-id="'+next_tab+'"] a');
		var prevTab   = $('.tab-pane.active');
		var prevTabLi = $('ul.nav-tabs li.active');
		var prevTabA  = $('ul.nav-tabs li.active a');


		$('#'+prevTab.attr('id')).removeClass('active');
		$(prevTabLi).removeClass('active');
		$(prevTabA).attr('aria-expanded','false');

		$('#'+nextTab.attr('id')).addClass('tab-pane active');
		
		 
		
		$(nextTabLi).addClass('active');
		$(nextTabA).attr('aria-expanded','true');
}
	
