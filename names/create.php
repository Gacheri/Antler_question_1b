<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// get database connection
include_once '../config/database.php';
  
// instantiate name object
include_once '../objects/names.php';

$database = new Database();
$db = $database->getConnection();

$jina = new Names($db);
$data = json_decode(file_get_contents("php://input"));

if(
    !empty($data->name)
){
    $jina->name=$data->name;
    $jina->createdAt=date('d-m-Y H:i:s');

    // create a new entry

    if($jina->create()){
        http_response_code(201);
        echo json_encode(array("message"=>1))
    }
    else{
        http_respose_code(503);
        echo json_encode(array("message"->2));
    }
}
else{
    http_Response_code(404);
    echo json_encode("message"->"Unable to add a name")
}
?>