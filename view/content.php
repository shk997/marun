<?php
$option = isset($_GET['option']) ? $_GET[
'option'] : 'glowna'; //zwraa boolean czy istnieje tkai parametr
/*
if( isset($_GET['option']))
{
	$option = $_GET[
'option'];
}
else{
	$option = 'glowna';
}
*/
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

	case 'glowna':
		$view = include('home.php');
	break;

	default:
		$view = include('home.php');
	break;
}

?>
