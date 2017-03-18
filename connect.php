

<?
if( $_POST )
{
  $con = mysql_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("blood", $con);

  $users_name = $_POST['name'];
  echo $users_name;
  $users_email = $_POST['email'];
  echo $users_email;
  $users_age = $_POST['age'];
  echo $users_age;


  $articleid = $_GET['id'];
  if( ! is_numeric($articleid) )
    die('invalid article id');

  $query = "
  INSERT INTO `donate`(`ID`, `firstName`, `email`, `age`, `bgrp`, `gender`, `mNo`, `pincode`) VALUES ('2',$users_name,$users_email,$users_age,'BP','MALE','9746388928','676306');";





  mysql_query($query);



  mysql_close($con);

  echo " <h2>Thank you for your Comment!</h2> ";
}
?>
