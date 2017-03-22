<?php include'header.php';

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="blood"; // Database name
$tbl_name="data"; // Table name

// Connect to server and select database.
$link = mysqli_connect("$host", "$username", "$password", "$db_name")or die("cannot connect");
    mysqli_select_db($link, $db_name)or die("cannot select DB");
// Get values from form

// $name=$_POST['name'];
// $email=$_POST['email'];
// $age=$_POST['age'];
// $blood_grp=$_POST['blood_grp'];
// $gender=$_POST['gender'];
// $phone_no=$_POST['phone_no'];
// $pincode=$_POST['pincode'];
$search1=$_POST['search1'];
$search2=$_POST['search2'];
// Insert data into mysql
$sql="SELECT * FROM `data` WHERE `blood_grp`='$search1' AND `pincode`='$search2'";
$result=$link->query($sql);
// if successfully insert data into database, displays message "Successful".
while($row = mysqli_fetch_array($result))
{
   echo "<div id='result_item_wrapper'>";
   echo"<div id='result_item'>";
  //  echo "<form action='result.php' method='post'>";
   echo "<h3>" . $row['name'] . "</h3>";
   echo "<p>" . $row['email'] . "</p>";
   echo "<h4>" . $row['blood_grp'] . "</h4>";
   echo "<p>" . $row['age'] . "</p>";
   echo "<p>" . $row['gender'] . "</p>";
   echo "<p>" . $row['phone_no'] . "</p>";
   echo "<p>" . $row['pincode'] . "</p>";
  //  echo "<input type='submit' value='Submit'>";
  //  echo "</form>";
   echo "</div>";
   echo "</div>";
}
// if($result){
//     echo "Successful";
//     echo "<BR>";
//     // header("location: result.php");
// } else {
//     echo "ERROR";
// }
// close connection
mysqli_close($link);
include'footer.php';?>
