<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="Images for DAW project/_f1deaa04-76e0-4080-b394-ae7456455591-removebg-preview.png">

    <title>Admin</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap');

        * {
            background-color: rgb(247, 247, 247);
            font-family: "Poppins", sans-serif;
            scroll-behavior: smooth;
        }

        #head {
            display: flex;
        }

        header h1 {
            font-size: 40px;
            color: rgb(93, 93, 223);
        }

        div p {
            font-weight: bold;
            background-color: rgb(0, 191, 255);
            text-align: center;

        }

        p {
            text-decoration: none;
        }

        h1 {
            color: rgb(63, 0, 255);
            text-decoration: underline solid;
        }

        #NC {
            margin-left: 60px;
        }

        .NM {
            font-size: 30px;
            font-weight: bold;
        }

        #NC:hover,
        #NB:hover,
        #NA:hover,
        #NM:hover,
        a:hover {
            transform: scale(1.1);
        }

        #NC,
        #NB,
        #NA,
        #NM,
        a {
            display: inline-block;
            cursor: pointer;
            margin-right: 30px;
            width: 280px;
            height: 150px;
            border: solid black 2px;
            border-radius: 20px;
            background-color: rgb(0, 191, 255)
        }

        table {
            width: 1200px;
            height: 190%;
            text-align: center;
            position: relative;
            left: 8%;
        }

        #Ncars {
            width: 100%;
            position: relative;
            left: 0%;
            margin-left: -12.5px;
        }


        th:nth-child(even) {
            background-color: rgb(135, 206, 235)
        }

        td:nth-child(even) {
            background-color: rgb(135, 206, 235)
        }

        td:nth-child(odd) {
            background-color: #ffffff;
        }

        th:nth-child(odd) {
            background-color: #ffffff;
        }

        form {
            background-color: rgb(135, 206, 235)
        }

        button {
            cursor: pointer;
            font-weight: bold;
            color: white;
            border: transparent;
            border-radius: 10%;
            background-color: rgb(65, 102, 245);
            display: inline-block;
        }
    </style>
</head>

