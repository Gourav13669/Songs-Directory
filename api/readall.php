<?php 

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
//database connection
include "connection/db.php"; 
$search = (isset($_GET['search'])) ? $_GET['search'] : die();



$query = "SELECT * FROM `song_table` WHERE `song_artist`  LIKE '%$search%' OR  `song_name`  LIKE '%$search%'";
$result = mysqli_query($connection,$query);

if (mysqli_num_rows($result)> 0 ){

$output = mysqli_fetch_all($result , MYSQLI_ASSOC);

echo json_encode($output);


}

else{


echo json_encode(array('message' =>'not read' , 'status' =>false));


 }

?>