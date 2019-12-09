<?php include 'inc/header.php'; ?>

<?php
/*
  if(isset($_GET['name'])){
    // echo $_GET['name'];
  }
  if(isset($_POST['name'])){
    // echo $_GET['email'];
    $name = htmlentities($_POST['name']);
    echo $name;
  }
  */

?>

<h1>Form</h1>
<form method="POST" action="get_post.php">
  <div>
    <label>Name</label><br>
    <input type="text" name="name">
  </div>
  <div>
    <label>Email</label>
    <input type="text" name="email">
  </div>
    <input type="submit" value="Submit">
  </form>


<?php include 'inc/footer.php'; ?>