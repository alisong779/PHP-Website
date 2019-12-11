<?php include 'inc/header.php'; ?>
<?php require('config/db.php');
      require('config/queries.php'); ?>


<script>
  function showSuggestion(str){
    if(str.length == 0){
      document.getElementByID('output').innerHTML = '';
    }else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          document.getElementById('output').innerHTML = this.responseText;
        }
      }
      xmlhttp.open("GET", "suggest.php?q="+str, true);
      xmlhttp.send();
    }
  }
</script>

<div class="container">
  <h1>Search Users</h1>
  <form>
    Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
  </form>
  <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
</div>

<br>
<div class="container">
  <h1>Blog Posts</h1>
  <?php foreach($posts as $post) : ?>
    <div class="well">
      <h3><?php echo $post['title']; ?></h3>
      <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
      <p><?php echo $post['body']; ?></p>
      <a href="post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Read More</a><br></br>
</div>
<?php endforeach; ?>
</div>

<?php include 'inc/footer.php'; ?>