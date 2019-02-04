$(document).ready(function(event){

	var URL = window.location.href;
	//alert(URL);
	var str = URL.split("/");
	//alert(str[6]);
	if(str[6]=='Packagedetails'){
		navigateToTab('Packagedetails')
	}	
	var base_url = $('#base_url').val();
	//alert("BTN CLICKED ["+event.target+"]");
	$('#btn_up').click(function(){
		//console.log(JSON.stringify(activeTab.data('id')));
		callAjax( base_url+"seller_edit_jv/seller_up", $('#seller_up').serialize(), "JSON", onSuccess, onError );
	});

	$('#btn_bi').click(function(){
		callAjax( base_url+"seller_edit_jv/seller_binfo", $('#seller_binfo').serialize(), "JSON", onSuccess, onError );
	});

	$('#btn_bd').click(function(){
		callAjax( base_url+"seller_edit_jv/seller_bd", $('#seller_bdescription').serialize(), "JSON", onSuccess, onError );
	});

	$('#btn_ad').click(function(){
		callAjax( base_url+"seller_edit_jv/seller_adetails", $('#seller_adetails').serialize(), "JSON", onSuccess, onError );
	});
	
	$('#btn_jv').click(function(){
		callAjax( base_url+"seller_edit_jv/jv_details", $('#jv_details').serialize(), "JSON", onSuccess, onError );
	});

	$('#btn_upload').click(function(){
		callAjax( base_url+"seller_edit_jv/seller_upload", $('#seller_upload').serialize(), "JSON", onSuccess, onError );
	});

	$('#btn_as').click(function(){
		callAjax( base_url+"seller_edit_jv/seller_aservice", $('#seller_aservice').serialize(), "JSON", onSuccess, onError );
	});
	
});

$('#btn_aservice').click(function(){
	
	
	//alert("hello");
	
	var dataval= $('#seller_aservice').serialize();
	
	var base_url = $('#base_url').val();
		
	$.ajax({
	type: "POST",
	dataType: "json",
	url: base_url+"seller_edit_jv/seller_aservice",
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
$('#uploadjv').click(function(){
	
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
/*
function onSuccess( data ){
	//alert(data.next_tab);
	if( data.status === 'true' || data.status === 'ok' ){
		alert('Data updated successfully.');
		navigateToTab(data.next_tab);
	}else{
		//alert("success but failed");
		alert("Oops! Sorry unable to update details. Please try again.");
	}
}*/

function onError(){
	//alert("onerror");
	alert("Oops! Sorry unable to update details. Please try again.");
}




function navigateToTab( next_tab ){
		var nextTab   = $('.tab-pane[id="'+next_tab+'"]');
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
