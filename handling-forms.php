 <?php

$nameErr = $mailErr = $msgErr = "";
$name = $mail = $msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["msg"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}
?>
