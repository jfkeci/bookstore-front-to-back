<?php

//Headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

//Includes
include_once('../../config/Database.php');
include_once('../../models/Author.php');

$database = new Database();
$db = $database->connect();

$author = new Author($db);

$result = $author->read();

$num = $result->rowCount();

if( $num > 0 ){
    $authors_array = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $author_item = array(
            'id' => $id,
            'name' => $name,
            'created_at' => $created_at
        );

        array_push($authors_array, $author_item);
    }

    echo json_encode($authors_array);
}else{
    echo json_encode(array('message' => 'No authors found'));
}




?>