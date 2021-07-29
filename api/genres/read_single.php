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

$genre->id = isset($_GET['id']) ? $_GET['id'] : die();

$genre->read_single();

$genre_arr = array(
    'id' => $genre->id,
    'genre' => $genre->genre,
    'created_at' => $genre->created_at
);

print_r(json_encode($genre_arr));
