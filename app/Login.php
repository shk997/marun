<?php
session_start();

include('Database.php');
$db = new Database();
//ustawianie nazwy tabeli 
$db->table = 'users';
//wyciaganie danych z fomularza POST
$name = isset($_POST['login']) ? $_POST['login'] : false;
$pass = isset($_POST['password']) ? $_POST['password'] : false;

//wstawianie wartosci z formularza POST jak wyzej masz zmienne to wstawiasz tu (zobacz Database.php -> funkcja insert)
$array = [
		'login' => $name,
		'password'  => $pass,
	];

//sprawdzanie czy istnieje taki uzytkownik (check_user) , tutaj chodzi o wysylanie jsona do widoku bez przeladowywania strony
$tablica = ['check_user'=>null, 'check_pass'=>null];
$ilosc_bledow = false;

if($db->checkUser($array, 'users') != true)
{
 	$ilosc_bledow = true;
}

if($db->checkPass($array, 'users') != true)
{
	$ilosc_bledow = true;
}



if($ilosc_bledow){
	$tablica['check_user'] = 'Nie ma takiego użytkownika!';
	http_response_code(400);
}
else{

	$_SESSION['login'] = $name;
	$_SESSION['check'] = true;
}

header('Content-Type: application/json; charset=UTF-8');
print json_encode($tablica);
?>
