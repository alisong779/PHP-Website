<?php include 'server-info.php' ?>
<footer>
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
<p>Mywebsite &copy; 2019</p>
  </footer>
</body>
</html>