<?php

class ZamowieniaController extends Controller{

	public function index(){
		$db = new Database(); 
		$db->table = 'zamowienia';
		include('Zamowienia/zamowienia.php'); 
	}
}
