<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

include_once('../core/initialize.php');

$post = new Post($db);

$data = json_decode(file_get_contents("php://input"));

$post->id = $data->id;
$post->title = $data->title;
$post->body = $data->body;
$post->author = $data->author;
$post->category_id = $data->category_id;


//create post

if($post->update()) {
    echo json_encode([
        'message' => 'Post Update Successfully!'
    ]);
} else {
    echo json_encode([
        'error' => 'Unable to Update Post.'
    ]);
}