<?php include 'inc/header.php'; ?>

<h1>Contact Me</h1>
<form action="" method="post">
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
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include 'inc/footer.php'; ?>