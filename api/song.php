<?php 
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods , Authorization');
//database connection
include "connection/db.php"; 

$data = json_decode(file_get_contents("php://input"), true);
$song_name = $data['sname'];
$song_artist =  $data['artist'];
$song_album =  $data['album'];
$song_release =  $data['release'];
$song_duration =  $data['time'];

$query = "INSERT INTO `song_table` (`song_name` ,`Song_artist`,`Song_album`, `Year_of_release`, `duration`) VALUES('$song_name' ,      '$song_artist', '$song_album', '$song_release' , '$song_duration') ";
$result= mysqli_query($connection,$query);

if ($result) {
	echo json_encode(array('message' =>'SUBMIT' , 'status' =>TRUE));

}

else{


echo json_encode(array('message' =>'not read' , 'status' =>false));


 }




?>
