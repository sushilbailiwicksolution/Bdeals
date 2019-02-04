$(document).ready(function(){

	//alert('sssssssssssssssssssssssss');	
	var URL = window.location.href;
	//alert(URL);
	var str = URL.split("/");
	//alert(str[9]);
	if(str[9]=='Packagedetails'){
		navigateToTab('Packagedetails')
	}	
	var base_url = $('#base_url').val();
	

	$('#btn_up').click(function(){
		//console.log(JSON.stringify(activeTab.data('id')));
		callAjax( base_url+"admin/seller_edit/seller_up", $('#seller_up').serialize(), "JSON", onSuccess, onError );
	});

	$('#btn_bi').click(function(){
		callAjax( base_url+"admin/seller_edit/seller_binfo", $('#seller_binfo').serialize(), "JSON", onSuccess, onError );
	});

	$('#btn_bd').click(function(){
		callAjax( base_url+"admin/seller_edit/seller_bd", $('#seller_bdescription').serialize(), "JSON", onSuccess, onError );
	});

	$('#btn_ad').click(function(){
		callAjax( base_url+"admin/seller_edit/seller_adetails", $('#seller_adetails').serialize(), "JSON", onSuccess, onError );
	});
	
	$('#btn_upload').click(function(){
		callAjax( base_url+"admin/seller_edit/seller_upload", $('#seller_upload').serialize(), "JSON", onSuccess, onError );
	});
	
	$('#btn_as').click(function(){
		callAjax( base_url+"admin/seller_edit/seller_aservice", $('#seller_aservice').serialize(), "JSON", onSuccess, onError );
	});	
});

function setUserSellBusinessPackage(form_id, packageid){
	callAjax( "lb_userregister", {'form_id':form_id, 'spackage':packageid, 'frm_submit':'sb_pa'}, "JSON", onSuccess, onError );
}

function setUserAccountSellBusinessPackage(form_id, packageid,customerId){
	//alert('abc');
	var base_url = $('#base_url').val();
	//alert(base_url);
	callAjax( base_url+"admin/upload", {'form_id':form_id, 'spackage':packageid,'customer_id':customerId, 'frm_submit':'SB_PA_UP'}, "JSON", onSuccess, onError );
}

function onSuccess( data ){
	//alert('yes success');
	if( data.status === 'true' || data.status === 'ok' ){
		//alert(data.next_tab);
		alert('Data updated successfully.');
		navigateToTab(data.next_tab);
	}else{
		//alert('success');
		alert("Oops! Sorry unable to update details. Please try again.");
	}
}

function onError(){
	//alert('error');
	alert("Oops! Sorry unable to update details. Please try again.");
}

	


function navigateToTab( next_tab ){
		//alert('in navigate tab '+next_tab);
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
