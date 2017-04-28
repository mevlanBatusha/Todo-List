$(document).ready(function(){

	/*  This part is not finished */
	var add = $('#add');
	var complete = $('#complete');
	var uncomplete = $('#uncomplete');
	var del = $('#deleteData');

	setTimeout(function(){
		//getData();
	},3000);

	// call registerData: function to send data to db
	add.click(function(){

		var data = {
			'type': 'register',
			'method' : "POST",
			'url' : 'task/',
			'sdata' : {
				'_token': $('input[name=_token]').val(),
				'name' : $('#item').val()
			}
		};
		ajaxRequest(data);

	});

	complete.click(function(){
		var id = $('#confId').val();

		var data = {
			'type': 'complete',
			'method' : "POST",
			'url' : 'task/confirm/',
			'sdata' : {
				'_token': $('input[name=_token]').val(),
				'id' : id	
			}
		};

		ajaxRequest(data);

	});

	uncomplete.click(function(){
		var id = $('#unconfId').val();

		var data = {
			'type': 'uncomplete',
			'method' : "POST",
			'url' : 'task/unconfirm/', 
			'sdata' : {
				'_token': $('input[name=_token]').val(),
				'id' :id
			}
		};
		ajaxRequest(data);
	});

	del.click(function(){

		var id = $('#delId').val();

		var data = {
			'type' : 'deleted',
			'method' : 'post',
			'url' : 'task/', 
			'sdata' : {
				'_token': $('input[name=_token]').val(),
				'id' : id
			}
		};

		ajaxRequest(data);

	});


});
