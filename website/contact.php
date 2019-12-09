<?php include 'inc/header.php'; ?>
<?php
//Message variables
$msg = '';
$msgClass = '';

//Check for Submit
  if(filter_has_var(INPUT_POST, 'submit')){
    //Get Form Data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //Check Required Fields
    if(!empty($email) && !empty($name) && !empty($message)){
      //Check email
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        $msg = 'Please enter a valid email';
        $msgClass = 'alert-danger';
      }else {
        $toEmail = 'email@email.com';
        $subject = 'Contact Request From '.$name;
        $body = '<h2>Contact Request</h2>
        <h4>Name</h4><p>'.$name.'</p>
        <h4>Email</h4><p>'.$email.'</p>
        <h4>Message</h4><p>'.$message.'</p>
        ';

        $headers = "MIME-Version: 1.0" ."/r/n";
        $headers .= "Content-Type:text/html;charset=UTF-8" . "/r/n";
        $headers .= "From: " .$name. "<" .$email. ">". "/r/n";

        if(mail($toEmail, $subject, $body, $headers)){
          $msg = 'Your email has been sent';
          $msgClass = 'alert-success';
        }else {
          $msg = 'Please try again';
          $msgClass = 'alert-danger';
        }
      }
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
    <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
  </div>

  <div class="form-group">
    <label>Email address</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
  </div>

  <div class="form-group">
    <label>Message</label>
    <textarea name="message" class="form-control" placeholder="Your Message" value="<?php echo isset($_POST['message']) ? $message : ''; ?>"></textarea>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php include 'inc/footer.php'; ?>