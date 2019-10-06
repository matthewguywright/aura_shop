<?php require_once("includes/sessions.php"); ?>
<?php
if (isset($_SESSION['username'])) {
		//logged in
	} else {
		//Not logged in
		//echo '<meta http-equiv="refresh" content="0;url=adminlogin.php">';
		header("Location: adminlogin.php");
		exit;
	}
?>
<?php
	require_once("includes/dbconnection.php"); ?>
<?php
	
	$id = $_GET['id'];
	
	if ($_GET['id'] == $_SESSION['user_id']) {
		header("Location: aurashopadmin.php");
		exit;
	} else {
		$sql = "DELETE FROM users WHERE user_id='$id' ";
		$ok = mysql_query($sql);
		if ($ok) {
			header("Location: aurashopadmin.php");
		} else {
			print "<h2>The user was not deleted!</h2>";
		}
	print "<a href=\"aurashopadmin.php\">Back to Control Panel</a>";
	
	}
?>