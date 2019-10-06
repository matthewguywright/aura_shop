<?php include_once("includes/sessions.php"); ?>
<?php require_once("includes/config.php"); ?>
<?php include_once("includes/dbconnection.php"); ?>
<?php
	if (!isset($_SESSION['username'])) {
		header("Location: adminlogin.php");
		exit;
	}
	
	$message = '';	
?>
<?php
//NEWS
	if (isset($_POST['submitnews']) && (!empty($_POST['content']))) { 
		$title = addslashes($_POST['title']);
		$author = addslashes($_POST['author']);
		$content = addslashes($_POST['content']);
		$date = date('ymdhis');
		$sql = "INSERT INTO news (title, author, date, content) VALUES ('$title','$author','$date','$content') ";
		$result = mysql_query($sql);		
		
		if ($result) {
			$message = 'The news story was successfully added!';
		}
	}

	$newsid = $_GET['newsid'];
	$sql = "DELETE FROM news WHERE news_id = '$newsid' ";
	$result = mysql_query($sql);
?>
<?php
//EVENTS
	if (isset($_POST['submitevent']) && (!empty($_POST['content']))) { 
		$title = addslashes($_POST['title']);
		$date = addslashes($_POST['date']);
		$content = addslashes($_POST['content']);
		$misc = addslashes($_POST['misc']);
		$sql = "INSERT INTO events (title, date, content, misc) VALUES ('$title','$date','$content','$misc') ";
		$result = mysql_query($sql);		
		
		if ($result) {
			$message = 'The event was successfully added!';
		}
	}
	

	
	$eventid = $_GET['eventid'];
	$sql = "DELETE FROM events WHERE event_id = '$eventid' ";
	$result = mysql_query($sql);
?>
<?php
//EMAIL CHECK
	if (isset($_POST['emailsubmit'])) {
	// Email address validation
	$emailPattern = "/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i";
	
		if (!preg_match($emailPattern, $_POST['email'])) {
     		$emailerror = "---A Valid Email Address is Required!---";
		} else {
			$email = $_POST['email'];
			$sql = "UPDATE contact_email SET email = '$email' ";
			$EmailResult = mysql_query($sql);
			$message = "Your Email Address has been changed!";
		}
	}
?>
<?php
//CREATE NEW USER
	if (isset($_POST['newusersubmit'])) {
		//REQUIRED FIELDS
		$required_fields = array('username', 'password');
		foreach($required_fields as $fieldname) {
		if (($_POST[$fieldname]) == NULL) {
			$Errors[] = $fieldname;
		}
	}
	
	if (isset($Errors)) {
		foreach ($Errors as $Value) {
			if (($Value) == 'username') {
				$message = "---Username and password are required!---";
			} elseif (($Value) == 'password') {
				$message = "---Username and password are required!---";
			}
			}
		}
	}
	
	if (isset($_POST['newusersubmit']) && (($Errors) == NULL) && (strlen($_POST['password']) >= 6)) {
		$submitusername = $_POST['username'];
		$submitpassword = $_POST['password'];
		$sql = "INSERT INTO users (username, hashed_password) VALUES ('$submitusername', SHA1('$submitpassword')) ";
		$result = mysql_query($sql);
		$message = "The new user was added!";
	} elseif (isset($_POST['newusersubmit']) && (($_POST['submitpassword']) == NULL)) {
		$message = "---The user was not added, username and password are required!---<br />---Password must contain atleast 6 characters!---";
	
	}
?>
<?php
//CHANGE PASSWORD CHECK FOR 6 CHARACTERS ATLEAST
	if (isset($_POST['submitpassword'])) {
		if ((strlen($_POST['changepw']) > 6)) {
		//SQL
		$password = $_POST['changepw'];
		$sql = "UPDATE users SET hashed_password = SHA1('$password') WHERE username = '$_SESSION[username]' ";
		$PwResult = mysql_query($sql); 
		//ECHO SUCCESS
		$message = "Your password has been successfully changed!";
		} else {
		$message = "---Password must contain atleast 6 characters, password was not changed!---";
		}
	}
?>
<?php
//Copyright Year
	if (isset($_POST['submityear'])) { 
		$year = addslashes($_POST['year']);
		$sql = "UPDATE copyright SET year = '$year' ";
		$result = mysql_query($sql);
		
		if ($result) {
			$message = 'The year was updated!';
		}
		
	}
?>
<?php
	//PRINTS TITLE OF PAGE FROM VARIABLE 
	$title = "Aura Shop Admin Page!"; 
	$nav = "admin";
?>
<?php require_once("includes/top2.php"); ?>
<div id="content_wrapper">
<?php require_once("includes/adminnavbar.php"); ?>
    
    	<div id="Load">
                <?php
					$id = $_GET['id'];
				
					switch ($id) {
					case "updated":
						$message = 'Your password was updated!';
					break;
					case "globals":
						$message = '';
						require_once("cms/globals.php");						
					break;
					case "news":
						$message = '';
						require_once("cms/news.php");						
					break;
					case "events":
						$message = '';
						require_once("cms/events.php");						
					break;
					default:
						print "<p class='red'>{$message}</p>"."<p>Choose an item from the menu to update. After entering information in all fields click on the submit button. If you have any problems, contact Matthew Wright at crazykaine5391@yahoo.com.</p>";
					}
				?>   
      	</div><!--ENDS LOAD DIV-->   
         
      </div><!--ENDS CONTENT_WRAPPER DIV-->
    
<?php require_once("includes/site_info.php"); ?>