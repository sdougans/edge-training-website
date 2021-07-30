<?php
// define variables and set to empty values
$name = $gender = $age = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $gender = test_input($_POST["gender"]);
  $age = test_input($_POST["age"]);
  $password = test_input($_POST["pass"]);
  
  echo $name + " " + $gender + " " + $age + " " + $password;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
