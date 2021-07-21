<?php

//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

//Includes
include_once('../../config/Database.php');
include_once('../../models/User.php');

$database = new Database();
$db = $database->connect();

$user = new User($db);

$data = json_decode(file_get_contents('php://input'));

$user->id = $data->id;

$user->username = $data->username;
$user->email = $data->email;
$user->password = $data->password;
$user->zip_code = $data->zip_code;
$user->city = $data->city;
$user->country = $data->country;
$user->address = $data->address;

if($user->update()){
    echo json_encode(array(
        'message' => 'User updated'
    ));
}else{
    echo json_encode(array(
        'message' => 'User not updated'
    ));
}


?>