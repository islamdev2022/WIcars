<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="Images for DAW project/_f1deaa04-76e0-4080-b394-ae7456455591-removebg-preview.png">
  <title>Deleting</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap');

    body {
      background-color: #f1f1f1;
      font-size: 20px;
      font-weight: 550;
    }

    form {
      background-color: #fff;
      border-radius: 50px;
      box-shadow: 0 0 10px blue;
      margin: 130px auto;
      font-family: "Poppins", sans-serif;
      border: solid blue;
      width: 600px;
      height: 100%;
      padding: 40px 40px 40px 40px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 20px;
    }

    td {
      padding: 10px;
      font-size: 16px;
      color: #333;
      text-align: left;
    }

    input[type="text"],
    input[type="tel"] {
      padding: 10px;
      border-radius: 5px;
      border: none;
      background-color: #f2f2f2;
      width: 100%;
      font-size: 16px;
      color: #333;
      box-sizing: border-box;
    }

    input[type="text"]:focus,
    input[type="tel"]:focus {
      outline: none;
      border: 2px solid blue;
      box-shadow: 0px 0px 5px 0px blue;
    }

    button {
      padding: 10px 20px;
      border-radius: 5px;
      border: none;
      background-color: blue;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      box-shadow: 0 0 10px blue;
    }

    @media (max-width:400px) {
      .form {
        width: 200px;
        padding: 00;
      }
    }
  </style>

</head>

<body>
  <form method="POST" action="" onsubmit="">
    <table>
      <tr>
        <td>Full Name:</td>
        <td><input type="text" id="fullname" name="fullname"></td>
      </tr>
      <tr>
        <td>Phone Number:</td>
        <td><input type="tel" id="phonenum" name="phonenumber"></td>
      </tr>
      <tr>
        <td>Car Name:</td>
        <td><input type="text" id="carname" name="carname"></td>
      </tr>
    </table>
    <button type="submit" id="sub" name="sub">DELETE</button>
  </form>
  <?php
  include 'db.conn.php';
  if (isset($_POST['sub'])) {
    $fullname = $_POST['fullname'];
    $phonenumber = $_POST['phonenumber'];
    $carname = $_POST['carname'];
    $sqlquery = "SELECT `Nom et Prenom` , `Numero telephone`, `Nom` from cars where  `Nom et Prenom`='$fullname' and `Numero telephone`=$phonenumber and `Nom`='$carname'";
    $sqlconn = mysqli_query($conn, $sqlquery);
    $row_count = mysqli_num_rows($sqlconn);
    if (($row_count != 0) && !empty($fullname) && !empty($phonenumber) && !empty($carname)) {
      $query = "DELETE from cars where `Nom et Prenom`='$fullname' and `Numero telephone`=$phonenumber and Nom='$carname'";
      $sql = mysqli_query($conn, $query);
      echo '<script>alert (" YOU HAVE SUCESSFULLY DELETED THE CAR !")</script>';
      header("location:MainPage.php");
      exit();
    } else if (empty($fullname) && empty($phonenumber) && empty($carname)) {
      echo '<script>alert("EMPTY INPUTS !!") </script>';
    } else {
      echo '<script>alert (" THERE IS NO CAR MATCH")</script>';
    }
  }

  ?>
</body>

</html>