<?php
	require_once("config.php");
	
	$page = $_GET["page"] != "" ? $_GET["page"] : "";

	require_once("theme/frontend/header.php");

	switch ($page) {
		case 'about':
			require_once("front/about.php");
			break;
		case 'pastorprofile':
			require_once("front/pastorprofile.php");
			break;
		case 'missionary':
			require_once("front/missionary.php");
			break;
		default:
			require_once("front/home.php");
			break;
	}

	
	require_once("theme/frontend/footer.php");
?>