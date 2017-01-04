<?php

abstract class Controller{

	public function view(){

	}

	public function model(){

	}

	public function redirect($url){
		header("Location: ".$url);
	}
}