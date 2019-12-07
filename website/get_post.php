<?php include 'inc/header.php'; ?>
<?php
  if(isset($_GET['name'])){
    echo $_GET['name'];
  };
?>
<br>
<?php
  if(isset($_GET['email'])){
    echo $_GET['email'];
  };
?>
<h1>Form</h1>
<form method="GET" action="get_post.php">
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