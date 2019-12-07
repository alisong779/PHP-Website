<?php include 'server-info.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>My Website</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<div class="container">
  <h1>Server and File Info</h1>
  <?php if($server): ?>
    <ul class="list-group">
      <?php foreach($server as $key => $value): ?>
        <li class="list-group-item">
          <strong><?php echo $key; ?>:</strong>
          <?php echo $value; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  <h1>Client Info</h1>
  <?php if($client): ?>
    <ul class="list-group">
      <?php foreach($client as $key => $value): ?>
        <li class="list-group-item">
          <strong><?php echo $key; ?>:</strong>
          <?php echo $value; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>