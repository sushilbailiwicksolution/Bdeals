$(document).ready(function(event){

	var URL = window.location.href;
	//alert(URL);
	var str = URL.split("/");
	//alert(str[8]);
	if(str[8]=='Packagedetails'){
		navigateToTab('PropertyInformation')
	}	
	var base_url = $('#base_url').val();
	
	//alert(base_url);
	
	//alert("BTN CLICKED ["+event.target+"]");
	$('#btn_pro').click(function(){
		//console.log(JSON.stringify(activeTab.data('id')));
		callAjax( base_url+"re_edit_form/su_binfo", $('#su_binfo').serialize(), "JSON", onSuccess, onError );
		
	//alert("hello");
	});

	$('#tendesc').click(function(){
		callAjax( base_url+"re_edit_form/su_ten", $('#su_ten').serialize(), "JSON", onSuccess, onError );
	});

	$('#tende').click(function(){
		callAjax( base_url+"re_edit_form/su_det", $('#su_det').serialize(), "JSON", onSuccess, onError );
	});

	
});

function onSuccess( data ){
	//alert(data.status);
	//alert('Data updated successfully.');
	if( data.status === 'true' || data.status === 'ok' ){
		alert('Data updated successfully.');
		navigateToTab(data.next_tab);
		//location.reload(true);
	}else{
		//alert("success but failed");
		alert("Oops! Sorry unable to update details. Please try again1.");
	}
}


function onError(){
	alert("onerror");
	alert("Oops! Sorry unable to update details. Please try again2.");
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
