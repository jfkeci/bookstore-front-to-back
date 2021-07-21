<?php

//Headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

//Includes
include_once('../../config/Database.php');
include_once('../../models/User.php');

$database = new Database();
$db = $database->connect();

$user = new User($db);

$data = json_decode(file_get_contents('php://input'));

$user->email = $data->email;
$user->password = $data->password;

$user->login();


$user_arr = array(
    'id' => $user->id,
    'username' => $user->username,
    'email' => $user->email,
    'password' => $user->password,
    'country' => $user->country,
    'zip_code' => $user->zip_code,
    'city' => $user->city,
    'address' => $user->address
);
print_r(json_encode($user_arr));


?>