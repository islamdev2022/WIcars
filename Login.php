<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css libraryies/all.min.css">
    <script src="js libraryies/all.min.js"></script>
    <link rel="shortcut icon" type ="image/png" href="Images for DAW project/_f1deaa04-76e0-4080-b394-ae7456455591-removebg-preview.png">
    <title>Log in</title>
    <script>
    const togglePassword = document.querySelector('#toggle-password');
    const passwordInput = document.querySelector('#pas');
    togglePassword.addEventListener('click', function (e) {
      // Toggle the type attribute of the password input between 'password' and 'text'
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      // Toggle the eye icon
      this.querySelector('i').classList.toggle('fa-solid fa-eye-slash');
    });
  </script>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap');
    body {
  background-color: #f1f1f1;
  font-family: "Poppins" , sans-serif;
  margin: 0;
  padding: 0;
}

.form {
  background-color: #fff;
  border-radius: 50px;
  box-shadow: 0 0 10px rgb(66, 66, 243);
  display: flex;
  flex-direction: column;
  position: relative;
  top: 50%;
  bottom: 50%;
  transform: translate(100%,35%);
  padding: 40px 40px 90px 40px;
  width: 400px;
  height: 120%;
  border: solid blue;
}

.title {
  color: #212121;
  font-size: 30px;
  font-weight: bold;
  margin: 0 0 20px;
  text-align: center;
}

.message {
  color:#212121;
  font-size: 20px;
  margin: 0 0 30px;
  text-align: center;
}

span{ 
     font-weight: 550;
}

.flex {
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
  gap:25px;
}

.label {
  display: flex;
  flex-direction: column;
  width: 45%;
}

.input {
  background-color: #f1f1f1;
  border: none;
  border-radius: 5px;
  color: #333;
  font-size: 16px;
  margin-top: 5px;
  padding: 10px;
  width: 100%;
}

.input:focus {
  background-color: #fff;
  border: 2px solid blue;
  outline: none;
  box-shadow: 0px 0px 5px 0px blue;
}

.submit {
  background-color: blue;
  border: none;
  border-radius: 10px;
  color: #fff;
  cursor: pointer;
  font-size: 16px;
  margin-top: 20px;
  padding: 10px;
  transition: background-color 0.3s ease;
  height: 40px;
  position: absolute;
  top:73%;
  width: 120px;
}
.submit:hover{
			box-shadow: 0 0 10px rgb(66, 66, 243);
		}
.submit:focus{
  transform: scale(0.95);
}

.signin {
  color: #333;
  font-size: 14px;
  width: 110%;
  position: absolute;
  top:77%;
  left:50%;
}

.signin a {
  color: blue;
  font-weight: bold;
  text-decoration: none;
  transition: color 0.3s ease;
}

.signin a:hover {
  color: blue;
}
.eye{
  position: relative;
  left: 94%;
  bottom: 35%;
  background-color: transparent;
  border: transparent;
  cursor:pointer;
}
@media (max-width:400px){
 
  .form{
    width: 280px;
    margin: 0;
    padding: 20px 30px 50px 20px;
    height: 300px;
    position: absolute;
  top: 2%;
 right: 70%;
 
    
  }
  .title {
			font-size: 20px;
		}
		.message {
			
			font-size: 13px;
      
		}
    span{ 
     font-weight: 450;
     font-size: smaller;
}
.submit{
  position: absolute;
  top:55%;
}
.signin{
  position: absolute;
  left:5%;
}
}

    </style>
</head>
<?php
require 'C:\Users\Hassiba Informatique\Desktop\COLLEGE EDUCATION\S4\DAW\Mini Projet DAW\db.conn.php';
if (isset($_POST["sub"]))
{

$email=$_POST['email'];
$pass=$_POST['pass'];
$sql = 'SELECT email,pass from account where email= ? AND pass =? ';
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss",$email,$pass);
$stmt->execute();
$result=$stmt->get_result();
if ($result->num_rows == 1) {

    session_start();
    
    $_SESSION['loggedin']=true;
    $_SESSION['sendemail']=$email;  

   header("location:OwnerPage.php");// Redirect to dashboard page
    exit();
} else {echo" <script> alert('Invalid email or password');</script> ";} // Display error message
   
$stmt->close();
$conn->close();} 
?>
<body>
    <form class="form" action="" method="post">
        <p class="title">Log In now </p>
        <p class="message"><b>Signin now to sell And buy cars </b></p>
            <div class="flex">
                
        <label>
            <span>Email</span>
            <input required="" placeholder="" type="email" class="input" name="email" id="Mail">
        </label> 
            
        <label>
           <span>Password</span>
            <input required="" placeholder="" type="password" class="input" name="pass" id="pas">
            <button type="button" class = "eye" id="toggle-password"><i class="fas fa-eye"></i></button>
        </label>
        
        <button class="submit" name="sub" id="log">Log in</button>
        <p class="signin">Don't have an account ? <a href="SignUp.html"> SignUp</a><br> or visit as a guest <a href="MainPage.php">HERE</a></p>
    </form>
</body>
</html>