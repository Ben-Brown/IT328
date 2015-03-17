<?php
// define variables and set to empty values
$fname = $lname = $company = $email = $phone = $dateMet = $whereMet = $comments = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = ($_POST["fname"]);
  $lname = ($_POST["lname"]);
  $company = ($_POST["company"]);
  $email = ($_POST["email"]);
  $phone = ($_POST["phone"]);
  $dateMet = ($_POST["dateMet"]);
  $whereMet = ($_POST["whereMet"]);
  $comments = ($_POST["$comments"]);  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>