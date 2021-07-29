<?php

//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

//Includes
include_once('../../config/Database.php');
include_once('../../models/Author.php');

$database = new Database();
$db = $database->connect();

$author = new Author($db);

$data = json_decode(file_get_contents("php://input"));

/* print_r($_POST);

exit;
 */
$author->name = $data->name;

if ($author->create()) {
    echo json_encode(array(
        'message' => 'Author created'
    ));
} else {
    echo json_encode(array(
        'message' => 'Author not created'
    ));
}
