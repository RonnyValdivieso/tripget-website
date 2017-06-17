<?php

$email = $_POST['email'];

if(isset($email) && !empty($email)) {
	$for 	 = $email;
	$from	 = "From: Tripget";
	$subject = "Subscriber";
	$message = "Gracias por suscribirte";
	
	mail($for, $subject, $message, $from);
} else {
	echo "Datos inválidos";
}

?>