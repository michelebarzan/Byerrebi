<?php

	$destinatario = "info@byerrebi.com";
	$nome=$_REQUEST['nome'];
	$mittente=$_REQUEST['email'];
	$oggetto=$_REQUEST['oggetto'];
	$messaggio=wordwrap($_REQUEST['messaggio'],70);
	
	/*$headers = "From: $mittente";

	mail($destinatario,$oggetto,$messaggio,$headers);
	
	echo "ok";*/
	
	/*require('lib/class.phpmailer.php');
	require('lib/banlog.php');
	require('lib/default.config.php');
	require('lib/inc.sanitize.php');
	require('lib/phpmailer-fe.php');
	require('lib/worxturing.php');
	
	$mail = new PHPMailer;

	//Enable SMTP debugging. 
	$mail->SMTPDebug = 3;                               
	//Set PHPMailer to use SMTP.
	$mail->isSMTP();            
	//Set SMTP host name                          
	$mail->Host = "smtp.gmail.com";
	//Set this to true if SMTP host requires authentication to send email
	$mail->SMTPAuth = true;                          
	//Provide username and password     
	$mail->Username = "michele.barzan@gmail.com";                 
	$mail->Password = "maddalena";                           
	//If SMTP requires TLS encryption then set it
	$mail->SMTPSecure = "tls";                           
	//Set TCP port to connect to 
	$mail->Port = 587;                                   

	$mail->From = "michele.barzan@gmail.com";
	$mail->FromName = "Full Name";

	$mail->addAddress("michele@servizioglobale.it", "Recepient Name");

	$mail->isHTML(true);

	$mail->Subject = "Subject Text";
	$mail->Body = "<i>Mail body in HTML</i>";
	$mail->AltBody = "This is the plain text version of the email content";

	
	if(!$mail->send()) 
	{
		echo "Mailer Error: " . $mail->ErrorInfo;
	} 
	else 
	{
		echo "Message has been sent successfully";
	}*/
	echo "ok";

?>