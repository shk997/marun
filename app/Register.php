<?php
include('Database.php');
$db = new Database();
//ustawianie nazwy tabeli 
$db->table = 'users';

//wyciaganie danych z fomularza POST
$name = isset($_POST['login']) ? $_POST['login'] : false;
$pass = isset($_POST['password']) ? $_POST['password'] : false;
$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
$pass_confirm = isset($_POST['password2']) ? $_POST['password2'] : false;
$email = isset($_POST['email']) ? $_POST['email'] : false;
$numer = isset($_POST['numer']) ? $_POST['numer'] : false;
$lastname = isset($_POST['nazwisko']) ? $_POST['nazwisko'] : false;
$firstname = isset($_POST['imie']) ? $_POST['imie'] : false;
$check = isset($_POST['check']) ? $_POST['check'] : false;
//wstawianie wartosci z formularza POST jak wyzej masz zmienne to wstawiasz tu (zobacz Database.php -> funkcja insert)
$array = [
		'login' => $name,
		'email' => $email,
		'numer' => $numer,
		'pass'  => $pass_hash,
		'firstname' => $firstname,
		'lastname' => $lastname,
	];

//sprawdzanie czy istnieje taki uzytkownik (check_user) , tutaj chodzi o wysylanie jsona do widoku bez przeladowywania strony
$tablica = ['check_user'=>null, 'check_email'=>null, 'check_pass'=>null];
$ilosc_bledow = 0;

if($db->checkUser($array, 'users'))
{
 	$ilosc_bledow += 1;
 	$tablica['check_user'] = 'Taki użytkownik już istnieje!';
}

if($db->checkEmail($array, 'users'))
{
 	$ilosc_bledow += 1;
 	$tablica['check_email'] = 'Ten adres e-mail jest już zarejestrowany!';
}

$pass_valid = true;

if($pass != $pass_confirm)
{
	
	$ilosc_bledow += 1;
	$pass_valid = false;
	$tablica['check_pass'] = 'Hasła nie są zgodne. Spróbuj wpisać ponownie.';
}

//jesli oba hasla sa rowne, to wykonuje nowy rekord do bazy danych
if($pass_valid && !$db->checkUser($array, 'users') && !$db->checkEmail($array, 'users'))
{
	$db->insert([
		'login' =>mysqli_real_escape_string($db->link, $name),
		'created_at' => date('Y-m-d H:i:s'),
		'email' =>mysqli_real_escape_string($db->link, $email),
		'numer' =>mysqli_real_escape_string($db->link, $numer),
		'pass' => mysqli_real_escape_string($db->link, $pass_hash),
		'firstname' => mysqli_real_escape_string($db->link, $firstname),
		'lastname' => mysqli_real_escape_string($db->link, $lastname)
	]);
}
else
{
	$ilosc_bledow = 1;
}

if($ilosc_bledow > 0){
	http_response_code(400);
}

header('Content-Type: application/json; charset=UTF-8');
print json_encode($tablica);
?>
