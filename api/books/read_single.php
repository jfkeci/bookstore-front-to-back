<?php

//Headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

//Includes
include_once('../../config/Database.php');
include_once('../../models/Book.php');

$database = new Database();
$db = $database->connect();

$book = new Book($db);

$book->id = isset($_GET['id']) ? $_GET['id'] : die();

$book->read_single();

$book_arr = array(
    'id' => $book->id,
    'name' => $book->name,
    'author' => $book->author,
    'genre' => $book->genre,
    'language' => $book->language,
    'created_at' => $book->created_at
);

print_r(json_encode($book_arr));



?>