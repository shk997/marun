<?php

class UzytkownicyController extends Controller{

	public function index(){
		$db = new Database(); 
		$db->table = 'uzytkownicy';
		include('Uzytkownicy/uzytkownicy.php'); 
	}
}