<?php include 'inc/header.php';
      require('config/db.php');
    
  //Check for submit
  if(isset($_POST['submit'])){
    $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

  //Define the query
    $query = "UPDATE posts SET
                title='$title',
                author='$author',
                body='$body'
              WHERE id = {$update_id}";


    if(mysqli_query($conn, $query)){
      header('Location: '.'index.php'.'');
    }else {
      echo 'ERROR: ' . mysqli_error($conn);
    }
  }

  //DB Query
    $id = $_GET['id'];
    $query = 'SELECT * FROM posts WHERE id = '.$id;
    $result = mysqli_query($conn, $query);
    $post = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
?>

<div class="container">
  <h1>Add Post</h1>
  <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
      <label>Title</label>
      <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
    </div>
    <div class="form-group">
      <label>Author</label>
      <input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
    </div>
    <div class="form-group">
      <label>Blog Post</label>
      <textarea name="body" class="form-control"><?php echo $post['body']; ?></textarea>
    </div>
    <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
  </form>
</div>

<?php include 'inc/footer.php'; ?>

