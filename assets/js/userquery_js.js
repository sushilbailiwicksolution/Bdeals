function userQuery(base_url, e){
	var captcha = $("#captcha1").val();
	var captcha2 = $("#captcha2").val();
	
	var error1 = $("#error1").text();
	var error2 = $("#error2").text();
	var error3 = $("#error3").text();
	var error4 = $("#error4").text();
	var error5 = $("#error5").text();
	
		
	if ( $('#uq_name').val() == '' || $('#uq_email').val() == '' || $('#uq_city').val() == '' || $('#uq_contact').val() == '' || $('#uq_message').val() == '' ){
		e.preventDefault();
		//alert('Please fill all the fields');
		jQuery('#error6').html('Please fill all the fields');
		return false;
	}

	else if(captcha !== captcha2) {
		//alert('Please enter valid captcha value');
		jQuery('#error6').html(''); 
		jQuery('#error6').html('Please enter valid captcha value');
		return false;
	}else if((error1) != '' || (error2) != '' || (error3) != '' || (error4) != '' || (error5) != '' ){
		//alert('some error');
		return false;
	}	
	else{
		//alert('in else');
		jQuery('#error6').html(''); 
		callAjax( base_url+"/ajxuiq", $('#ajxuiq').serialize(), "JSON", displayResp, displayError );
		
	}
}


function displayResp( respData ){
	//$('#uqRes').text(respData.msg);
	//$('#ajxuiq').find(':input').each(function(){
	//	$(this).val('');
		//alert('Query Submitted Successfully');
			$('#ajxuiq').find(':input').each(function(){
			$('#uq_name').val('');
			$('#uq_contact').val('');
			$('#uq_city').val('');
			//$('#country_code').val();
			$('#uq_message').val('');
			$('#captcha1').val('');
			});	
			$("#uqRes").html("Query Has Been Submitted Successfully");
			jQuery("#uqRes").fadeIn("fast", function() { jQuery(this).delay(5000).fadeOut("slow"); });
			//sleep(5000);
			//$('#style-selector').animate({right: "-=320"},function(){
			//$('.btn-close').toggleClass("show");
			//$('#feedback').css('z-index','1000');
		//});						
		//jQuery("#finalMessage").html("");
		//jQuery("#finalMessageDisplay").fadeIn("fast", function() { jQuery(this).delay(30000).fadeOut("slow"); });
	//});
}


function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}

function displayError( errorData ){
	alert('Oops there is some problem, kindly try again');
	//$('#uqRes').text(errorData.msg);
	//$('#ajxuiq').find(':input').each(function(){
		//$(this).val('');
	//});
}
