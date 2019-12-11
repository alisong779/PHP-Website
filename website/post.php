<?php include 'inc/header.php'; ?>
<?php require('config/db.php');
  

//Check for submit
if(isset($_POST['delete'])){
  $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
 
$query = "DELETE FROM posts WHERE id = {$delete_id}";

  if(mysqli_query($conn, $query)){
    header('Location: '.'index.php'.'');
  }else {
    echo 'ERROR: ' . mysqli_error($conn);
  }
}

//DB Query
//get ID
$id = $_GET['id']; 
$query = 'SELECT * FROM posts WHERE id = '.$id;
$result = mysqli_query($conn, $query);
$post = mysqli_fetch_assoc($result);
mysqli_free_result($result);
mysqli_close($conn);
?>


<div class="container">
  <br></br>
    <h1><?php echo $post['title']; ?></h1>
    <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
    <p><?php echo $post['body']; ?></p>
    <hr>
    <a href="editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Edit</a><br></br>

    <a href="index.php" class="btn btn-primary">Back</a><br></br>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
      <input type="submit" name="delete" value="Delete" class="btn btn-danger">
    </form>
</div>

 
<?php include 'inc/footer.php'; ?>