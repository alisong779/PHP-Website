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

//Get Query String
$q = $_REQUEST['q'];

$suggestion = "";


//Get Suggestions
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
