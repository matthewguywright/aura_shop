<?php include_once("includes/sessions.php"); ?>
<?php require_once("includes/config.php"); ?>
<?php include_once("includes/dbconnection.php"); ?>
<?php
	//PRINTS TITLE OF PAGE FROM VARIABLE 
	$title = "Aurashop Crystals, Healing, Aura, Chakra, and the Metaphysical - Crystals"; 
	$nav = "crystals";
?>
<?php require_once("includes/top.php"); ?>
<div id="content_wrapper">
<?php require_once("includes/navbar.php"); ?>

<div id="Load">

<?php
	$id = $_GET['id'];
	require_once("crystals.php");
	$_SESSION['dd'] = "crystals";
?>
<?php
	switch($_SESSION['dd'])
	{
		case "crystals":
			$dd = "crystals";
		break;
		case "home":
			$dd = "home";
		break;
		case "aura":
			$dd = "aura";
		break;
		case "store":
			$dd = "store";
		break;
		case "healing":
			$dd = "healing";
		break;
		case "table":
			$dd = "table";
		break;
	}
?>       
</div><!--ENDS CONTENT_MAIN DIV-->    
</div><!--ENDS CONTENT_WRAPPER DIV-->
    
<?php require_once("includes/site_info.php"); ?>