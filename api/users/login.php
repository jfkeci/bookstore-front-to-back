<?php

//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

//Includes
include_once('../../config/Database.php');
include_once('../../models/User.php');

$database = new Database();
$db = $database->connect();

$user = new User($db);

$data = json_decode(file_get_contents('php://input'));

$user->email = isset($_GET['email']) ? $_GET['email'] : die();
$user->password = isset($_GET['password']) ? $_GET['password'] : die();


if ($user->login()) {
    print_r(json_encode(array(
        'user' => 'true',
        'id' => $user->id
    )));
} else {
    print_r(json_encode(array(
        'user' => 'false',
        'id' => ''
    )));
}
