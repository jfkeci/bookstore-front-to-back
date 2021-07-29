<?php

//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

//Includes
include_once('../../config/Database.php');
include_once('../../models/Book.php');

$database = new Database();
$db = $database->connect();

$book = new Book($db);

$data = json_decode(file_get_contents("php://input"));

$book->name = $data->name;
$book->author = $data->author;
$book->genre = $data->genre;
$book->language = $data->language;

if ($book->create()) {
    echo json_encode(array(
        'message' => 'Book created'
    ));
} else {
    echo json_encode(array(
        'message' => 'Book not created'
    ));
}
