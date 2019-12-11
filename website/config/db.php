<?php

$conn = mysqli_connect('localhost', 'root', '123456', 'PHPBlog');

if(mysqli_connect_errno()){
  echo 'Failed to connect '. mysqli_connect_errno();
}