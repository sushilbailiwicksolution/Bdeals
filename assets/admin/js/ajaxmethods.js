function callAjax( urlToCall, dataToSend, resultDataType, cbSuccess, cbFaile ){
	$.ajax({
		method: "POST",
		url: urlToCall,
		data: dataToSend,
		dataType: resultDataType,
		success: function(data, textStatus, jqXhr){
			cbSuccess(data);
		},
		error: function(jqXhr, textStatus, errorThrown){
			cbFaile(errorThrown);
		}
	});
}
