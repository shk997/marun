<?php

abstract class Controller{

	public function view(){

	}

	public function model(){

	}

	public function redirect($url){
		ob_start();
		header("Location: ".$url);
		ob_flush();
	}

	public function setValue($name, $value){
		$this->$name = $value;
	}

	public function getValue(){

	}
}