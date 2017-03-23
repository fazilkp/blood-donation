<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $blood_grpErr = $ageErr = $phone_noErr = $pincodeErr ="";
$name = $email = $gender = $age = $blood_grp = $phone_no = $pincode = "";

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

  if (empty($_POST["blood_grp"])) {
    $blood_grp = "Please select blood group";
  } else {
    $blood_grp = test_input($_POST["blood_grp"]);
  }

  if (empty($_POST["age"])) {
    $age = "Age is required";
  } else {
    $age = test_input($_POST["age"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["phone_no"])) {
    $phone_noErr = "Phone Number is required";
  } else {
    $phone_no = test_input($_POST["phone_no"]);
  }
  if (empty($_POST["pincode"])) {
    $pincodeErr = "pincode is required";
  } else {
    $pincode = test_input($_POST["pincode"]);
  }
}
?>
