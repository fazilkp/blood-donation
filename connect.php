<?php include'header.php';

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="blood"; // Database name
$tbl_name="data"; // Table name

// Connect to server and select database.
$link = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
    mysqli_select_db($link, $db_name)or die("cannot select DB");
// Get values from form
$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$blood_grp=$_POST['blood_grp'];
$gender=$_POST['gender'];
$phone_no=$_POST['phone_no'];
$pincode=$_POST['pincode'];
// Insert data into mysql
$sql="INSERT INTO `data`(`name`, `email`, `age`, `blood_grp`, `gender`, `phone_no`, `pincode`) VALUES ('$name', '$email', '$age', '$blood_grp', '$gender', '$phone_no', '$pincode')";
$result=$link->query($sql);
// if successfully insert data into database, displays message "Successful".
if($result){
    echo"<div class='jumbotron'>";
       echo"<div class='container'>";
         echo"<h1>Successful</h1>";
         echo"<p>You Have successfully registered!!</p>";
       echo"</div>";
       echo "</div";
        // header("location: donate.php");
} else {
    echo "ERROR";
}
// close connection
mysqli_close($link);
?>

<?php include'footer.php'; ?>
