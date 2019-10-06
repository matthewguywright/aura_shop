<?php  
	$email = $_POST['email'];
	//Email String-----------------------------------------	
	$msg =  "First Name: ".$_POST["fname"]."\n";
	$msg .= "Last Name: ".$_POST["lname"]."\n";
	$msg .= "E-mail: ".$_POST["email"]."\n";
	$msg .= "Phone: ".$_POST["phone"]."\n";
	$msg .= "Type: ".$_POST["type"]."\n";
	$msg .= "Comment: ".$_POST["comment"]."\n";
	
	//Mail Header Information
	$recipient = "aurashop@aol.com";
	$subject = "AURA SHOP WEBSITE SUBMISSION";
	$mailheaders = "From:  ".$_POST["email"]."\n";
	$mailheaders .= "Reply-To: ".$_POST["email"]."\n";

	//Send Mail
	mail($recipient, $subject, $msg, $mailheaders);
	print "<p>Thanks for your submission! We will be in contact with you shortly.</p>";
?>