<body>
    <header>
        <div id="head">
            <img src="Images for DAW project/_f1deaa04-76e0-4080-b394-ae7456455591-removebg-preview.png" alt="" width="90" height="90">
            <h1>CARS</h1>
        </div>
        <hr>
    </header>
    <?php         // FOR QUERIES

    include 'db.conn.php';

    $NC = mysqli_query($conn, "SELECT count(*) as NC FROM `cars`");
    $rowNC = mysqli_fetch_array($NC);
    $nbc = $rowNC['NC']; //for the number

    $NA = mysqli_query($conn, "SELECT count(*) as NA FROM `account`");
    $rowNA = mysqli_fetch_array($NA);
    $nba = $rowNA['NA'];

    $NM = mysqli_query($conn, "SELECT count(*) as NM FROM `message`");
    $rowNM = mysqli_fetch_array($NM);
    $nbm = $rowNM['NM'];

    $NB = mysqli_query($conn, "SELECT count(*) from (SELECT count(*) FROM `cars` group by Marque) as NB");
    $rowNB = mysqli_fetch_array($NB);
    $nbb = $rowNB['count(*)'];

    $acc = mysqli_query($conn, "SELECT * FROM `account`");
    $row = mysqli_fetch_assoc($acc);


    $cars = mysqli_query($conn, "SELECT IDV,Marque,Nom,`Nom et prenom`,`Numero telephone`,prix,moteur FROM `cars`");
    $rowC = mysqli_fetch_assoc($cars);

    $all = mysqli_query($conn, "SELECT * from `all cars` ");
    $rowAll = mysqli_fetch_assoc($all);


    $msgs = mysqli_query($conn, "SELECT Nom ,Email ,Message FROM `message`");
    $rowM = mysqli_fetch_assoc($msgs);
    // END OF QUERIES
    ?>

    <div id="NC"><a href="#CARS">
            <p>Number of Cars</p>
            <p class="NM"><?php echo $nbc //to print the number 
                            ?></p>
        </a></div>
    <div id="NA"><a href="#USERS">
            <p>Number of Accounts</p>
            <p class="NM"><?php echo $nba ?></p>
        </a></div>
    <div id="NB"><a>
            <p>Number of Brands</p>
            <p class="NM"><?php echo $nbb ?></p>
        </a></div>
    <div id="NM"><a href="#MSG">
            <p>Number of Messages</p>
            <p class="NM"><?php echo $nbm ?></p>
        </a></div>
    <hr>

    <!-- ACCOUNTS -->
    <section id="USERS">

        <h1>Users with accounts</h1>

        <table border="1">

            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Deletion</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($acc)) { ?>
                <tr>
                    <td><?php echo $row['AccountID']; ?></td>
                    <td><?php echo $row['Firstname']; ?></td>
                    <td> <?php echo $row["Lastname"]; ?></td>
                    <td> <?php echo $row["email"]; ?></td>
                    <td> <?php echo $row["pass"]; ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="acc_id" value="<?php echo $row['AccountID'];  //to determin What I need (ID) 
                                                                        ?>">
                            <button type="submit" name='del'>Delete</button>
                        </form>
                        <?php
                        if (isset($_POST['acc_id'])) {
                            $Aid = $_POST['acc_id'];
                            $delete = mysqli_query($conn, "DELETE FROM account WHERE AccountID='$Aid' ");
                        }
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </section>
    <hr>
    <!-- CARS -->
    <section id="CARS">
        <h1>Cars for Sale</h1>

        <table border="1">
            <tr>
                <th>CarID</th>
                <th>Brand</th>
                <th>Name</th>
                <th>Seller</th>
                <th>Phone number</th>
                <th>Price</th>
                <th>Engine</th>
                <th>Deletion</th>
            </tr>
            <?php
            while ($rowC = mysqli_fetch_assoc($cars)) {   ?>
                <tr>
                    <td><?php echo $rowC['IDV'] ?></td>
                    <td><?php echo $rowC['Marque'] ?></td>
                    <td><?php echo $rowC['Nom'] ?></td>
                    <td><?php echo $rowC['Nom et prenom'] ?></td>
                    <td><?php echo $rowC['Numero telephone'] ?></td>
                    <td><?php echo $rowC['prix'] ?> DA</td>
                    <td><?php echo $rowC['moteur'] ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="car_id" value="<?php echo $rowC['IDV']; ?>">
                            <button type="submit" name='del'>Delete</button>
                        </form>
                        <?php if (isset($_POST['car_id'])) {
                            $id = $_POST['car_id'];

                            $delete = mysqli_query($conn, "DELETE FROM `cars` WHERE IDV='$id' ");
                        } ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </section>
    <hr>
    <!-- MESSAGES -->
    <section id="MSG">
        <h1>Messages</h1>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            <?php while ($rowM = mysqli_fetch_assoc($msgs)) {  ?>
                <tr>
                    <td><?php echo $rowM['Nom'] ?></td>
                    <td><?php echo $rowM['Email'] ?></td>
                    <td><?php echo $rowM['Message'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </section>
    <hr>
    <!-- NEW CARS -->
    <section id="Newcars">
        <form action="" method="post"></form>
        <h1>New Cars</h1>
        <table border="1" id="Ncars">
            <tr>
                <th>Brand</th>
                <th>Name</th>
                <th>Seller</th>
                <th>Phone number</th>
                <th>Price</th>
                <th>Engine</th>
                <th>Description</th>
                <th>Caratestics</th>
                <th>IMG1</th>
                <th>IMG2</th>
                <th>IMG3</th>
                <th>ACC/REJ</th>
            </tr>
            <?php while ($rowAll = mysqli_fetch_assoc($all)) {  ?>
                <tr>
                    <td><?php echo $rowAll['Marque'] ?></td>
                    <td><?php echo $rowAll['Nom'] ?></td>
                    <td><?php echo $rowAll['Nom et Prenom'] ?></td>
                    <td><?php echo $rowAll['Numero telephone'] ?></td>
                    <td><?php echo $rowAll['prix'] ?> DA</td>
                    <td><?php echo $rowAll['Moteur'] ?></td>
                    <td><?php echo $rowAll['Description'] ?></td>
                    <td><?php echo $rowAll['Carateristique'] ?></td>
                    <td><img src="uploads/<?= $rowAll['img1'] ?>" alt="Car Image 1" height="110" width="210"></td>
                    <td><img src="uploads/<?= $rowAll['img2'] ?>" alt="Car Image 2" height="110" width="210"></td>
                    <td><img src="uploads/<?= $rowAll['img3'] ?>" alt="Car Image 3" height="110" width="210"></td>
                    <td>
                        <form method="POST" action="">
                            <input type="hidden" name="car_idv" value="<?php echo $rowAll['IDV']; ?>">
                            <input type="hidden" name="owner" value="<?php echo $rowAll['Nom et Prenom']; ?>">
                            <input type="hidden" name="phone" value="<?php echo $rowAll['Numero telephone']; ?>">
                            <input type="hidden" name="marque" value="<?php echo $rowAll['Marque']; ?>">
                            <input type="hidden" name="car_name" value="<?php echo $rowAll['Nom']; ?>">
                            <input type="hidden" name="price" value="<?php echo $rowAll['prix']; ?>">
                            <input type="hidden" name="engine" value="<?php echo $rowAll['Moteur']; ?>">
                            <input type="hidden" name="CT" value="<?php echo $rowAll['Carateristique']; ?>">
                            <input type="hidden" name="DES" value="<?php echo $rowAll['Description']; ?>">
                            <input type="hidden" name="mg1" value="<?php echo $rowAll['img1']; ?>">
                            <input type="hidden" name="mg2" value="<?php echo $rowAll['img2']; ?>">
                            <input type="hidden" name="mg3" value="<?php echo $rowAll['img3']; ?>">

                            <!-- Rest of the table row content -->
                            <button type="submit" name="action" value="accept">Accept</button>
                            <button type="submit" name="action" value="reject">Reject</button>
                        </form>
                    </td>
                </tr><?php 
if (isset($_POST['car_idv']) && isset($_POST['action'])) {
    $carIdv = $_POST['car_idv'];

    $owner = isset($_POST['owner']) ? $_POST['owner'] : null;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $marque = isset($_POST['marque']) ? $_POST['marque'] : null;
    $carname = isset($_POST['car_name']) ? $_POST['car_name'] : null;
    $price = isset($_POST['price']) ? $_POST['price'] : null;
    $engine = isset($_POST['engine']) ? $_POST['engine'] : null;
    $caraterestics = isset($_POST['CT']) ? $_POST['CT'] : null;
    $Description = isset($_POST['DES']) ? $_POST['DES'] : null;
    $img1 = isset($_POST['mg1']) ? $_POST['mg1'] : null;
    $img2 = isset($_POST['mg2']) ? $_POST['mg2'] : null;
    $img3 = isset($_POST['mg3']) ? $_POST['mg3'] : null;
}
}?>

        </table>
    </section>
    <?php

    if (isset($_POST['car_idv']) && isset($_POST['action'])) {

        $action = $_POST['action'];

        // Perform the corresponding action (accept or reject)
        if ($action === 'accept') {
            // Move the car to the accepted cars table
            echo '<script>alert("the car has been accpeted ! ");</script>';
            $sql = mysqli_query($conn, "INSERT INTO `cars` (`IDV`, `Nom et Prenom`, `Numero telephone`, `Marque`, `Nom`, `prix`, `Moteur`, `Carateristique`, `Description`, `img1`, `img2`, `img3`) 
                VALUES ($carIdv,'$owner',$phone,'$marque',' $carname', $price,' $engine','$caraterestics',' $Description','$img1','$img2','$img3')");
            $delete = mysqli_query($conn, "DELETE from `all cars` where IDV=$carIdv ");
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } elseif ($action === 'reject') {
            // Move the car to the rejected cars table
            echo '<script>alert("the car has been rejected ! ");</script>';
            $sql = mysqli_query($conn, "INSERT INTO `rejected cars`  (`IDV`, `Nom et Prenom`, `Numero telephone`, `Marque`, `Nom`, `prix`, `Moteur`, `Carateristique`, `Description`, `img1`, `img2`, `img3`) 
                VALUES ($carIdv,'$owner',$phone,'$marque',' $carname', $price,' $engine','$caraterestics',' $Description','$img1','$img2','$img3')");
            $delete = mysqli_query($conn, "DELETE from `all cars` where IDV=$carIdv ");
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo '<script>alert("error ")</script>';
        }
    }
    ?>
</body>

</html>