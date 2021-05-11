<?php 
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods , Authorization');
//database connection
include "connection/db.php"; 

$data = json_decode(file_get_contents("php://input"), true);
$album_name =  $data['aname'];

$query = "INSERT INTO `album_table` (`album_name`) VALUES ('$album_name') ";
$result= mysqli_query($connection,$query);

if ($result) {
	echo json_encode(array('message' =>'SUBMIT' , 'status' =>TRUE));

}

else{


echo json_encode(array('message' =>'not read' , 'status' =>false));


 }




?>


