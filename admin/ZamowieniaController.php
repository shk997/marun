<?php
include('Controller.php');
include('../app/Database.php');

class ZamowieniaController extends Controller{

	public function index(){
		include('Zamowienia/zamowienia.php'); 
	}

	public function article_add(){
		include('articles-add.php');
	}

	//pobranie parametrow z POST z formualrza ADD
	public function article_store(){
		$art = $_POST['subject'];

		$array = [
			'title' => $title,
			'content' => $content,
			'published_at' => date('Y-m-d H:i:s')
		];

		$db->insert([
			'title' =>mysqli_real_escape_string($db->link, $title),		
			'content' =>mysqli_real_escape_string($db->link, $content),
			'published_at' => date('Y-m-d H:i:s')			
		]);

		return $this->redirect('http://serwis.dev:8080/admin/index.php?controller=artykuly&action=index');
	}

	public function article_edit(){

	}

	public function article_delete(){

	}

}