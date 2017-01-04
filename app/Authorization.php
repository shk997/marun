<?php

class Authorization {

	private $login;
	private $password;
	private $email;
	private $numer;
	public $imie;
	public $nazwisko;

	public function __construct($u_l, $u_e, $u_num, $u_p, $u_i, $u_n){
		$this->login = $u_l;
		$this->email = $u_e;
		$this->numer = $u_num;
		$this->password = $u_p;
		$this->imie = $u_i;
		$this->nazwisko = $u_n;
	}

	
}
$login = isset($_POST['login']);
$password = isset($_POST['password']);
$password_confirmation = isset($_POST['password_confirmation']);
$nazwisko = isset($_POST['nazwisko']);
$imie = isset($_POST['imie']);
$email = isset($_POST['email']);
$numer = isset($_POST['numer']);
$check = isset($_POST['check']);
if( $check == 'zaznaczono')
{
	if( $password == $password_confirmation )
	{
		$auth = new Authorization($login, $email, $password, $imie, $nazwisko );
		echo $auth->register();
	}
}

