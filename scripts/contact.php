<?php
// idk how to prevent unauthorized access but the script should go here
// *true means authorized* OR exit("No direct script access allowed");

// PART 1: initial state
// define constants
define("EMAIL_TO", "emmanuel@natividad.info");
define("SUBJECT", "IMC 2015 Inquiry");
// define json data
$errors     = [];
$isSent     = false;


// PART 2: input and process
if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {
  // form data is complete
  $email_from = $_POST["email"];
  $name       = $_POST["name"];
  $message    = $_POST["message"];

  // validate form data
  $isValidEmail    = preg_match("/^[\w+\-.]+@[a-z\d\-.]+\.[a-z]+$/i", $email_from);
  $isValidName     = preg_match("/^.*\S.*$/", $name);
  $isValidMessage  = preg_match("/^.*\S.*$/", $message);

  if( !$isValidEmail)   { array_push($errors, ["email", "Email is not valid"]); }
  if( !$isValidName)    { array_push($errors, ["name", "Name should not be blank"]); }
  if( !$isValidMessage) { array_push($errors, ["message", "Message should not be blank"]); }

  // send email and verify if sent
  if(empty($errors)) {
    $headers =
      "From: $name <$email_from>\r\n" .
      "Reply-To: $email_from\r\n" .
      "X-Mailer: PHP/" . phpversion();

    $isSent = mail(EMAIL_TO, SUBJECT, $message, $headers);
    if( !$isSent) {
      // this error will only ever appear if form data is valid
      array_push($errors, ["none", "Email not sent: please try again at a later time"]);
    }
  }
} else {
  // form data is incomplete (maybe because client internet speed is slow?)
  array_push($errors, ["none", "Unknown error: please try again at a later time"]);
}


// PART 3: output
// no error means sent successfully
header('Content-type: application/json');

echo json_encode([ "errors" => $errors ]);
?>
