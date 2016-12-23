<?php
$option = isset($_GET['option']);
$ukryc = false;

switch($option){
	case 'mechanika':
		$ukryc = true;
		$view = include('mechanika.php');
	break;

	case 'wulkanizacja':
		$ukryc = true;
		$view = include('wulkanizacja.php');
	break;

	case 'detailing':
		$ukryc = true;
		$view = include('detailing.php');
	break;

	default:
		$view = include('home.php');
	break;
}

?>
