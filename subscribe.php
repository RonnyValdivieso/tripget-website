<?php

$email = $_POST['email'];

if(isset($email) && !empty($email)) {
	$for 	 = "rdvaldiv@gmail.com";
	$from	 = "From: Tripget";
	$subject = "Subscriber";
	$message = $email;
	mail($for, $subject, $message, $from);
} else {
	echo "Datos inválidos";
}

?>