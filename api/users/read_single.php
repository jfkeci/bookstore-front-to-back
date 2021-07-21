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

$user->id = isset($_GET['id']) ? $_GET['id'] : die();

$user->read_single();

$user_arr = array(
    'id' => $user->id,
    'username' => $user->username,
    'email' => $user->email,
    'password' => $user->password,
    'country' => $user->country,
    'zip_code' => $user->zip_code,
    'city' => $user->city,
    'address' => $user->address,
    'created_at' => $user->created_at
);

print_r(json_encode($user_arr));



?>