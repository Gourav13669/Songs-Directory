<?php
//database connection
include "api/connection/db.php"; 

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!--ajax-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .col{

      background-color: #28a745 !important;
    }

  </style>
</head>

<body>
 <!---navbar-->

 <nav  class="navbar navbar-light bg-light" style="background-color: #28a745 !important;" >
  <div class="container-fluid">


      <button class="btn btn-outline-success col" style="margin-left: 94%" type="submit"> <a href="view_data.php" style="text-decoration: none; color: white"> 
       View Posts
  </a>
      </button>
 
  </div>
</nav>




<h3 style="text-align: center;"> WELCOME</h3>



<div class="col-lg-4 col-md-3">
<div class="container">

  <a href="#demo" class="btn btn-info" data-toggle="collapse">Add Artist</a>
  <div id="demo" class="collapse">
    <form method="post">
  <label for="fname">Artist Name</label><br>
  <input type="text" id="fname" name="artist_name" required="required" ><br>
  <input type="submit" name="artist_submit">



</form>
<?php   
if(isset($_POST['artist_submit'])){
  
$artist_name =  $_POST['artist_name'];


  $query = "INSERT INTO `artist_table`(`Artist_name`) ";
$query .= " VALUES('$artist_name') ";


$add_artist = mysqli_query($connection,$query);

if($add_artist){

  die("fail");
} 


}

?>

  </div>
</div>
</div>
<!---staff add form--->
<div class="col-lg-4 col-md-3">
<div class="container">

  <a href="#staff" class="btn btn-info" data-toggle="collapse">Add Album</a>
  <div id="staff" class="collapse">
    <form method="post">
  <label for="fname">Album Name</label></label><br>
  <input type="text" id="fname" name="album_name" required="required"><br>
 

  


  <input type="submit" name="album_submit">



</form>


<!----staff register-->

<?php   
if(isset($_POST['album_submit'])){
  
$album_name =  $_POST['album_name'];


  $query = "INSERT INTO album_table (album_name) " ;
$query .= " VALUES('$album_name') ";


$add_album = mysqli_query($connection,$query);

if(!$add_album){
  die("fail");
} 


}




?>

  </div>
</div>
</div>

<!---doctor add form--->
<div class="col-lg-4 col-md-3">


<div  class="container">

  <a href="#doctor" class="btn btn-info" data-toggle="collapse">Add songs</a>
  <div id="doctor" class="collapse">
    <form method="post">
  <label for="fname">Song Name</label><br>
  <input type="text" id="fname" name="song_name" required="required" ><br>
  <label for="lname">ARTIST</label><br>

 <select name="song_artist">

<?php
   $query = "SELECT * FROM artist_table " ; 
           
                $result_categories = mysqli_query($connection,$query);


                  while ($row = mysqli_fetch_assoc($result_categories)) {
            
                    $id = $row['Artist_id'];
                    $name = $row['Artist_name']; 
                

                   echo "<option> $name </option> ";

                }
?>
</select> <br>



   <label for="lname">ALBUM</label><br>
 <select name="song_album">

<?php
   $query = "SELECT * FROM album_table " ; 
           
                $result_categories = mysqli_query($connection,$query);


                  while ($row = mysqli_fetch_assoc($result_categories)) {
            
                    $id = $row['album_id'];
                    $name = $row['album_name']; 
                

                   echo "<option> $name </option> ";

                }


?>
</select> <br>

<label for="lname">Release Date </label><br>
  <input type="number" id="lname" name="release" required="required" > <br>

  <label for="lname">Time Duration </label><br>
  <input type="number" id="lname" name="duration" required="required" > <br>


  <input type="submit" name="song_submit">



</form>
<?php   
if(isset($_POST['song_submit'])){
  
$song_name =  $_POST['song_name'];
$song_artist = $_POST['song_artist'] ; 
$song_album =  $_POST['song_album'];
$release = $_POST['release'];
$duration =$_POST['duration'];

  $query = " INSERT INTO `song_table`(`song_name`, `Song_artist`, `Song_album`, `Year_of_release` , `duration`) ";
$query .= " VALUES('$song_name' , '$song_artist' , '$song_album' , '$release' , '$duration') ";


$add_song = mysqli_query($connection,$query);


if(!$add_song){
  

  die("fail");
} 


}

?>

 </div>


</div>

</div>
</body>
</html>


