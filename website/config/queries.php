<?php require('config/db.php');

//Database Connection
//Create Query  
  $query = 'SELECT * FROM posts ORDER BY created_at DESC';
//Get Results
  $result = mysqli_query($conn, $query);
//Fetch Data
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  // var_dump($posts);
//Free Result from memory
  mysqli_free_result($result);
//Close Connection
  mysqli_close($conn);


?>

