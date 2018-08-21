


console.log('llego al js');


$("#btlog").on('click', function(evt){
	login();
});


console.log($('#user').val());
function login()
{
//	alert('ddd');

	jQuery.ajax({
		url:"/analisis/login.php",
		type:"POST",
		data:{"name":$("#user").val(), "pass":$("#pass").val()},
		success: function(res)
		{
			//window.location = '/analisis/login.php';
			console.log(res);
			if(res == 'true')
			{
				alert('Usuario si existe');
			}
			else{
				alert('Usuario No existe ;<)');	
			}
		},
		error: function(error)
		{
			console.log(error);
		}
	});
}