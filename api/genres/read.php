<?php

//Headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

//Includes
include_once('../../config/Database.php');
include_once('../../models/Genre.php');

$database = new Database();
$db = $database->connect();

$genre = new Genre($db);

$result = $genre->read();

$num = $result->rowCount();

if( $num > 0 ){
    $genres_array = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $genre_item = array(
            'id' => $id,
            'genre' => $genre,
            'created_at' => $created_at
        );

        array_push($genres_array, $genre_item);
    }

    echo json_encode($genres_array);
}else{
    echo json_encode(array('message' => 'No genres found'));
}




?>