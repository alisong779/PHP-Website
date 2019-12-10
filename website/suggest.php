<?php
$people[] = "Alison";
$people[] = "Bob";
$people[] = "Chris";
$people[] = "Chad";
$people[] = "Dan";
$people[] = "Connie";
$people[] = "Amber";
$people[] = "Nick";
$people[] = "Erica";
$people[] = "Belle";
$people[] = "Sofia";
$people[] = "Sandra";

$q = $_REQUEST['q'];

$suggestion = "";

if($q !== ""){
  $q = strtolower($q);
  $len = strlen($q);
  foreach($people as $person){
    if(stristr($q, substr($person, 0, $len))){
      if($suggestion === ""){
        $suggestion = $person;
      }else {
        $suggestion .= ", $person";
      }
    }
  }
}
echo $suggestion === "" ? "No Suggestions" : $suggestion;
