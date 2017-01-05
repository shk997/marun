<?php

class ArticlesController extends Controller{

	public function index(){
		$db = new Database(); 
		$db->table = 'articles';
		include('Articles/articles.php'); 
	}

	public function article_add(){
		include('articles-add.php');
	}







	//pobranie parametrow z POST z formualrza ADD
	public function article_store(){
		$db = new Database(); 
		//ustawianie nazwy tabeli 
		$db->table = 'articles'; //nazwa tabeli

		$title = $_POST['subject'];
		$content = $_POST['content'];
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
		//echo 'aaaa';
		$_SESSION['komunikat'] = 'zapisano !';
		return $this->redirect('http://marun.dev/admin/index.php?controller=artykuly&action=index');
	}













	public function article_edit(){

	}

	public function article_delete($id){
		$db = new Database(); 
		$db->table = 'articles';
		$db->delete($id);

		return $this->redirect('http://marun.dev/admin/index.php?controller=artykuly&action=index');
	}

}
