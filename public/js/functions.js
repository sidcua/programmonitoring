function ajaxPOST(url, data, response_callback, failed_callback){

	// if(typeof data === 'object'){
	// 	data._token = token;
	// }else{
	// 	data += '&_token='+token;
	// }

	$.ajax({
	    url: url,
		type: "POST",
		data: data,
		dataType: "json",
	    success: function(data){
			if(response_callback){
				response_callback(data);
			}
		},
		error: function(data){
            if(failed_callback != null) {
                failed_callback(data);
            }
        }
	});
}

function ajaxGET(url, data, response_callback, failed_callback){

	// if(typeof data === 'object'){
	// 	data._token = token;
	// }else{
	// 	data += '&_token='+token;
	// }

	$.ajax({
	    url: url,
		type: "GET",
		data: data,
		dataType: "json",
	    success: function(data){
			if(response_callback){
				response_callback(data);
			}
		},
		error: function(data){
            if(failed_callback != null) {
                failed_callback(data);
            }
        }
	});
}

function selectOffice(){
	var form = $("#select-office-form").serialize();
	ajaxPOST('/feedback/office/select', form, function(response){
		if (response){
			$("#feedback-container").load('/feedback/rate');
		} else if (response) {
			$("#feedback-container").load('/feedback/office');
		}
	})
}

function submitRate(){
	var form = $("#rate-form").serialize();
	
	ajaxPOST('/feedback/submit', form, function(response){
		console.log(response)
		$("#feedback-container").load('/feedback/success');
		setTimeout(function() {
			$("#feedback-container").load('/feedback/office');
		}, 4000)
	})
}