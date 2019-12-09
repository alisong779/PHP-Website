<?php include 'inc/header.php'; ?>
<?php
$msg = '';
$msgClass = '';

  if(filter_has_var(INPUT_POST, 'submit')){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(!empty($email) && !empty($name) && !empty($message)){
      echo 'Message Sent!';
    }else {
      $msg = 'Please fill in all fields';
      $msgClass = 'alert-danger';
    }
  }
?>

<h1>Contact Me</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <?php if($msg != ''): ?>
    <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
  <?php endif; ?>


  <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" placeholder="Your Name">
    </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label>Message</label>
    <textarea name="message" class="form-control" placeholder="Your Message"></textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php include 'inc/footer.php'; ?>