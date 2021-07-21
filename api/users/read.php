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

$result = $user->read();

$num = $result->rowCount();

if( $num > 0 ){
    $users_array = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $user_item = array(
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

        array_push($users_array, $user_item);
    }

    echo json_encode($users_array);
}else{
    echo json_encode(array('message' => 'No users found'));
}




?>