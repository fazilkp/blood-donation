

<?php include'header.php';?>
if( $_POST )
{
  $con = mysqli_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect: ' . mysqli_error());
  }

  mysqli_select_db("blood", $con);

  $users_name = $_POST['name'];
  echo $users_name;
  $users_email = $_POST['email'];
  echo $users_email;
  $users_age = $_POST['age'];
  echo $users_age;
  $users_bgrp = $_POST['blood_grp'];
  echo $users_bgrp;
  $users_gender = $_POST['gender'];
  echo $users_gender;
  $users_mNo = $_POST['phone_no'];
  echo $users_mNo;
  $users_pincode = $_POST['pincode'];
  echo $users_pincode;


  $articleid = $_GET['id'];
  if( ! is_numeric($articleid) )
    die('invalid article id');

  $query = "INSERT INTO `data`(`userId`, `name`, `email`, `age`, `blood_grp`, `gender`, `phone_no`, `pincode`) VALUES ('2','fazil','fazil.amigo@gmail.com','26','BP','Male','919544550791','676306')";





  mysqli_query($query);



  mysqli_close($con);

  // echo " <h2>Thank you for your Comment!</h2> ";
}
<?php include'footer.php';?>
