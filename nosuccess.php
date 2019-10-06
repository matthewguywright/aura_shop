<?php include_once("includes/sessions.php"); ?>
<?php require_once("includes/config.php"); ?>
<?php include_once("includes/dbconnection.php"); ?>
<?php
	$error = '';
	if (isset($_POST['submit'])) {
	// Email address validation
	$emailPattern = "/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i";
	
		if (!preg_match($emailPattern, $_POST['email'])) {
		 $error = "A Valid Email Address is Required";
		}
	}
?>
<?php
	if (empty($error) && isset($_POST['submit'])) {
		$email = $_POST['email'];
		//Email String-----------------------------------------	
		$msg =  "First Name: ".$_POST["fname"]."\n";
		$msg .= "Last Name: ".$_POST["lname"]."\n";
		$msg .= "E-mail: ".$_POST["email"]."\n";
		$msg .= "Phone: ".$_POST["phone"]."\n";
		$msg .= "Address: ".$_POST["address"]."\n";
		$msg .= "Apartment #: ".$_POST["apt"]."\n";
		$msg .= "City: ".$_POST["city"]."\n";
		$msg .= "State: ".$_POST["state"]."\n";
		$msg .= "Zip: ".$_POST["zip"]."\n";
		$msg .= "Type: ".$_POST["type"]."\n";
		$msg .= "Comment: ".$_POST["comment"]."\n";

		//PULL EMAIL FROM DB------------------------------------
		$sql = "SELECT * FROM contact_email";
		$result = mysql_query($sql);
		$row = mysql_fetch_assoc($result);
		//Mail Header Information
		$recipient = "$row[email]";
		$subject = "AURA SHOP WEBSITE SUBMISSION";
		$mailheaders = "From:  ".$_POST["email"]."\n";
		$mailheaders .= "Reply-To: ".$_POST["email"]."\n";

		//Send Mail
		mail($recipient, $subject, $msg, $mailheaders);
		
		if (mail) {
			header("Location: success.php");
			exit;
		} else {
			header("Location: nosuccess.php");
			exit;
		}
	} 
?>
<?php
	//PRINTS TITLE OF PAGE FROM VARIABLE 
	$title = "Aurashop Crystals, Healing, Aura, Chakra, and the Metaphysical"; 
	$nav = "home";
?>
<?php require_once("includes/top.php"); ?>
<div id="content_wrapper">
<?php require_once("includes/navbar.php"); ?>

    <div id="Load">
       <h2>Contact Us</h2>
<p>Your e-mail was NOT submitted.  Please try again at a later time.  If the problem persists contact the <a href="mailto: aurashop@aol.com">webmaster</a>.</p> 
        	
    </div><!--ENDS CONTENT_MAIN DIV-->    
      </div><!--ENDS CONTENT_WRAPPER DIV-->
    
<?php require_once("includes/site_info.php"); ?>