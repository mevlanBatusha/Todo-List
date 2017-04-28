// register data to db
function ajaxRequest(data)
{
	$.ajax({
		type: data.method,
		url: data.url,
		data: data.sdata ,
		success: function(result){
			
			alert(result.errors);
		}
	});
}


