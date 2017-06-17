function subscribe() {
	var data = {
	    email: $("#email").val()
	};

	$.ajax({
	    type: "POST",
	    url: "subscribe.php",
	    data: data,
	    success: function(){
	        //$('.success').fadeIn(1000);
	        alert("Gracias por suscribirte");
	    }
	});
}