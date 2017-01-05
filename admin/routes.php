<?php

$controller = isset($_GET['controller']) ? $_GET['controller'] : '';
$action = isset($_GET['action']) ? $_GET['action'] : '';

if($controller == '/' || $controller == '' || $controller == 'glowna'){
	$controller = '/';
}

//?controller=artykuly&action=index
include('Controller.php');
include('../app/Database.php');


switch($controller){

	case 'artykuly':
		include('ArticlesController.php');
		$class = new ArticlesController(); //inaczej new Model();
		switch($action){
			case 'index':
				$class->index();
				
			break;

			case 'article_add':
				$class->article_add();
			break;

			case 'article_store':
				$class->article_store();

			break;

			case 'article_delete':
				$id = $_GET['id'];
				$class->article_delete($id);
			break;
		}
	break;

	case 'zamowienia':
		include('ZamowieniaController.php');
		$class = new ZamowieniaController(); //inaczej new Model();
		switch($action){
			case 'index':
				$class->index();
			break;

			case 'zamowienia_add':
				$class->zamowienia_add();
			break;
		}
	break;

	//dla glownej strony te dwa
	case '/':
		include('home.php');
	break;

	default: 
		include('home.php');
	break;
}