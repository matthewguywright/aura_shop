<?php include_once("includes/sessions.php"); ?>
<?php require_once("includes/config.php"); ?>
<?php include_once("includes/dbconnection.php"); ?>
<?php
	//PRINTS TITLE OF PAGE FROM VARIABLE 
	$title = "Aurashop Crystals, Healing, Aura, Chakra, and the Metaphysical"; 
	$nav = "home";
?>
<?php require_once("includes/top.php"); ?>
<div id="content_wrapper">
<?php require_once("includes/navbar.php"); ?>

<div id="Load">

<?php
	$p = $_GET['p'];
	$id = $_GET['id'];
	switch($p)
	{
		//HOME
		case "newsUpdates":
			require_once("newsupdates.php");
			$_SESSION['dd'] = "home";
		break;
		case "aboutus":
			require_once("aboutus.php");
			$_SESSION['dd'] = "home";
		break;		
		case "events":
			require_once("events.php");
			$_SESSION['dd'] = "home";
		break;
		case "contactus":
			require_once("contactus.php");
			$_SESSION['dd'] = "home";
		break;
				
		//AURA CHAKRA		
		case "aura":
			require_once("aura.php");
			$_SESSION['dd'] = "aura";
		break;		
		case "chakra":
			require_once("chakraoverview.php");
			$_SESSION['dd'] = "aura";
		break;		
		case "aroma":
			require_once("aromatherapy.php");
			$_SESSION['dd'] = "aura";
		break;		
		case "mapping":
			require_once("colormapping.php");
			$_SESSION['dd'] = "aura";
		break;		
		case "food":
			require_once("colorfood.php");
			$_SESSION['dd'] = "aura";
		break;		
		case "body":
			require_once("colorbody.php");
			$_SESSION['dd'] = "aura";
		break;
		case "spirit":
			require_once("colorspirit.php");
			$_SESSION['dd'] = "aura";
		break;		
		case "theory":
			require_once("colortheory.php");
			$_SESSION['dd'] = "aura";
		break;		
		case "soundTherapy":
			require_once("colorsound.php");
			$_SESSION['dd'] = "aura";
		break;		
		case "videoStation":
			require_once("videostation.php");
			$_SESSION['dd'] = "aura";
		break;		
		case "chakraReadings":
			require_once("chakrareadings.php");
			$_SESSION['dd'] = "aura";
		break;		
		
		//STORE
		case "crystals":
			require_once("storecrystals.php");
			$_SESSION['dd'] = "store";
		break;		
		case "jewelry":
			require_once("goddessjewelry.php");
			$_SESSION['dd'] = "store";
		break;		
		case "books":
			require_once("bookscdsdvds.php");
			$_SESSION['dd'] = "store";
		break;		
		case "goddessWear":
			require_once("goddesswear.php");
			$_SESSION['dd'] = "store";
		break;		
		case "essences":
			require_once("storecoloress.php");
			$_SESSION['dd'] = "store";
		break;		
		case "artHome":
			require_once("arthome.php");
			$_SESSION['dd'] = "store";
		break;		
		case "angelsFairies":
			require_once("angelsfairies.php");
			$_SESSION['dd'] = "store";
		break;
		case "kids":
			require_once("kidsworld.php");
			$_SESSION['dd'] = "store";
		break;
		
		//PRACTITIONERS
		case "readings":
			require_once("readings.php");
			$_SESSION['dd'] = "healing";
		break;
		case "nicole":
			require_once("nicole.php");
			$_SESSION['dd'] = "healing";
		break;
		case "joanna":
			require_once("joanna.php");
			$_SESSION['dd'] = "healing";
		break;
		case "sidney":
			require_once("sidney.php");
			$_SESSION['dd'] = "healing";
		break;
		case "anne":
			require_once("annemarie.php");
			$_SESSION['dd'] = "healing";
		break;
		case "ryan":
			require_once("ryan.php");
			$_SESSION['dd'] = "healing";
		break;
		case "ascension":
			require_once("roomascension.php");
			$_SESSION['dd'] = "healing";
		break;
		case "fengShui":
			require_once("fengshui.php");
			$_SESSION['dd'] = "healing";
		break;
		case "lightTable":
			require_once("lighttable.php");
			$_SESSION['dd'] = "healing";
		break;
		
		//ENERGY SERVICES
		case "medRoom":
			require_once("meditationroom.php");
			$_SESSION['dd'] = "table";
		break;
		case "crystalDesign":
			require_once("crystaldesign.php");
			$_SESSION['dd'] = "table";
		break;
		case "clearing":
			require_once("her.php");
			$_SESSION['dd'] = "table";
		break;
		default:
			require_once("indexPage.php");			
	}
	if(!isset($p))
	{
		require_once("indexPage.php");
		$_SESSION['dd'] = "";
	}
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