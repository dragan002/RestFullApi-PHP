<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

include_once('../core/initialize.php');

$post = new Post($db);

$data = json_decode(file_get_contents("php://input"));

$post->id = $data->id;

if($post->delete()) {
    echo json_encode([
        'message' => 'Post Deleted Successfully!'
    ]);
} else {
    echo json_encode([
        'error' => 'Unable to Delete Post.'
    ]);
}