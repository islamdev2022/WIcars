<?php 
if (isset($_POST["submit"]))
{
    include 'db.conn.php';
   
$fname=$_POST["Fname"];
$lname=$_POST["Lname"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$conpass=$_POST["conpass"];
    $sqlquery="SELECT email from account where email = '$email'";
    $sqlconn=mysqli_query($conn,$sqlquery);
    $row_count=mysqli_num_rows($sqlconn);
    if (($row_count==0)&&(!empty($conpass))&&($pass==$conpass)&&(!empty($pass))&&(!empty($fname))&&(!empty($lname))&&(!empty($email)))
    {
      $sqlquery="INSERT INTO account (`Firstname`, `Lastname`, `email`, `pass`) VALUES ('$fname','$lname','$email','$pass')";
      $sqlconn=mysqli_query($conn,$sqlquery);
      header("location:login.php");
    }
    else{
      header("location:SignUp.html");
    }
}?>