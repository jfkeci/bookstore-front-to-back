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

$result = $book->read();

$num = $result->rowCount();

if ($num > 0) {
    $books_array = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $book_item = array(
            'id' => $id,
            'name' => $name,
            'author' => $author,
            'genre' => $genre,
            'language' => $language,
            'created_at' => $created_at
        );

        array_push($books_array, $book_item);
    }

    echo json_encode($books_array);
} else {
    echo json_encode(array('message' => 'No books found'));
}
