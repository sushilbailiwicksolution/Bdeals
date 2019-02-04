function setUserSellBusinessPackage(form_id, packageid){
	
	var base_url = $('#base_url').val();
	
	$.ajax({
	type: "POST",
	
	url: base_url+"lb_userregister",
	
	data: { form_id: '' + form_id + '',spackage: '' + packageid + '',frm_submit: '' + 'sb_pa' + '' },
	
	success: function(data) {
		//alert(data);
	if(data== 'true'){
		alert('Data updated successfully.');
		
		location.reload(true);
	}else{
		//alert("success but failed");
		alert("Oops! Sorry unable to update details. Please try again.");
	}

	}
	});	
}


