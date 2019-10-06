<?php require_once("includes/config.php"); ?>
<?php include_once("includes/sessions.php"); ?>
<?php include_once("includes/dbconnection.php"); ?>
<?php
$message = '';
if (isset($_SESSION['username'])) {
		//logged in
		header("Location: aurashopadmin.php");
		exit;
	} else {
		//Not logged in
		//echo '<meta http-equiv="refresh" content="0;url=adminlogin.php">';
	}

//This area checks for username 
if (isset($_POST['submit'])) {
	//perform validations of the form data
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$hashed_password = sha1($password);
	$query = "SELECT * ";
	$query .= "FROM users ";
	$query .= "WHERE username = '$username' ";
	$query .= "AND hashed_password = '$hashed_password' ";

	$Result = mysql_query($query);

	 
	if (mysql_num_rows($Result) == 1) {
		$found_user = mysql_fetch_array($Result);
		
		//storing session variables
		$_SESSION['user_id'] = $found_user['id'];
		$_SESSION['username'] = $found_user['username'];
		header("Location: aurashopadmin.php");
	} else {
		$message = "<strong>Username and Password combination was incorrect. Please make sure the caps lock key is off and try again!</strong>";
		$username = "";
		$password = "";
		}
} else {
		$username = "";
		$password = "";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aura Shop Admin Login</title>
</head>

<body>

<table width="770" border="0" align="center" cellpadding="3" cellspacing="3">
  <tr>
    <td><p>
<?php echo $message; ?>
<form action="adminlogin.php" method="post">
                <div align="left">Username: 
                  <input name="username" type="text" id="username" size="30" maxlength="30" value="<?php echo htmlentities($username); ?>" />
                  <br />
                  <br />
  				Password: 
  				<input name="password" type="password" id="password" size="30" maxlength="30" value="<?php echo htmlentities($password); ?>" />
  				</p>
                <br />
                <br />
                <center><input type="submit" name="submit" id="login" value="Login" />
                  <br />
                </center>
                </div>
</form>
</p></td>
  </tr>
</table>
</body>
</html>
