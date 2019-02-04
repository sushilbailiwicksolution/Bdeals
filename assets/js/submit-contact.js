function uncheckOther( type, position, min, max ){
	//alert("hi");
	for( var i = min; i <= max; i++ ){
		if( i !== position ){
			if( type == "place" ){
				$('#p'+i).prop('checked', false);
			}else{
				$('#t'+i).prop('checked', false);
			}
		}
	}
}
function setContactDetails( type ){
        //alert('name:['+$('#Name').val()+']');
        var base_url = $('#base_url').val();
	if( type !== "Outside Office" ){
        	callAjax( base_url+"set-contact-us", 'type='+type+'&name='+$('#Name').val()+'&email='+$('#Email').val()+'&mobile='+$('#Mobile').val()+'&address='+$('#Address').val()+'&city='+$('#City').val()+'&purpose='+$('#Purpose').val()+'&time='+$('#time').val()+'&date='+$('#date').val()+'&place=&tax=&message='+$('#Message').val(), "JSON", onSuccess, onError );
	}else{
		callAjax( base_url+"set-contact-us", 'type='+type+'&name='+$('#Name').val()+'&email='+$('#Email').val()+'&mobile='+$('#Mobile').val()+'&address='+$('#Address').val()+'&city='+$('#City').val()+'&purpose='+$('#Purpose').val()+'&time='+$('#time').val()+'&date='+$('#date').val()+'&place='+$('.place')+'&tax='+$('.tax')+'&message='+$('#Message').val(), "JSON", onSuccess, onError );
	}
	location.reload(true);
}

function onSuccess( data ){
        //alert('Data status is ['+data.status+']');
        //alert("Package changed successfully");
        if( data.status === "ok" ){
                //location.reload(true);
		alert("We have submitted your query.Team will back you soon.");
        }else{
                alert("Oops! Sorry unable to submit your contact request. Please try again.");
        }
}

function onError(){
	//alert("error");
        alert("Oops! Sorry unable to submit your contact request. Please try again.");
}
