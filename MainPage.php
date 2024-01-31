<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WI Cars </title>
    <link rel="stylesheet" href="css libraryies/all.min.css">
    <link rel="stylesheet" href="MainPage.css">
    <link rel="stylesheet" href="all.min.css">
    <link rel="shortcut icon" type ="image/png" href="Images for DAW project/_f1deaa04-76e0-4080-b394-ae7456455591-removebg-preview.png">
    <script src="js libraryies/all.min.js"></script>
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
    <script src="MainPage.js" defer></script>
</head>

<body>
    <!-- header  -->
    <header>
        <!-- menu responsive -->
        <div class="logo">
            <p><span>WI</span>Cars</p>
        </div>
        <ul class="menu">
            <li><a href="#home"><i class="fa-solid fa-house fa-beat"></i> Home</a></li>
            <li><a href="#cars"><i class="fa-solid fa-car fa-beat"></i> Cars</a></li>
            <li><a href="#services"><i class="fa-solid fa-car-burst fa-beat"></i> Services</a></li>
            <li><a href="#contact"><i class="fa-solid fa-envelope fa-beat"></i> Contact</a></li>
        </ul>

        <button class="add"><i class="fa-regular fa-square-plus fa-xl"></i></button>
        <ul class="user">

            <i id="us" class="fa-solid fa-circle-user fa-2xl"></i>
            <ul class="dropdown">
                <li><button class="SignUp" onclick="sign()"> <i class="fa-solid fa-user-plus"></i> SignUp</button></li>
            </ul>
            </li>
        </ul>

        <script>
            function sign() {
                window.location.href = "SignUp.html"
            }
        </script>
        <p></p>
    </header>
    <!-- section Acceuil -->

    <div id="home">
        <div class="left">
            <h1>Best Services With <span>WIcars</span></h1>
            <p>With WIcars : quality , price and many services offers .There is also car repairs and insurance and cars to rent<span class="more"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi a minus necessitatibus enim debitis ab, dolorem ipsa perferendis fugiat totam expedita cupiditate doloribus rerum iusto magnam adipisci temporibus accusantium itaque.</span></p>
            <button class="lire"> Read More</button>
        </div>
        <!--to slide the images-->
        <div class="right mid">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1" checked>
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <input type="radio" name="radio-btn" id="radio5">
                <input type="radio" name="radio-btn" id="radio6">
                <!--start slide-->
                <div class="slide s1">
                    <img src="Images for DAW project/peugeot_308-removebgadj.png" alt="" height="">
                </div>
                <div class="slide">
                    <img src="Images for DAW project/ford-fiestaMCA-eu-ST_02_B479_Fiesta_Ext_Front_3_4_Dynamic_V5.0-16x9-2160x1215-gt3.jpg.renditions.extra-large-removebg-previewA.png" alt="">
                </div>
                <div class="slide">
                    <img src="Images for DAW project/489546-dacia-sandero-stepway-2021-l-entree-de-gamme-a-la-francaise-removebg-preview.png" alt="" height="10">
                </div>
                <div class="slide">
                    <img src="Images for DAW project/peugeot_2008_review_50-removebg-preview.png" alt="">
                </div>
                <div class="slide">
                    <img src="Images for DAW project/5055-SwiftSportHybrid-removebg-previewfsd.png" alt="">
                </div>
                <div class="slide">
                    <img src="Images for DAW project/fiat500_107-removebg-previewcx.png" alt="">
                </div>

                <!--Manuel-->
                <div class="navigationMan">
                    <label for="radio1" class="manuelbtn"><i class="fa-solid fa-1" style="color:white;"></i></label>
                    <label for="radio2" class="manuelbtn"><i class="fa-solid fa-2" style="color:white;"></i></label>
                    <label for="radio3" class="manuelbtn"><i class="fa-solid fa-3" style="color:white;"></i></label>
                    <label for="radio4" class="manuelbtn"><i class="fa-solid fa-4" style="color:white;"></i></label>
                    <label for="radio5" class="manuelbtn"><i class="fa-solid fa-5" style="color:white;"></i></label>
                    <label for="radio6" class="manuelbtn"><i class="fa-solid fa-6" style="color:white;"></i></label>
                </div>
            </div>
        </div>
    </div>

    <!-- section vehicule -->

    <section id="cars">
        <h1 class="section_title">Cars</h1>
        <form action="" method="POST">
            <div class="search-container"><input type="search" placeholder="Search..." name="search" id="sh">
                <button type="submit" name="sum" class="btn"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <div class="images">
            <ul>
                <?php
                include 'db.conn.php';
                $quert = mysqli_query($conn, "SELECT * FROM cars "); //normal query of all cars
                if (isset($_POST['sum'])) {
                    $name = $_POST['search'];
                    if ($name == "") {
                        $quert = mysqli_query($conn, "SELECT * FROM cars ");
                    } else {
                        $quert = mysqli_query($conn, "SELECT * FROM `cars` WHERE Nom like'%$name%'");
                    } //query in case of search
                }
                while ($row = mysqli_fetch_assoc($quert)) { //loop to add cars in slots
                ?>
                    <li class="car">
                        <div>
                            <img src="uploads/<?= $row['img1'] ?>">
                        </div>
                        <span><b><?php echo $row['Nom']; ?></b></span>
                        <span class="prix"><?php echo $row['prix'] ?> DA</span>
                        <a href="car.php?idv=<?= $row['IDV'] ?>">Buy Now</a>
                    </li><?php } ?>
          </ul>
        </div>
    </section>

    <!-- section services -->

    <section id="services">
        <h1 class="section_title">Our Services</h1>
        <div class="list_services">
            <div class="service dep">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Repair</h3>
                <p>With WIcars there is free car repair</p>
                <a href="services.html" class="read_more">Lire Plus</a>
            </div>
            <div class="service ass">
                <i class="fa-solid fa-newspaper"></i>
                <h3>Assurances</h3>
                <p>Best car insurance with avec WIcars</p>
                <a href="services.html" class="read_more">Lire Plus</a>
            </div>
            <div class="service lou">
                <i class="fa-solid fa-car-on"></i>
                <h3>Rent</h3>
                <p>You can rent more than 3 cars </p>
                <a href="services.html" class="read_more">Lire Plus</a>
            </div>
        </div>
    </section>

    <!-- section contact -->

    <section id="contact">
        <h1 class="section_title">Contact</h1>
        <div class="form_contact">
            <h3>Send a message</h3>
            <form action="" method="post">
                <input type="text" placeholder="Name" id="nom" name="nom">
                <input type="email" placeholder="Email" id="email" name="email">
                <textarea name="Message" id="Message" cols="30" rows="10" placeholder="Message" wrap="physical"></textarea>
                <button type="submit" id="sub" name="sub">Send</button>
            </form>
        </div>
    </section>
    <?php
    if (isset($_POST["sub"])) {
        include 'db.conn.php';
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $message = $_POST["Message"];
        if ((!empty($message)) && (!empty($nom)) && (!empty($email))) {
            $sqlquery = "INSERT into message (`nom`,`email`,`message`) values ('$nom','$email','$message')";
            $sqlconn = mysqli_query($conn, $sqlquery);
            echo '<script>alert (" YOU HAVE SUCESSFULLY SENT THE MESSAGE !")</script>';
        }else echo '<script>alert("EMPTY INPUTS !!") </script>';
    }
    ?>
    
<!-- Footer -->

    <footer class="footer">
        <div class="footer-icons">
            <a href="WIcars@example.com" class="icon">
                <i class="far fa-envelope"></i>
            </a>
            <a href="https://www.facebook.com/profile.php?id=100027886237872" class="icon">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/islamo._.birouk/?fbclid=IwAR14a643vF9bCVonR8mNYeP4_tV5aHx9sBBaqOpxLv2nMw1pHbRrOMEyK_o" class="icon">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
        <p class="con">Contact Us</p>
        <div class="footer-links">
            <a href="terms.html">Terms of Use</a>
            <a href="privacy.html">Privacy Policy</a>
        </div>
        <i id="C" class="fa-regular fa-copyright" style="color: #ffffff;"></i>
        <p class="names">Walid Moussaoui & Islam Birouk </p>
    </footer>
</body>

</html>