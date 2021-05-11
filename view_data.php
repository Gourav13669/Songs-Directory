
<?php include "api/connection/db.php"; 



?>

<!DOCTYPE html>
<html>
<head>
<!---css--->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>SONGS TABLE</h1>

<table>
  <thead>
     <tr>
                                    <th>Id</th>
                                    <th>Song</th>
                                  
                                    <th>Artist </th>
                                    <th>Album</th>
                                    <th>Release</th>
                                    <th>Duration</th>
                                     <th>Delete</th>
                                    <th>Add</th>
                                </tr>
                        

  </thead>
  <?php

 $query = "SELECT * FROM `song_table` " ; 
           
                $result_categories = mysqli_query($connection,$query);
               
                $row = mysqli_fetch_assoc($result_categories);
            
               


                  while ($row = mysqli_fetch_assoc($result_categories)) {
                    $song_id = $row['Song_id'];
            
                 $song_name = $row['song_name'];
                 $song_artist= $row['Song_artist'];
                     $song_album = $row['Song_album'];
                      $release = $row['Year_of_release'];
                       $duration = $row['duration'];
                       
                 ?>

                 <tody>
                  <?php 

 echo "<tr>";
                                   echo "<td>$song_id</td>";
                                 echo "<td>  $song_name</td>";
                                     echo "<td>$song_artist</td>";
                                   echo "<td> $song_album</td>";
                                  
                                   echo "<td>$release</td>";
                                    echo "<td> $duration</td>";
                                     
                                      echo "<td><a href='view_data.php?delete=$song_id'>Delete</a></td>";
                                     echo "<td><a href='index.php'>Add</a></td>";





 echo "</tr>";

}




if(isset($_GET['delete'])){

  $song_delete =  $_GET['delete'];

 $query = "DELETE FROM `song_table` WHERE `Song_id` = $song_delete ";
                                  $delete = mysqli_query($connection,$query);
                                  header("Location:view_data.php");
}

                  ?>
                   






                 </tody>

</table>

</body>
</html>
