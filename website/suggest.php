<?php require('config/db.php');
      require('config/queries.php');

//Get Query String
$q = $_REQUEST['q'];

$suggestion = "";
$names = array();
foreach($posts as $post){
  $names[] = $post['author'];
}

//Get Suggestions
if($q !== ""){
  $q = strtolower($q);
  $len = strlen($q);
  foreach($names as $author){
    if(stristr($q, substr($author, 0, $len))){
      if($suggestion === ""){
        $suggestion = $author;
      }else {
        $suggestion .= ", $author";
      }
    }
  }
}
echo $suggestion === "" ? "No Suggestions" : $suggestion;

