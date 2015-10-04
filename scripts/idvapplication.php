<?php
// idk how to prevent unauthorized access but the script should go here
// *true means authorized* OR exit("No direct script access allowed");

// PART 1: initial state
// define constants
define("EMAIL_TO", "imconference@misa.org.ph");
define("SUBJECT", "IMC Individual Application Form");
// define json data
$errors     = [];
$isSent     = false;


// PART 2: input and process
if(isset($_POST["name"]) && isset($_POST["nickname"]) && isset($_POST["birthday"]) && isset($_POST["number"]) && isset($_POST["email"]) && isset($_POST["school"]) && isset($_POST["yr"]) && isset($_POST["crs"]) && isset($_POST["org"]) && isset($_POST["greencomputing"]) && isset($_POST["greenindustry"])) {
  // form data is complete
  $email_from = $_POST["email"];
  $name       = $_POST["name"];
  $message = "IMConference 2015: Individual Application Form\n";
  $message = $message + "Name: " + $name;
  $message = $message + "\nNickname: " + $_POST["nickname"];
  $message = $message + "\nBirthday: " + $_POST["birthday"];
  $message = $message + "\nNumber: " + $_POST["number"];
  $message = $message + "\nSchool: " + $_POST["school"];
  $message = $message + "\nYear and Course: " + $_POST["yr"] + " " + $_POST["crs"];
  $message = $message + "\nOrganization: " + $_POST["org"];
  $message = $message + "\nWhat is green computing: " + $_POST["greencomputing"];
  $message = $message + "\nWhy is it important to practice green computing in the industry: " + $_POST["greenindustry"];


  // validate form data
  $isValidEmail    = preg_match("/^[\w+\-.]+@[a-z\d\-.]+\.[a-z]+$/i", $email_from);
  $isValidName     = preg_match("/^.*\S.*$/", $name);

  if( !$isValidEmail)   { array_push($errors, ["email", "Email is not valid"]); }

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
