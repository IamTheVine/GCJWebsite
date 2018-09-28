
<?php

	$v_fname= $_POST['inputfirstname'];
	$v_lname= $_POST['inputlastname'];
	$v_email = $_POST['inputemail'] ;
	$v_phone = $_POST['inputphone'] ;
	$v_message = $_POST['inputmessage'];


	$email_to = "erniebprincipe@yahoo.com.au" ;  // Send to email address
	$email_from= 'Gospel_Church_of_Jesus@GCJ.org.au' ;  // From email address mask

	$email_subject = 'New GCJ website form submission - ' .$v_email ;

	$email_body= 'User Name: ' . $v_fname . " " . $v_lname . "\r\n" .
					'User Email: ' .$v_email. "\r\n" .
					'Phone: ' . $v_phone . "\r\n" .
					'Message: ' . $v_message ;
	
	$email_headers = "From: " . $email_from . "\r\n" .
					"cc: dong.sarmiento@gcj.org.au \r\n" ;

	mail($email_to, $email_subject, $email_body, $email_headers);


	header("Location: index.html");

?>

