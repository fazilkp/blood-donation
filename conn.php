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
while($r = mysqli_fetch_array($result))
{
   echo"<div class='jumbotron'>";
        echo"<div class='container'>";
          echo"<h1>Donate Blood</h1>";
          echo"<p>Tears of a mother can not save her child. But YOUR BLOOD CAN!. C'mon, we know you have got it in you. Donate Blood! Save Lives!</p>";
        echo"</div>";
   echo"</div>";
   echo"<div class='container'>";
   echo"<div class='row'>";

   echo"<div class='container'>";
   echo"<div class='row'>";
   echo"<div class='col-md-12'>";
   echo "<div id='result_item_wrapper'>";
   echo"<div id='result_item'>";
  //  echo "<form action='result.php' method='post'>";
   echo "<h3>" . $r['name'] . "</h3>";
   echo "<p>" . $r['email'] . "</p>";
   echo "<h4>" . $r['blood_grp'] . "</h4>";
   echo "<p>" . $r['age'] . "</p>";
   echo "<p>" . $r['gender'] . "</p>";
   echo "<p>" . $r['phone_no'] . "</p>";
   echo "<p>" . $r['pincode'] . "</p>";
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
