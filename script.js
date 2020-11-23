$(function() {
	$( "#datep" ).datepicker();
	});
$( document ).ready(function() {
		$("#send").click(
			$.ajax({
				url: 'calc.php', 
				type:"POST", 
				dataType: "html", 
				data: $("#calc").serialize(),
				success: function(response) {
					$('#lb').html(data);
				},
				error:  function(xhr, str){ 
					alert('Возникла ошибка: ' + xhr.responseCode);
					 }
			 })
		);
	});